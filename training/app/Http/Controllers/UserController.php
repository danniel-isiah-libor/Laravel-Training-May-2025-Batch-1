<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(Request $request) {
        $name = $request->query('name');
        $birthday = $request->query('birthday');
        $email = $request->query('email');
    
        return "Name: $name, Birthday: $birthday, Email: $email";
    }

    public function show($id = null) {
        $user = new User();
        $data = $user->getData($id);

        return $data;
    }
}
