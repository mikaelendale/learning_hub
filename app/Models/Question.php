<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['quiz_id', 'point', 'question', 'order'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
