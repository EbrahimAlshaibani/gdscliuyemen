<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('teachers', TeacherController::class);
    Route::resource('majors', MajorController::class);
    Route::get('majors/{major}/courses', [MajorController::class,'createMajorCourses'])->name('create.major.courses');
    Route::post('majors/{major}/courses', [MajorController::class,'storeMajorCourses'])->name('store.major.courses');


    Route::get('courses/{course}/majors', [CourseController::class,'createCourseMajors'])->name('create.course.majors');
    Route::post('courses/{course}/majors', [CourseController::class,'storeCourseMajors'])->name('store.course.majors');


    Route::resource('courses', CourseController::class);
    Route::get('/students',[StudentController::class,"index"])->name("students");
    Route::get('/students/create/liu',[StudentController::class,"create"])->name("students.create");
    Route::post('/students/store',[StudentController::class,"store"])->name("students.store");
    Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('students.edit');
    Route::post('/students/{student}/update',[StudentController::class,'update'])->name('students.update');
    Route::get('/student/{id}/show',[StudentController::class,'show'])->name('students.show');
    Route::get('/student/{id}/delete',[StudentController::class,'destroy'])->name('students.delete');



    Route::get('email', [Controller::class,'createEmail'])->name('email');
    Route::post('email', [Controller::class,'sendEmail'])->name('email');


});