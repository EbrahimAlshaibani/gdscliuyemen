<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
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
// 127.0.0.1:8000/gdsc
Route::get('/', function () {
    return view('welcome');
});

Route::get('/students/all',[StudentController::class,"index"])->name("students");
Route::get('/students/create/liu',[StudentController::class,"create"])->name("students.create");
Route::post('/students/store',[StudentController::class,"store"])->name("students.store");
Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('students.edit');
Route::post('/students/{student}/update',[StudentController::class,'update'])->name('students.update');
Route::get('/student/{id}/show',[StudentController::class,'show'])->name('students.show');
Route::get('/student/{id}/delete',[StudentController::class,'destroy'])->name('students.delete');

Route::resource('teacher', TeacherController::class);