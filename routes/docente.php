<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;

/* Docente Routes */

Route::get('dashboard', [TeacherController::class, 'dashboard'])->name('dashboard');