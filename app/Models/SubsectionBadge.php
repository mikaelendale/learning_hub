<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsectionBadge extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subsection_id',
        'badge_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the subsection associated with the badge.
     */
    public function subsection()
    {
        return $this->belongsTo(Subsection::class);
    }

    /**
     * Get the badge associated with the subsection.
     */
    public function badge()
    {
        return $this->belongsTo(Badge::class);
    }
}
