<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function submit(Request $request)
    {
        $name = $request->query('name');
        $email = $request->query('email');
        $birthdate = $request->query('date');
        $birthdate2 = Carbon::parse($birthdate)->format('F j, Y'); // or 'F j, Y'
        return "<ul><li>Name: $name</li><li>Email: $email</li><li>Birthdate: $birthdate2</li><ul>";
    }

    function showData(){
        $user = new User();
        $data = $user->getData();
        return $data;
    }
}
