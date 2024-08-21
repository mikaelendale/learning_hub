<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;
    protected $table = 'course_modules';
    protected $fillable = [
        'subsection_id',
        'name',
        'description',
        'video_url',
        'order',
    ];
    /**
 * Check if the course module is completed by a specific user.
 *
 * @param int $userId
 * @return bool
 */

    public function isCompletedBy($userId)
    {
        return $this->completed()->where('user_id', $userId)->exists();
    }
    public function subsection()
    {
        return $this->belongsTo(Subsection::class, 'subsection_id');
    }

    public function subsections()
    {
        return $this->hasMany(Subsection::class, 'course_id', 'course_id'); // Assuming subsections share the same course_id
    }

}
