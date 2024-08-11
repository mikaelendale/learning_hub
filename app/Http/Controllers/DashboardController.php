<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        $user = Auth::user();

        return view('pages/index', compact('courses'));
    }
}
