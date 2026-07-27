<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Faculty\FacultyDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\Academic\DepartmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| Student Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Student'])->group(function () {

    Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])
        ->name('student.dashboard');

});

/*
|--------------------------------------------------------------------------
| Faculty Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Faculty'])->group(function () {

    Route::get('/faculty/dashboard', [FacultyDashboardController::class, 'index'])
        ->name('faculty.dashboard');

});

/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

});

/*
|--------------------------------------------------------------------------
| Institution Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::resource('institutions', InstitutionController::class);

});

/*
|--------------------------------------------------------------------------
| Department Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
	
    Route::resource('departments', DepartmentController::class);

});

require __DIR__.'/auth.php';