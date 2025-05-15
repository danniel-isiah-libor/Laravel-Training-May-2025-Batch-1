<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getProfile(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $birthdate = $request->birthdate;
        return "Name: $name <br>Email: $email <br> Birthdate: $birthdate";
    }

    public function show($id = null)
    {
        $user = new User();

        $data = $user->getData();

        return "
            <ul>
                <li>Name: {$data['name']}</li>
                <li>Email: {$data['email']}</li>
            </ul>
        ";
    }

    public function store(Request $request) {
        dd($request);
    }
}
