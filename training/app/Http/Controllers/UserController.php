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

        User::create($form);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request) {
        $form = $request->validated();
        
        $user = User::where('email', $form['email'])->first();

        Auth::login($user);
        return redirect()->route('work-experience.create');
    }
}
