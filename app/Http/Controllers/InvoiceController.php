<?php

namespace App\Http\Controllers;

use App\Models\InvoiceDownload;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function downloadInvoice()
    {
        // Sample dynamic data for the invoice
        $paymentDetails = [
            'plan_type' => 'Cloud One Enterprise',
            'payment_date' => '6 Aug, 2024',
            'card_last_digits' => '3604',
            'total' => '$24.00',
        ];

        // Generate the PDF with dynamic data
        $pdf = Pdf::loadView('invoices.invoice-pdf', compact('paymentDetails'));

        // Log the invoice download
        InvoiceDownload::create([
            'student_id' => Auth::id(), // Assuming the student is logged in
            'invoice_number' => 'INV-001', // Example invoice number
            'downloaded_at' => now(),
            'ip_address' => request()->ip(),
        ]);

        // Return the generated PDF as a download
        return $pdf->download('invoice.pdf');
    }
}
