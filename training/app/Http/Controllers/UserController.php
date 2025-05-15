<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(StoreRequest $request) {
        
        $form = $request->validated();
    }

    public function login(LoginRequest $request) {
        $form = $request->validated();

        $user = new User();
        $user->email = $form['email'];

        Auth::login($user);
    }
}
