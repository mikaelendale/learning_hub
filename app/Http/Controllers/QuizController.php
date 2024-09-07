<?php

namespace App\Http\Controllers;

use App\Models\Answer;
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
        $quiz = Quiz::with('questions')->find($quizId);

        if (!$quiz) {
            abort(404, 'Quiz not found.');
        }

        // Check if the student has already taken the quiz and the number of attempts
        $studentQuiz = StudentQuiz::where('quiz_id', $quiz->id)
            ->where('student_id', $userId)
            ->first();

        $attempt = $studentQuiz ? $studentQuiz->attempt : 0;
        $score = $studentQuiz ? $studentQuiz->score : 0;

        // Calculate total points
        $totalPoints = $quiz->questions->sum('point');

        return view('pages.quiz.index', compact('quiz', 'attempt', 'studentQuiz', 'score', 'totalPoints'));
    }

    public function setQuiz(Request $request)
    {
        // Store the quiz ID in the session
        session(['quiz_id' => $request->input('quiz_id')]);

        // Redirect to the clean URL
        return redirect()->route('courses.quizLandingPage');
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

        $attempt = $studentQuiz ? $studentQuiz->attempt : 0;

        // Redirect if the student has reached or exceeded the maximum number of attempts
        if ($attempt >= 2) {
            return redirect()->route('courses.quizLandingPage')->with('error', '!! You have already completed this quiz and cannot retake it.');
        }

        // Assuming you fetched the quiz record
        $timeAllotted = $quiz->time_alloted; // This is in the format "HH:MM:SS"

// Convert the timeAllotted to seconds
        list($hours, $minutes, $seconds) = explode(':', $timeAllotted);
        $totalTimeInSeconds = ($hours * 3600) + ($minutes * 60) + $seconds;

// Pass the total time in seconds to the view
        return view('pages.quiz.start', compact('quiz', 'attempt', 'totalTimeInSeconds'));

    }

    public function submitQuiz(Request $request)
    {
        // Retrieve the quiz by ID
        $quiz = Quiz::with('questions.answers')->find($request->input('quiz_id'));

        // Check if the quiz was found
        if (!$quiz) {
            return redirect()->back()->with('error', 'Quiz not found.');
        }

        $totalScore = 0;
        $answersProvided = [];
        $questions = $quiz->questions;

        // Iterate over each question and check if the selected answer is correct
        foreach ($questions as $question) {
            if (isset($request->answers[$question->id])) {
                $selectedAnswerId = $request->answers[$question->id];
                $answer = Answer::where('id', $selectedAnswerId)->first();
                $isCorrect = $answer && $answer->is_correct;

                if ($isCorrect) {
                    // Add points for correct answer
                    $totalScore += $question->point;
                }

                $answersProvided[$question->id] = $selectedAnswerId;
            } else {
                $answersProvided[$question->id] = null; // Mark as no answer provided
            }
        }

        // Retrieve or create the studentQuiz record
        $studentQuiz = StudentQuiz::firstOrNew(
            [
                'student_id' => auth()->id(),
                'quiz_id' => $quiz->id,
            ]
        );

        // Check if the student has already attempted the quiz twice
        if ($studentQuiz->exists && $studentQuiz->attempt >= 2) {
            return redirect()->back()->with('error', 'You have reached the maximum number of attempts.');
        }

        // Increment the attempt count
        $studentQuiz->attempt = $studentQuiz->exists ? $studentQuiz->attempt + 1 : 1;
        $studentQuiz->score = $totalScore;
        $studentQuiz->save();

        // Store unanswered questions in the session
        session()->put('unanswered_questions', $answersProvided);

        // Redirect to the results page with correct parameters
        return redirect()->route('quizzes.results', [
            'quizId' => $quiz->id,
            'studentQuizId' => $studentQuiz->id,
        ]);
    }

    public function showResults($quizId, $studentQuizId)
    {
        $quiz = Quiz::with('questions.answers')->findOrFail($quizId);
        $studentQuiz = StudentQuiz::findOrFail($studentQuizId);

        $questions = $quiz->questions;
        $answers = request('answers', []);

        return view('pages.quiz.result', compact('quiz', 'studentQuiz', 'questions', 'answers'));

    }

}
