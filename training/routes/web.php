<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('info/', function (Request $request) {
    $name = $request->query('name');
    $birthday = $request->query('birthday');
    $email = $request->query('email');

    return "Name: $name, Birthday: $birthday, Email: $email";
});