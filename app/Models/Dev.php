<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Dev as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Dev extends Model
{
    protected $table = 'devs';
    protected $dateFormat = 'c';
    public $timestamps = true;

    protected $casts = [
        'password' => 'string'
    ];

    protected $fillable = [
        'name',
        'username',
        'bio',
        'followers',
        'following',
        'stars',
        'organization',
        'location',
        'email',
        'link',
        'web',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
