<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'course_id', 'title', 'description', 'is_active',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
