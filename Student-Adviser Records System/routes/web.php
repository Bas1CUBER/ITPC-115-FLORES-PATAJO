<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', App\Http\Controllers\StudentController::class);
Route::resource('sections', App\Http\Controllers\SectionController::class);
