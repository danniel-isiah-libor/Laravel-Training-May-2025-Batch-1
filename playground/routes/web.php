<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
        Route::get('/show', function (Request $request) {
            $name = $request->name;
            $email = $request->email;
            $birthdate = $request->birthdate;
            return "Name: $name <br>Email: $email <br> Birthdate: $birthdate";
        })->name('show');
});

//access using route('user.show')
