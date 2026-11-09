<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationshipController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [RelationshipController::class, 'showCourse']);
Route::get('/students',[RelationshipController::class,'showStudents']);
Route::get('/profiles', [RelationshipController::class, 'showProfiles']);