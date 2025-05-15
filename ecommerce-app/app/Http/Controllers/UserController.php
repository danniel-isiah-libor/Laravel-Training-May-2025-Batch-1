<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades;

class UserController extends Controller
{
    public function getProfile(Request $request){
        $name = $request->query('name');
        $birthdate = $request->birthdate;
        $email = $request->email;

        return "
            <ul>
                <li>Name: $name </li>
                <li>Birthdate: $birthdate</li>
                <li>Email: $email</li>
            </ul>
        ";
    }

    public function store(StoreRequest $request){

        $form = $request->validated();

        dd('PASSED PO BA?');
    }

    public function login(LoginRequest $request){

        $form = $request->validated();

        $user = new User;
        $user->email = $form['email'];

        Auth::login($user);

        dd('Perform yot');
    }
}
