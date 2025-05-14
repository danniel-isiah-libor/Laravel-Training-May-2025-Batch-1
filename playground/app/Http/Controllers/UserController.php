<?php
namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function showData(){
        $user = new User();
        $data = $user->getData();
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        return "<ul?>
            <li>Name: $name</li>
            <li>Name: $email</li>
            <li>Name: $password</li>
        </ul>";
    }
}