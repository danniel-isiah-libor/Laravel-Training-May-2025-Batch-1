<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
        $result = [
            'name' => $request->query('name') ?? '',
            'birthdate' => $request->query('birthdate') ?? '',
            'email' => $request->query('email') ?? '',
        ];
    
      return view('profile', $result);
    }

    public function show($id = null)
    {
        $user = new User();

        $data = $user->getUserData();

        return $data;
    }

    public function login(LoginRequest $request)
    {
        $input = $request->validated();

        $user = new User();
        $user->email = $input['email'];
        
        Auth::login($user);

        return view('profile', ['email' => $user->email]);
    }

    public function store(StoreRequest $request)
    {
        $request->validate();
       

        dd($request->all());
    }
}
