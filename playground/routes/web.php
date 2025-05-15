<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome');

Route::fallback(function () {
    return '404 Page Not Found';
});

Route::prefix('/users')
    ->name('user.')
    ->group(function () {
        Route::prefix('/admin')->group(function () {
            Route::get('/create', function (Request $request) {
                dd($request->date('date'));
                return 'Create User Page';
            })->name('create');

            Route::get('/edit', function () {
                return 'Edit User Page';
            })->name('edit');

            Route::get('/show/{id?}', [UserController::class, 'show'])->name('show');
        });

        Route::get('/lists', function () {
            // return 'User List Page';
            return '<h1>hello world</h1>';
        })->name('list');
    });

// Route::get('/users/admin/create', function () {
//     return 'Create User Page';
// });

// Route::get('/users/admin/edit', function () {
//     return 'Edit User Page';
// });

// Route::get('/users/admin/show', function () {
//     return 'Show User Page';
// });

// Route::get('/users/lists', function () {
//     return 'List User Page';
// });

/**
 * name: john doe
 * birthdate: 1990-01-01
 * email: john@mail.test
 */
Route::get('/profile', [UserController::class, 'getProfile'])->name('profile');

/**
 * PascalCase
 * camelCase
 * snake_case
 * kebab-case
 */

// Route::get('/register', function () {
//     return view('components.register');
// });
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');

Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::post('/login', [UserController::class, 'login'])->name('login.store');

/**
 *
 * Company Name:
 * Tenure:
 * Role:
 *
 * Save
 *
 */
Route::prefix('/work-experience')->name('work-experience.')->group(function () {
    Route::view('/create', 'work-experience.create')->name('create');
    Route::post('/store', [WorkExperienceController::class, 'store'])->name('store');
});
