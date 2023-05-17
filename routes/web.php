<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MahsiswaController;

Route::get('/', function () {
    return view('home');
});


Route::get('students/{nama}', [StudentController::class, 'show']);

Route::get('student/contoh', [StudentController::class, 'test']);

Route::resource('student', StudentController::class);
