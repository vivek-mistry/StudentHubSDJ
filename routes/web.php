<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReadmeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\EnsureStudentIsAuthenticated;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ReadmeController::class, 'index'])->name('readme');



Route::get('/register', [RegisterController::class, 'create'])->name('students.register');
Route::post('/register', [RegisterController::class, 'store'])->name('students.store');

// Protected routes — must be logged in as a student
// Route::middleware(EnsureStudentIsAuthenticated::class)->group(function () {
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
// });


// Guest routes (login / register)
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authCheck'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');