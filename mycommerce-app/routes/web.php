<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
        Route::get('/show/{id?}', function ($id=null) {
            return 'show'. $id;
        })->name('show');
    });
    Route::get('/list', function ($id) {
        return 'user list';
    })->name('user.list');
});

Route::get('/client', function (Request $request) {
    $result = [
        'name' => $request->query('name') ?? '',
        'birthdate' => $request->query('birthdate') ?? '',
        'email' => $request->query('email') ?? '',
    ];

    return collect($result)->map(function ($value, $key) {
        return "{$key}: {$value}";
    })->implode('<br>');
})->name('client');

