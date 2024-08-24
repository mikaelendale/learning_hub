<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'quiz_id',
        'attempts',
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
