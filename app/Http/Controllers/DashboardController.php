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
        // Fetch the number of available courses from the courses table
        $availableCourses = Courses::count(); // Total number of courses

        // Fetch the number of students based on class_attended and level
        $studentsByClassAndLevel = Students::select('class_attended', 'level')
            ->groupBy('class_attended', 'level')
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->class_attended . '-' . $item->level => $item->count()];
            });

        // Fetch the total number of enrolled students
        $enrolledCourses = Students::whereHas('courses')->count();

        // Fetch the total number of students
        $totalStudents = Students::count(); 

        return view('pages/index', compact('courses', 'enrolledStudents','availableCourses', 'studentsByClassAndLevel', 'enrolledCourses', 'totalStudents'));
    }
}
