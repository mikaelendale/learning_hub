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
    public function course()
{
    return $this->belongsTo(Courses::class, 'course_id');
}

}
