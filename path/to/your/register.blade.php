<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', [JobController::class, 'index']);

// Job routes
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// Search route
Route::get('/search', SearchController::class);

// Tag route
Route::get('/tags/{tag:name}', TagController::class);

// Authentication routes for guests
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

// Logout route
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth'); 