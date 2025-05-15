<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function(Request $request) {
    $html = "<ul>";
        $html .= "<li>Name: {$request->name}</li>";
        $html .= "<li>Birth date: {$request->birthdate}</li>";
        $html .= "<li>Email: {$request->email}</li>";
    $html .= "</ul>";

    return $html;
})->name('client');

Route::view('/register', 'register')->name('register');