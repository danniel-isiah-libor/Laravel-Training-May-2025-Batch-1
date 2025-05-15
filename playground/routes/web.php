<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')
    ->name('user.')
    ->group(function () {
        Route::get('/create', function (Request $request) {
            dd($request);
            return 'Create User Page';
        })->name('create');
        Route::get('/edit', function () {
            return 'Edit User Page';
        })->name('edit');
        Route::get('/show', [UserController::class, 'show'])->name('show');
});

Route::get('/profile', [UserController::class, 'getProfile'])->name('show');

Route::view('/register', 'components.register')->name('register');
Route::view('/login', 'components.login')->name('login');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::post('/login', [UserController::class, 'login'])->name('login');
