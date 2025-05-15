<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
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
    
        return collect($result)->map(function ($value, $key) {
            return "{$key}: {$value}";
        })->implode('<br>');
    }

    public function show($id = null)
    {
        $user = new User();

        $data = $user->getUserData();

        return $data;
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $user = User::where('email', $input['email'])->first();

        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->password !== $input['password']) {
            return redirect()->route('login');
        }

        $request->session()->put('user', $user);



        return view('dashboard', compact('input'));
    }

    public function store(StoreRequest $request)
    {
        // $request->validate();
       

        dd($request->all());
    }
}
