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
    protected $dateFormat = 'U';
    public $timestamps = true;
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

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
