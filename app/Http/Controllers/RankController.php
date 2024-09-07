<?php

namespace App\Http\Controllers;

use App\Models\StudentQuiz;
use Illuminate\Support\Facades\Auth;

class RankController extends Controller
{
    public function index()
    {
        // Get the logged-in student's class level (assuming you have a column like 'class_attended' in the 'students' table)
        $loggedInStudentClass = Auth::user()->class_attended;

        // Fetch the top 5 students based on total quiz scores, badges, and class attended
        $topStudents = StudentQuiz::select(
            'student_quizzes.student_id',
            'students.name',
            'students.status',
            'students.profile_pic', // Example column for student's profile picture
            'students.class_attended', // Fetch class attended
            \DB::raw('SUM(score) as total_score'), // Sum the scores
            \DB::raw('COUNT(claimed_badges.id) as badge_count') // Count badges earned
        )
            ->join('students', 'student_quizzes.student_id', '=', 'students.id')
            ->leftJoin('claimed_badges', 'student_quizzes.student_id', '=', 'claimed_badges.student_id')
            ->where('students.class_attended', $loggedInStudentClass) // Filter by the logged-in student's class
            ->groupBy('student_quizzes.student_id', 'students.id', 'students.name','students.status', 'students.profile_pic', 'students.class_attended')
            ->orderByDesc('total_score')
            ->orderByDesc('badge_count')
            ->limit(5)
            ->get();

        // Fetch the logged-in student's score, badges, and class attended
        $loggedInStudent = StudentQuiz::select(
            'student_quizzes.student_id',
            'students.name',
            'students.status',
            'students.profile_pic',
            'students.class_attended', // Fetch class attended
            \DB::raw('SUM(score) as total_score'),
            \DB::raw('COUNT(claimed_badges.id) as badge_count')
        )
            ->join('students', 'student_quizzes.student_id', '=', 'students.id')
            ->leftJoin('claimed_badges', 'student_quizzes.student_id', '=', 'claimed_badges.student_id')
            ->where('student_quizzes.student_id', Auth::id())
            ->groupBy('student_quizzes.student_id', 'students.id', 'students.name','students.status', 'students.profile_pic', 'students.class_attended')
            ->first();

        // Prepare data for view
        $data = [
            'topStudents' => $topStudents,
            'loggedInStudent' => $loggedInStudent,
        ];

        // Return the view with the data
        return view('pages.leader.index', $data);
    }
}

