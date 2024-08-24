<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'image',
        'price',
        'duration',
        'category',
        'level',
        'status',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    // App\Models\Course.php
    public function subsections()
    {
        return $this->hasMany(Subsection::class, 'course_id');
    }
    public function students()
    {
        return $this->hasMany(Students::class, 'class_attended', 'level');
    }
    public function badges()
    {
        return $this->hasMany(CourseBadge::class, 'course_id');
    }

    public function claimedBadges()
    {
        return $this->hasManyThrough(ClaimedBadge::class, CourseBadge::class, 'course_id', 'badge_id', 'id', 'id');
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
    public function quizzes()
{
    return $this->hasMany(Quiz::class, 'course_id');
}


}