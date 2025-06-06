<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailToken extends Model
{
    protected $fillable = [
        'status',
        'token',
        'business_id',
        'user_id'
    ];
}
