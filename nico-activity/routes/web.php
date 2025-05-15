<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::fallback(function () {
//     return "ERROR 404";
// });

Route::view('/', 'landing')->name('landing');


Route::post('/login', [UserController::class, 'login'])->name('login');

Route::prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::view('/index', 'dashboard.index')->name('index');
});

Route::post('/work_experience', [UserController::class, 'store'])->name('work_experience.store');