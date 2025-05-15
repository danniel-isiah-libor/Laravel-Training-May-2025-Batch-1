<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\ProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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

    public function store(StoreRequest $request)
    {
        $form = $request->validated();

        dd('Passed!');
        // saving...
    }

    public function login(LoginRequest $request)
    {
        $form = $request->validated();
        $user = new User;
        $user->email = $form['email'];

        Auth::login($user);
        return redirect('/view-profile');
    }

    public function storeProfile(ProfileRequest $request)
    {
        $form = $request->validated();
        return redirect('/profile');
    }
}
