<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GetInvolvedController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Get Involved Page
Route::get('/get-involved', [GetInvolvedController::class, 'index'])->name('get-involved');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Program Routes
Route::get('/programs', [ProgramController::class, 'index'])->name('programs'); 
Route::get('/programs/{id}', [ProgramController::class, 'show'])->name('programs.show');