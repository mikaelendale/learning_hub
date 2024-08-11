<?php

namespace App\Http\Controllers;

use App\Models\CourseContent;
use App\Models\Courses;
use App\Models\Enrolled;
use App\Models\Subsection;
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
        $courseId = session('course_id');
        $course = Courses::with(['subsections' => function ($query) {
            $query->orderBy('order'); // Ensure subsections are ordered
        }])->findOrFail($courseId);

        $userId = Auth::id();

        // Fetch the user's completed subsections
        $completedSubsections = Enrolled::where('students_id', $userId)
            ->pluck('subsection_id');

        // Determine if the user has completed the previous subsection
        foreach ($course->subsections as $subsection) {
            $subsection->can_access = true; // Default to true
            if ($subsection->order > 1) {
                // Find the previous subsection
                $previousSubsection = $course->subsections->where('order', $subsection->order - 1)->first();
                if ($previousSubsection && !$completedSubsections->contains($previousSubsection->id)) {
                    $subsection->can_access = false;
                }
            }
        }

        return view('pages.courses.detail', compact('course'));
    }

    public function show($id)
    {
        // Fetch the course content based on the subsection ID
        $courseContent = CourseContent::where('subsection_id', $id)->get();

        // Fetch the subsection details to include in the view
        $subsection = Subsection::findOrFail($id);

        // Pass the course content and subsection details to the view

        if ($courseContent) {
            return view('pages.courses.course', [
                'subsection' => $subsection,
                'courseContent' => $courseContent,
            ]);
        } else {
            return abort(404, 'Course content not found');
        }

    }
    public function list(){
        $courses = Courses::all();
        return view('pages.courses.list', compact('courses'));
    }
}
