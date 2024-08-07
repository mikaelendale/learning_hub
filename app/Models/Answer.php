<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'question_id', 'answer_text', 'is_correct',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
