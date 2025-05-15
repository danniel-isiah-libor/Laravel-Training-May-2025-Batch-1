<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        User::create($form);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $form = $request->validated();

        $user = User::where('email', $form['email'])->first();

        // // authenticate...
        // if (!Hash::check($form['password'], $user->password)) {
        //     return redirect()->back()->withErrors([
        //         'password' => 'Password is incorrect'
        //     ]);
        // }

        // if (!Auth::attempt($form)) {
        //     return redirect()->back()->withErrors([
        //         'password' => 'Password is incorrect'
        //     ]);
        // }

        Auth::login($user);

        // redirect to dashboard...
        return redirect()->route('welcome');
    }
}
