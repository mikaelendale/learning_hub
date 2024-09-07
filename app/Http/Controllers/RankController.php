<?php

namespace App\Http\Controllers;

use App\Models\StudentQuiz;
use Illuminate\Support\Facades\Auth;

class RankController extends Controller
{
    public function index()
    {
        // Fetch the top 5 students based on total quiz scores and badges
        $topStudents = StudentQuiz::select('student_quizzes.*', 'students.*', \DB::raw('SUM(score) as total_score'), \DB::raw('COUNT(claimed_badges.id) as badge_count'))
            ->join('students', 'student_quizzes.student_id', '=', 'students.id')
            ->leftJoin('claimed_badges', 'student_quizzes.student_id', '=', 'claimed_badges.student_id')
            ->groupBy('student_quizzes.student_id', 'students.id') // Group by student ID and student table's ID to include all student columns
            ->orderByDesc('total_score')
            ->orderByDesc('badge_count')
            ->limit(5)
            ->get();

        // Fetch the logged-in student’s score and badges
        $loggedInStudent = StudentQuiz::select('student_quizzes.*', 'students.*', \DB::raw('SUM(score) as total_score'), \DB::raw('COUNT(claimed_badges.id) as badge_count'))
            ->join('students', 'student_quizzes.student_id', '=', 'students.id')
            ->leftJoin('claimed_badges', 'student_quizzes.student_id', '=', 'claimed_badges.student_id')
            ->where('student_quizzes.student_id', Auth::id())
            ->groupBy('student_quizzes.student_id', 'students.id') // Group by student ID and student table's ID
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
