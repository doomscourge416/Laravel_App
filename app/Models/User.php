<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    // Указываем, какие поля можно заполнять через create()
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    // Поля, которые нельзя показывать
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
