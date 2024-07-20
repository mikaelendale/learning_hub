<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::where('user_id', Auth::id())->get(); 
        return view('certificates.index', compact('certificates'));
    }

    public function show(Certificate $certificate)
    {
        return view('certificates.show', compact('certificate'));
    }
    public function students_boy()
    {
        $certificates = Certificate::where('user_id', '27')->get();
        return view('certificates.student_boy', compact('certificates'));
    }
    public function students_girl()
    {
        $certificates = Certificate::where('user_id', '28')->get();
        return view('certificates.student_girl', compact('certificates'));
    }
}
