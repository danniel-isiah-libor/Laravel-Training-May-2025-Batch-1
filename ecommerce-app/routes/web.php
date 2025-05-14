<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/userProfile', function(Request $request){
  $name = $request->query('name');
  $birthdate = $request->birthdate;
  $email = $request->email;

  return "
    <ul>
        <li>Name: $name </li>
        <li>Birthdate: $birthdate</li>
        <li>Email: $email</li>
    </ul>
  ";
})->name('userProfile');



