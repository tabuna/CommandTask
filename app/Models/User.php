<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'about' , 'phone' , 'sex', 'notification', 'nickname', 'website'
    ];


    /**
     * Мутация данных
     * @var array
     */
    protected $casts = [
        'sex' => 'boolean',
        'notification' => 'boolean',
        'about' => 'string',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
