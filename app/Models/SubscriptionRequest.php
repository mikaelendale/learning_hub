<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionRequest extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'student_id',
        'current_plan',
        'requested_plan',
        'read_by_student',
        'read_by_admin',
        'response',
        'requested_at',
    ];

    // The table associated with the model
    protected $table = 'subscription_requests';

    // Casting attributes to specific types
    protected $casts = [
        'requested_at' => 'datetime',
        'read_by_student' => 'boolean',
        'read_by_admin' => 'boolean',
    ];

    // Relationship with the Student model
    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}
