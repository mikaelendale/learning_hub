<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        $user = Auth::user();
        $notifications = $user->notifications()->where('is_read', false)->get();
        return view('pages.courses.index', compact('notifications', 'courses'));
    }
}
