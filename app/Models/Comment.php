<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'subsection_id',
        'students_id',
        'comment',
        'created_at',
        'updated_at',
    ];
    public function students()
    {
        return $this->belongsTo(Students::class);
    }

    public function subsection()
    {
        return $this->belongsTo(Subsection::class);
    }

}
