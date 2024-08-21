<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;
    protected $table = 'course_modules';
    protected $fillable = [
        'subsection_id',
        'name',
        'description',
        'video_url',
        'order',
    ];
    public function isCompletedBy($studentId)
    {
        return ModuleCompleted::where('course_module_id', $this->id)
            ->where('student_id', $studentId)
            ->exists();
    }
    public function subsection()
    {
        return $this->belongsTo(Subsection::class, 'subsection_id');
    }

    public function subsections()
    {
        return $this->hasMany(Subsection::class, 'course_id', 'course_id'); // Assuming subsections share the same course_id
    }

}
