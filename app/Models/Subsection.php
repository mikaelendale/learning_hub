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
        'description',
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
    public function courseModules()
    {
        return $this->hasMany(CourseModule::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
