<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
