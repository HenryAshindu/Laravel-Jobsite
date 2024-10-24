<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

//Route::get('/', [JobController::class, 'index']);
//Route::get('/jobs/{id}', [JobController::class, 'show'])->name('job.show');

//Route::get('/jobs/create', [JobController::class, 'create'])->name('job.create')->middleware('auth');
//Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

Route::resource('jobs', JobsController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('jobs/create', [JobsController::class, 'create'])->name('jobs.create');
    Route::post('jobs', [JobsController::class, 'store'])->name('jobs.store');
});

Route::get('/search', SearchController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class,'create']);
    Route::post('/register', [RegisteredUserController::class,'store']);
    
    Route::get('/login', [SessionController::class,'create'])->name('login');
    Route::post('/login', [SessionController::class,'store']);
});

Route::delete('/logout', [SessionController::class,'destroy'])->middleware('auth')->name('logout');