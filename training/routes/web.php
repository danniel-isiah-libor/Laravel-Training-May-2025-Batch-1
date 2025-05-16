<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [UserController::class, 'getProfile']);

Route::get('/register', function() {
    return view('components.register');
});

Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.store');

Route::prefix('employee')->name('employee.')->group(function() {
    Route::view('/create', 'employee.create')->name('create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('store');
    Route::view('/show', 'employee.show')->name('show');
});

Route::post('/store', [UserController::class, 'store'])->name('register.store');

// Route::prefix('profile')->name('profile.')->group(function() {
//     Route::view('/list', 'profile_list')->name('list');
// });

Route::get('/list', [UserController::class, 'show'])->name('list');
Route::view('/edit', 'edit')->name('edit');
Route::view('/delete', 'delete')->name('delete');