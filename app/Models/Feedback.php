<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'user_id', 'course_id', 'content', 'rating', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function responses()
    {
        return $this->hasMany(FeedbackResponse::class);
    }

    public function attachments()
    {
        return $this->hasMany(FeedbackAttachment::class);
    }
}
