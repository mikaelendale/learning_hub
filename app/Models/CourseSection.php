<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    protected $fillable = [
        'course_id', 'title', 'section_type', 'order',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function subSections()
    {
        return $this->hasMany(SubSection::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
