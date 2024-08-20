<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        $user = Auth::user();
        $enrolledStudents = Students::inRandomOrder()->limit(7)->get();

        return view('pages/index', compact('courses', 'enrolledStudents'));
    }
}
