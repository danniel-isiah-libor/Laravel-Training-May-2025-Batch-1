<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
        $name = $request->query('name');
        $birthdate = $request->birthdate;
        $email = $request->email;

        return "
        <script>alert('this is alert');</script>

        <ul style='color: red;'>
            <li>Name: $name</li>
            <li>Birthdate: $birthdate</li>
            <li>Email: $email</li>
        </ul>
    ";
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
}
