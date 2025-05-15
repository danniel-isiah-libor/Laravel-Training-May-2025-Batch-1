<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/submit',[UserController::class,'submit'])->name('submit');
Route::get('/show',[UserController::class,'showData'])->name('show');
Route::get('/login', function () {
    return "Hello Login";
})->name('login');

// Route::get('/register', function () {
//     return view('components.register');
// })->name('register');



// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/hello/{name?}', function ($name = null) {
//     return 'Hello ' . $name;
// });
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::post('/register',[UserController::class,'store'])->name('register.store');