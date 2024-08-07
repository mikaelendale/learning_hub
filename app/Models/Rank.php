<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $fillable = [
        'user_id', 'course_section_id', 'rank', 'points',
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
