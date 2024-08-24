<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'point',
        'question',
        'order',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
