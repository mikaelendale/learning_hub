<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'time_alloted',
        'score',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function studentQuizzes()
    {
        return $this->hasMany(StudentQuiz::class);
    }
    
}
