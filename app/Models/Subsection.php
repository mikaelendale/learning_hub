<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    use HasFactory;
    protected $table = 'subsection';

    protected $fillable = [
        'course_id',
        'name',
        'detail',
        'order',
    ];
// App\Models\Subsection.php
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function enrolledStudents()
    {
        return $this->hasMany(Enrolled::class, 'subsection_id');
    }
    public function courseContents()
    {
        return $this->hasMany(CourseContent::class);
    }
}
