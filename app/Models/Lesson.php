<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'sub_section_id', 'title', 'content', 'video_url', 'code_example', 'resource_links', 'order',
    ];

    public function subSection()
    {
        return $this->belongsTo(SubSection::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}
