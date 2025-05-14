<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Request;

Route::get('/userProfile', function(Request $request){
  $name = $request->query('name');
  $birthdate = $request->query('birthdate');
  $email = $request->query('email');

  return "
    <ul>
        <li>Name: . $name </li>
        <li>Birthdate: . $birthdate</li>
        <li>Email: . $email</li>
    </ul>
  ";
})->name('userProfile');



