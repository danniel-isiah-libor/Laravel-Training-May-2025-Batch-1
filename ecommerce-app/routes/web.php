<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

// Route::get('/', [UserController::class, 'getPRofile'])->name('userProfile');
// Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register/store', [UserController::class, 'store'])->name('register.store');
Route::post('/login/store', [UserController::class, 'login'])->name('login');

Route::view('/register','register')->name('register');
Route::view('/login','login')->name('login');

Route::prefix('/company')->group(function() {
    Route::view('/users', 'employee')->name('users');
    Route::view('/display', 'employee-display')->name('employee-display');
    Route::post('/register', [CompanyController::class, 'addEmployee'])->name('addEmployee');
})->name('company');