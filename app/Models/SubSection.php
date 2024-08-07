<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSection extends Model
{
    protected $fillable = [
        'course_section_id', 'title', 'description', 'order',
    ];

    public function courseSection()
    {
        return $this->belongsTo(CourseSection::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
