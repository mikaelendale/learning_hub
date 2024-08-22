<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimedBadge extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'badge_id',
        'claimed_at',
    ];

    // Define the relationships
     
    public function badge()
{
    return $this->belongsTo(CourseBadge::class, 'badge_id');
}

public function student()
{
    return $this->belongsTo(Students::class, 'student_id');
}

}
