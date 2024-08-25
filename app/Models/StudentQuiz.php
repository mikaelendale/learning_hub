<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuiz extends Model
{
    use HasFactory;
    protected $table = 'student_quizzes';

    protected $fillable = [
        'student_id',
        'quiz_id',
        'attempts',
        'completed',
        'score',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
