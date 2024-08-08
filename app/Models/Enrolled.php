<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolled extends Model
{
    use HasFactory;

    protected $table = 'enrolled';

    protected $fillable = [
        'subsection_id',
        'student_id',
        'status',
    ];

    /**
     * Get the subsection that owns the enrollment.
     */
    public function subsection()
    {
        return $this->belongsTo(Subsection::class, 'subsection_id');
    }

    public function student()
    {
        return $this->belongsTo(Students::class, 'students_id');
    }
}
