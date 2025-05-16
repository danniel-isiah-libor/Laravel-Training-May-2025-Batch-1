<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')->name('user.')->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/create', function () {
            return 'create';
        })->name('create');
        Route::get('/edit', function () {
            return view('edit');
        })->name('edit');
        Route::get('/show/{id?}', [UserController::class, 'show'])->name('show');
      
    });
    Route::get('/list', function ($id) {
        return 'user list';
    })->name('user.list');
});

Route::get('/profile', [UserController::class, 'getProfile'])->name('profile');
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::prefix('/profile')->name('profile.')->group(function () {
    Route::post('/', [WorkExperienceController::class, 'store'])->name('profile.store');
    Route::get('/', [WorkExperienceController::class, 'show'])->name('profile.show');
    Route::put('/', [WorkExperienceController::class, 'update'])->name('profile.update');
    Route::delete('/', [WorkExperienceController::class, 'destroy'])->name('profile.destroy');
});

