<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RankController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/notifications', [NotificationController::class, 'showNotifications']);
    Route::get('/send-notification', [ExampleController::class, 'sendNotification']);

});

Route::middleware(['auth', 'check.status'])->group(function () {
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
    Route::get('/courses/level', [CoursesController::class, 'level'])->name('courses.level');
    Route::get('/courses/detail', [CoursesController::class, 'detail'])->name('courses.detail');
    Route::post('/courses/claim-badge/{badgeId}', [CoursesController::class, 'claimBadge'])
        ->name('claim.badge');
    Route::post('/claim-badge/{badge}', [CoursesController::class, 'claim'])->name('claimBadge');
    Route::post('/courses/set-detail', [CoursesController::class, 'setDetail'])->name('courses.setDetail');
    Route::get('/courses/enroll/{id}', [CoursesController::class, 'show'])->name('courses.enroll');
    Route::get('/courses/list', [CoursesController::class, 'list'])->name('courses.list');
    Route::post('/comments/store', [CoursesController::class, 'store'])->name('comments.store');
    Route::patch('/courses/coursemodule/markdone/{id}', [CoursesController::class, 'markModuleDone'])->name('coursemodule.markdone');
    Route::patch('/courses/subsection/{id}/complete', [CoursesController::class, 'completeSubsection'])->name('subsection.complete');
    Route::get('/courses/enrolled', [CoursesController::class, 'enrolled'])->name('courses.enrolled');
    Route::get('/courses/progress', [CoursesController::class, 'progress'])->name('courses.progress');
    Route::post('/quizzes/set-quiz', [QuizController::class, 'setQuiz'])->name('courses.setQuiz');
    Route::get('/quizzes/landing', [QuizController::class, 'quizLandingPage'])->name('courses.quizLandingPage');
    Route::post('/quizzes/start', [QuizController::class, 'startQuiz'])->name('quizzes.startQuiz');
    Route::get('/quizzes/start', [QuizController::class, 'quizStartPage'])->name('quizzes.start');
    Route::post('/quizzes/submit', [QuizController::class, 'submitQuiz'])->name('quizzes.submit');
    // web.php
    Route::get('/quizzes/results/{quizId}/{studentQuizId}', [QuizController::class, 'showResults'])->name('quizzes.results');
    Route::get('/quizzes', [QuizController::class, 'quizLanding'])->name('quizzes.landing');
    Route::get('/status/leaderboard', [RankController::class, 'index'])->name('course.leader');
    Route::get('/account/subscription', [AccountController::class, 'index'])->name('account.subscription');
    Route::get('/account/subscription/upgrade', [AccountController::class, 'upgrade'])->name('subscription.upgrade');
    Route::post('/account/subscription/cancel', [AccountController::class, 'cancel'])->name('subscription.cancel');
    Route::get('/account/subscription/payment', [AccountController::class, 'showPaymentPage'])->name('payment.page');
    Route::post('/update-status', [AccountController::class, 'updateStatus'])->name('update.status');
    Route::get('/get-status', [AccountController::class, 'getStatus'])->name('get.status');
    Route::get('/invoice/download', [InvoiceController::class, 'downloadInvoice'])->name('invoice.download');
    Route::get('/account/completed-certificates', [AccountController::class, 'completedCertificates'])->name('account.certificates');
});

//admin routes

//admin routes

//courses pages

require __DIR__ . '/auth.php';
