<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedbackAttachment extends Model
{
    protected $fillable = [
        'feedback_id', 'file_path', 'file_type',
    ];

    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
}
