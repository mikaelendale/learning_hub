<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'issuer',
        'issue_date',
        'certificate_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
