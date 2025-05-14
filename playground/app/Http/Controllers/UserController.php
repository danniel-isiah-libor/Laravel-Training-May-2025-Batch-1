<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showUser(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $birthdate = $request->birthdate;
        return "Name: $name <br>Email: $email <br> Birthdate: $birthdate";
    }
}
