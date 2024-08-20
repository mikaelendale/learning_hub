<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsectionCompleted extends Model
{
    use HasFactory;
    protected $table = 'subsections_completed';
    protected $fillable = [
        'student_id',
        'subsection_id',
        'created_at',
    ];

    public function student()
{
    return $this->belongsTo(Students::class);
}

public function subsection()
{
    return $this->belongsTo(Subsection::class);
}
}
