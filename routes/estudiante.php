<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;

/* Estudiante Routes */

Route::get('dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
