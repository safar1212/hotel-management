<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\studentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/allStudents', [studentController::class, 'showStudent'])->name('students');
Route::get('/allStudents/{id}', [studentController::class, 'singleStudent'])->name('view.student');
Route::get('/delete/{id}', [studentController::class, 'deleteStudent'])->name('delete.student');
// Route::view('newstudent', '/addStudent');
Route::view('/newstudent', 'addStudent')->name('newstudent');




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
