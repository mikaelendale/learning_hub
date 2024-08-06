<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Students extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'password',
        'class_attended',
        'profile',
        'status',
        'payment',
        'telegram_username',
        'gender',
        'address',
        'dob',
        'notification',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<string, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date',
        'payment' => 'boolean',
    ];
}
