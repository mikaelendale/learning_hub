<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    protected $fillable = [
        'course_section_id', 'user_id', 'position', 'points',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }
}
