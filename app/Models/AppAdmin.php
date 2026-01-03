<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AppAdmin extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'app_admins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'fcm_token'
    ];

    protected $hidden = [
        'password'
    ];
}
