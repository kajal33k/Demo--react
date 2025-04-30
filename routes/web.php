<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// -------------------FRONTEND ----------------------
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/work', [FrontendController::class, 'work'])->name('frontend.work');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');


// causes::::::::::::::::

Route::get('cause/index', [CauseController::class, 'index'])->name('frontend.causes.index');
Route::get('cause/show', [CauseController::class, 'show'])->name('frontend.causes.show');
Route::get('cause/create', [CauseController::class, 'create'])->name('frontend.causes.create');
Route::get('cause/store', [CauseController::class, 'store'])->name('frontend.causes.store');