<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(Request $request) {
        $name = $request->query('name');
        $birthday = $request->query('birthday');
        $email = $request->query('email');
    
        return "Name: $name, Birthday: $birthday, Email: $email";
    }
}
