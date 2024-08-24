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
    public function showQuizLandingPage($course_id)
    {
        $userId = Auth::id();

        // Fetch the quiz related to the course
        $quiz = Quiz::where('course_id', $course_id)->first();

        if (!$quiz) {
            abort(404, 'Quiz not found for this course.');
        }

        // Check if the student has already taken the quiz and the number of attempts
        $studentQuiz = StudentQuiz::where('quiz_id', $quiz->id)
            ->where('student_id', $userId)
            ->first();

        $attempts = $studentQuiz ? $studentQuiz->attempts : 0;

        return view('pages.quiz.index', compact('quiz', 'attempts'));
    }
    public function startQuiz($quizId)
    {
        $quiz = Quiz::with(['questions.answers'])->findOrFail($quizId);

        // Any additional logic for starting the quiz
        return view('pages.quiz.start', compact('quiz'));
    }
    public function submitQuiz(Request $request, $quizId)
    {
        $quiz = Quiz::with(['questions.answers'])->findOrFail($quizId);
        $totalScore = 0;

        foreach ($quiz->questions as $question) {
            $selectedAnswer = $request->input("answers.{$question->id}");
            $correctAnswer = $question->answers->firstWhere('is_correct', true);

            if ($selectedAnswer == $correctAnswer->id) {
                $totalScore += $question->point;
            }
        }

        // Save the quiz result to the database, e.g., in a `student_quiz` table.

        return redirect()->route('quizzes.result', ['quizId' => $quizId])
            ->with('success', 'Quiz submitted successfully. Your score is: ' . $totalScore);
    }

}
