<?php

namespace App\Models;

use App\Models\Notification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// Import the Notification model

class Students extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'password',
        'class_attended',
        'profile_pic',
        'status',
        'payment',
        'telegram_username',
        'gender',
        'address',
        'dob',
        'notification',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date',
        'payment' => 'boolean',
    ];

    /**
     * Get the notifications for the student.
     */ 
    public function enrollments()
    {
        return $this->hasMany(Enrolled::class, 'students_id');
    }
}
