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
    public function subsection()
{
    return $this->belongsTo(Subsection::class);
}

}
