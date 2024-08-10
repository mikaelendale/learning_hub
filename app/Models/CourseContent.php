<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;
    protected $table = 'course_content';
    protected $fillable = [
        'id',
        'subsection_id',
        'title',
        'content',
        'video_url',
        'code_examples',
        'files',
        'external_links',
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'published_at' => 'datetime',
        'content' => 'array',
    ];
    public function subsection()
    {
        return $this->belongsTo(Subsection::class);
    }
}
