<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Enrollment;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        $user = Auth::user();
        $enrolledStudents = Students::inRandomOrder()->limit(7)->get();
        // Fetch the number of available courses from the courses table
        $availableCourses = Courses::count(); // Total number of courses
        // Fetch the total number of enrolled students
        $studentId = Auth::user()->id; // Replace with the specific student ID

        $enrolledCount = Enrollment::where('student_id', $studentId)
            ->count();
        // Fetch the total number of students
        $totalStudents = Students::count();

        $user = Auth::user();
        $classAttended = $user->class_attended;

// Count courses where level matches the user's class_attended
        $courseCount = Courses::where('level', $classAttended)->count();  

        return view('pages/index', compact('courses', 'enrolledStudents', 'availableCourses', 'totalStudents', 'courseCount', 'enrolledCount'));
    }
}
