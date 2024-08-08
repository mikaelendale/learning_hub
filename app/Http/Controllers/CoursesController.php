<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        $user = Auth::user();
        return view('pages.courses.index', compact('courses'));
    }
    public function level()
    {
        // Assuming Auth::user()->class_attended is the level of the course
        $userClassAttended = Auth::user()->class_attended;

        // Fetch courses that match the user's attended class level and load subsections
        $courses = Courses::where('level', $userClassAttended)
            ->with('subsections')
            ->get();

        // Pass the filtered courses to the view
        return view('pages.courses.level', compact('courses'));
    }
    public function setDetail(Request $request)
    {
        // Store the course ID in the session
        session(['course_id' => $request->input('course_id')]);

        // Redirect to the clean URL
        return redirect()->route('courses.detail');
    }

    public function detail()
    {
        // Retrieve the course ID from the session
        $courseId = session('course_id');

        // Fetch the course details
        $course = Courses::with('subsections')->findOrFail($courseId);

        // Pass the course details to the view
        return view('pages.courses.detail', compact('course'));
    }

}
