<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use Illuminate\Support\Facades\Config;

class Media extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $appends = ['display_name', 'display_url'];


    /**
     * Get all of the owning mediable models.
     */
    public function mediable()
    {
        return $this->morphTo();
    }

    /**
     * Get display name for the media
     */
    public function getDisplayNameAttribute()
    {
        $array = explode('_', $this->file_name, 3);
        return !empty($array[2]) ? $array[2] : $array[1];
    }

    /**
     * Get display link for the media
     */
    public function getDisplayUrlAttribute()
    {
        $path = asset('/uploads/media/' . rawurlencode($this->file_name));

        return $path;
    }

    /**
     * Get display path for the media
     */
    public function getDisplayPathAttribute()
    {
        $path = public_path('uploads/media') . '/' . rawurlencode($this->file_name);

        return $path;
    }

    /**
     * Get display link for the media
     */
    public function thumbnail($size = [60, 60], $class = null)
    {
        $html = '<img';
        $html .= ' src="' . $this->display_url . '"';
        $html .= ' width="' . $size[0] . '"';
        $html .= ' height="' . $size[1] . '"';

        if (!empty($class)) {
            $html .= ' class="' . $class . '"';
        }

        $html .= '>';

        return $html;
    }

    /**
     * Uploads files from the request and add's medias to the supplied model.
     *
     * @param  int $business_id, obj $model, $obj $request, string $file_name
     */

    public static function uploadMedia($business_id, $model, $request, $file_input_name, $is_single = false, $model_media_type = null)
    {
        if (config('app.env') == 'demo') {
            return [
                'uploaded_files' => [],
                'errors' => ['File uploads are disabled in demo mode.']
            ];
        }

        $uploaded_files = [];
        $errors = [];
        $user = Auth::user();
        if ($request->hasFile($file_input_name)) {
            $files = $request->file($file_input_name);
            $files = is_array($files) ? $files : [$files];

            foreach ($files as $file) {
                if (self::isAllowedFile($file)) {
                    $uploaded_file = self::uploadFile($file);
                    if (!empty($uploaded_file)) {
                        $uploaded_files[] = $uploaded_file;
                    } else {
                        $errors[] = 'Failed to upload file: ' . $file->getClientOriginalName();
                    }
                } else {
                    $userInfo = $user ? 'User ID ' . $user->id . ' (' . $user->email . ')' : 'Guest User';
                    Log::warning("Disallowed file type attempted by {$userInfo}: " . $file->getClientOriginalName());
                    $errors[] = 'File type not allowed: ' . $file->getClientOriginalName();
                }
            }
        }

        if ($request->filled($file_input_name) && !is_array($request->input($file_input_name))) {
            $base64_data = $request->input($file_input_name);
            $base64_array = explode(',', $base64_data);
            $base64_string = isset($base64_array[1]) ? $base64_array[1] : $base64_array[0];

            if (self::is_base64($base64_string)) {
                $uploaded_file = self::uploadBase64Image($base64_string);
                if (!empty($uploaded_file)) {
                    $uploaded_files[] = $uploaded_file;
                } else {
                    $errors[] = 'Failed to upload base64 encoded image.';
                }
            } else {
                $errors[] = 'Invalid base64 encoded string.';
            }
        }

        if (!empty($uploaded_files)) {
            if ($is_single) {
                $uploaded_files = $uploaded_files[0];
            }
            self::attachMediaToModel($model, $business_id, $uploaded_files, $request, $model_media_type);
        }

        return [
            'uploaded_files' => $uploaded_files,
            'errors' => $errors
        ];
    }

    /**
     * Check if the file is allowed based on extension and MIME type.
     *
     * @param  \Illuminate\Http\UploadedFile $file
     * @return bool
     */
    protected static function isAllowedFile($file)
    {
        $allowedExtensions = Config::get('constants.media_upload.allowed_extensions', []);
        $allowedMimeTypes = Config::get('constants.media_upload.allowed_mime_types', []);

        $extension = strtolower($file->getClientOriginalExtension());
        $mimeType = strtolower($file->getMimeType());

        return in_array($extension, $allowedExtensions) && in_array($mimeType, $allowedMimeTypes);
    }

    /**
     * Uploads the file to storage after sanitizing the name.
     *
     * @param  \Illuminate\Http\UploadedFile $file
     * @return string|null
     */
    public static function uploadFile($file)
    {
        $file_name = null;

        $user = Auth::user();
        $userInfo = $user ? 'User ID ' . $user->id . ' (' . $user->email . ')' : 'Guest User';

        if (self::isAllowedFile($file) && $file->getSize() <= Config::get('constants.document_size_limit', 5000000)) {
            $originalName = preg_replace('/[^A-Za-z0-9.\-_]/', '', $file->getClientOriginalName());
            $new_file_name = time() . '_' . mt_rand() . '_' . $originalName;
            if ($file->storeAs('media', $new_file_name)) {
                $file_name = $new_file_name;
            }
        } else {
            Log::warning("Attempted to upload disallowed file by {$userInfo}: " . $file->getClientOriginalName());
        }

        return $file_name;
    }

    public static function is_base64($s)
    {
        return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s);
    }

    /**
     * Uploads requested file to storage.
     *
     */


    public static function uploadBase64Image($base64_string)
    {

        $file_name = time() . '_' . mt_rand() . '_media.jpg';

        $output_file = public_path('uploads') . '/media/' . $file_name;
        $ifp = fopen($output_file, 'wb');

        fwrite($ifp, base64_decode($base64_string));

        fclose($ifp);

        return $file_name;
    }

    /**
     * Deletes resource from database and storage
     *
     */
    public static function deleteMedia($business_id, $media_id)
    {
        $media = Media::where('business_id', $business_id)
            ->findOrFail($media_id);

        $media_path = public_path('uploads/media/' . $media->file_name);

        if (file_exists($media_path)) {
            unlink($media_path);
        }
        $media->delete();
    }

    public function uploaded_by_user()
    {
        return $this->belongsTo(\App\Models\User::class, 'uploaded_by');
    }

    public static function attachMediaToModel($model, $business_id, $uploaded_files, $request = null, $model_media_type = null)
    {
        if (!empty($uploaded_files)) {
            if (is_array($uploaded_files)) {
                $media_obj = [];
                foreach ($uploaded_files as $value) {
                    $media_obj[] = new \App\Models\Media([
                        'file_name' => $value,
                        'business_id' => $business_id,
                        'description' => !empty($request->description) ? $request->description : null,
                        'uploaded_by' => !empty($request->uploaded_by) ? $request->uploaded_by : auth()->user()->id,
                        'model_media_type' => $model_media_type
                    ]);
                }

                $model->media()->saveMany($media_obj);
            } else {
                $model->media()->delete();

                $media_obj = new \App\Models\Media([
                    'file_name' => $uploaded_files,
                    'business_id' => $business_id,
                    'description' => !empty($request->description) ? $request->description : null,
                    'uploaded_by' => !empty($request->uploaded_by) ? $request->uploaded_by : auth()->user()->id,
                    'model_media_type' => $model_media_type
                ]);
                $model->media()->save($media_obj);
            }
        }
    }
}
