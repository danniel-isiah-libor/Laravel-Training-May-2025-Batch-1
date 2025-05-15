<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    
    public function store(StoreRequest $request) {
        $form = $request->validated();

        dd('adas');
    }

    public function login(LoginRequest $request) {
        $form = $request->validated();

        $user = new User;
        $user->email = $form['email'];

        Auth::login($user);
        
        dd($user);
    }
}
