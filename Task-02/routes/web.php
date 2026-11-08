<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'showAllStudents']);
Route::get('/course',[CourseController::class,'showCourse']);

