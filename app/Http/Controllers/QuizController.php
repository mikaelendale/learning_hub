<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\StudentQuiz;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Show the quiz landing page for a specific course.
     *
     * @param int $courseId
     * @return \Illuminate\View\View
     */
    public function showQuizLandingPage($courseId)
    {
        $userId = Auth::id();

        // Fetch the quiz related to the course
        $quiz = Quiz::where('course_id', $courseId)->first();

        if (!$quiz) {
            abort(404, 'Quiz not found for this course.');
        }

        // Check if the student has already taken the quiz and the number of attempts
        $studentQuiz = StudentQuiz::where('quiz_id', $quiz->id)
            ->where('student_id', $userId)
            ->first();

        $attempts = $studentQuiz ? $studentQuiz->attempts : 0;

        return view('quiz.landing', compact('quiz', 'attempts'));
    }
    
}

