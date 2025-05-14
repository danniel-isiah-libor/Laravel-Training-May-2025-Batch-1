<?php

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

            Route::get('/show/{id?}', function ($id = null) {
                return 'Show User Page - ' . $id;
            })->name('show');
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
Route::get('/profile', function (Request $request) {
    $name = $request->query('name');
    $birthdate = $request->birthdate;
    $email = $request->email;

    return "
        <script>alert('this is alert');</script>

        <ul style='color: red;'>
            <li>Name: $name</li>
            <li>Birthdate: $birthdate</li>
            <li>Email: $email</li>
        </ul>
    ";
})->name('profile');
