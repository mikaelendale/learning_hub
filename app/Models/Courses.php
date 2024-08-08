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


}
