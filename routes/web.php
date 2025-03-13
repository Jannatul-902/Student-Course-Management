<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::post('enroll', [EnrollmentController::class, 'enroll'])->name('enroll');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create']);
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
