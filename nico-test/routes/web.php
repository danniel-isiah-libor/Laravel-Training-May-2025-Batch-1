<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/submit', function (Request $request) {
    $name = $request->query('name');
    $email = $request->query('email');
    $birthdate = $request->query('date');
    $birthdate2 = Carbon::parse($birthdate)->format('F j, Y'); // or 'F j, Y'
    return "<ul><li>Name: $name</li><li>Email: $email</li><li>Birthdate: $birthdate2</li><ul>";
})->name('submit');




// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/hello/{name?}', function ($name = null) {
//     return 'Hello ' . $name;
// });

