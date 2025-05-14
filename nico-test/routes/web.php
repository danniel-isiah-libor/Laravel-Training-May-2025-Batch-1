<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/submit',[UserController::class,'submit'])->name('submit');
Route::get('/show',[UserController::class,'showData'])->name('show');



// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/hello/{name?}', function ($name = null) {
//     return 'Hello ' . $name;
// });

