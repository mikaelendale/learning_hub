<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PageController;

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
 



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [CertificateController::class, 'index'])->name('dashboard');
    Route::get('certificates/{certificate}', [CertificateController::class, 'show'])->name('certificates.show');
    Route::get('/daniel', [CertificateController::class, 'students_boy'])->name('certificates.students_boy');
    Route::get('/maedot', [CertificateController::class, 'students_girls'])->name('certificates.students_girls');
});

Route::get('/', [PageController::class, 'index'])->name('welcome');
Route::get('/daniel', [PageController::class, 'daniel'])->name('daniel');
Route::get('/maedot', [PageController::class, 'maedot'])->name('maedot');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
