<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $courses = Courses::all();
        return view('pages/index', compact('courses'));
}
}
