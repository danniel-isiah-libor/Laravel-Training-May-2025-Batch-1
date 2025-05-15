<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
        $name = $request->name ?? '';
        $birthday = $request->bday ?? '';
        $emailAddress = $request->email ?? '';

        return "<h1>Users Page</h1>
        <ul>
            <li>Name: $name</li>
            <li>Birthday: $birthday</li>
            <li>Email: $emailAddress</li>
        </ul>";
    }

    public function show($id=null){
        $user = new User();
        $data = $user->getData();
        return "<h1>Users Page</h1>
        <ul>
            <li>Name: {$data['name']}</li>
            <li>Email: {$data['email']}</li>
        </ul>";
    }

    public function store(StoreRequest $request){
        $form = $request->validated();
        User::create($form);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->validated();
        $user = User::where('email', $credentials['email'])->first();
        Auth::login($user);
        return redirect()->route('welcome');
    }
}
