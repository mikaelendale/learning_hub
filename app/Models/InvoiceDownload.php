<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDownload extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'invoice_number', 'downloaded_at', 'ip_address'];

    /**
     * Get the student who downloaded the invoice.
     */
    public function student()
    {
        return $this->belongsTo(Students::class);
    }
}
