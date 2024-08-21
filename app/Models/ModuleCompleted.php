<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleCompleted extends Model
{
    use HasFactory;
    protected $table ='module_completed';
    protected $fillable = [
        'student_id',
        'course_module_id',
        'completed_at',
        'created_at',
    ];
}
