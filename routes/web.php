<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GithubController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/demo0', function() {
    return Inertia::render('Demo0');
});
Route::get('/demo1', function() {
    return Inertia::render('Demo1');
});
Route::get('/paytable', function() {
    return Inertia::render('PayTable');
});

Route::group(['as' => 'blade.'], function () {
    Route::get('/about', function() {
        return view('about');
    })->name('about');
});


// GithubController redirect and callback urls
Route::get('/auth/github', [GithubController::class, 'redirect'])->name('auth.github');
Route::get('/auth/github/callback', [GithubController::class, 'callback']);


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
