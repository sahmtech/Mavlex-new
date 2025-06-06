<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailToken;
use App\Models\User;


class EmailTokenVerificationController extends Controller
{
    public function VerifyBusinessOwnerEmail(Request $request, $token)
    {
        $data = EmailToken::where('token', $token)
        ->where('status', 'active')
        ->first();

        if (!empty($data)) {
            # code...
            $user = User::where('id', $data->user_id)->update([
                'email_verified_at'=>date('Y-m-d H:i:s')
            ]);

            $data->status = 'inactive';
            $data->save();

            
            
            return view('email_verification/index');
        }

        abort(404);
    }
}
