<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
    Route::get('/courses/level', [CoursesController::class, 'level'])->name('courses.level');
    Route::get('/courses/detail', [CoursesController::class, 'detail'])->name('courses.detail');
    Route::post('/courses/set-detail', [CoursesController::class, 'setDetail'])->name('courses.setDetail');
    Route::get('/courses/enroll/{id}', [CoursesController::class, 'show'])->name('courses.enroll');
    Route::get('/courses/list', [CoursesController::class, 'list'])->name('courses.list');
    Route::post('/comments/store', [CoursesController::class, 'store'])->name('comments.store');
    Route::post('/courses/coursesection//markdone{id}/', [CoursesController::class, 'markSubsectionDone'])->name('coursesubsection.markdone');
    Route::post('/courses/coursemodule/markdone/{id}', [CoursesController::class, 'markModuleDone'])->name('coursemodule.markdone');
});

//courses pages

require __DIR__ . '/auth.php';
