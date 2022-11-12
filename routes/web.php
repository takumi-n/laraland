<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard',  [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/courses',  [CourseController::class, 'list'])->middleware(['auth', 'verified'])->name('courses');
Route::get('/courses/{id}',  [CourseController::class, 'show'])->middleware(['auth', 'verified'])->name('showCourse');
Route::post('/courses/{id}/attend',  [CourseController::class, 'attend'])->middleware(['auth', 'verified'])->name('attendCourse');
Route::post('/courses/{id}/quit',  [CourseController::class, 'quit'])->middleware(['auth', 'verified'])->name('quitCourse');

require __DIR__.'/auth.php';
