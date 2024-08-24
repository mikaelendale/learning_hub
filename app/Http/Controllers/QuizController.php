<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\StudentQuiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Show the quiz landing page for a specific course.
     *
     * @param int $courseId
     * @return \Illuminate\View\View
     */
    public function quizLandingPage()
    {
        $userId = Auth::id();
        $quizId = session('quiz_id'); // Retrieve quiz_id from the session

        if (!$quizId) {
            abort(404, 'Quiz not found.');
        }

        // Fetch the quiz by ID
        $quiz = Quiz::find($quizId);

        if (!$quiz) {
            abort(404, 'Quiz not found.');
        }

        // Check if the student has already taken the quiz and the number of attempts
        $studentQuiz = StudentQuiz::where('quiz_id', $quiz->id)
            ->where('student_id', $userId)
            ->first();

        $attempts = $studentQuiz ? $studentQuiz->attempts : 0;

        return view('pages.quiz.index', compact('quiz', 'attempts'));
    }

    public function setQuiz(Request $request)
    {
        // Store the quiz ID in the session
        session(['quiz_id' => $request->input('quiz_id')]);

        // Redirect to the clean URL
        return redirect()->route('courses.quizLandingPage');
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

    public function startQuiz(Request $request)
{
    // Store the quiz ID in the session
    session(['quiz_id' => $request->input('quiz_id')]);

    // Redirect to the clean URL
    return redirect()->route('quizzes.start');
}
public function quizStartPage()
{
    $userId = Auth::id();
    $quizId = session('quiz_id'); // Retrieve quiz_id from the session

    if (!$quizId) {
        abort(404, 'Quiz not found.');
    }

    // Fetch the quiz by ID
    $quiz = Quiz::find($quizId);

    if (!$quiz) {
        abort(404, 'Quiz not found.');
    }

    // Check if the student has already taken the quiz and the number of attempts
    $studentQuiz = StudentQuiz::where('quiz_id', $quiz->id)
        ->where('student_id', $userId)
        ->first();

    $attempts = $studentQuiz ? $studentQuiz->attempts : 0;

    return view('pages.quiz.start', compact('quiz', 'attempts'));
}


}
