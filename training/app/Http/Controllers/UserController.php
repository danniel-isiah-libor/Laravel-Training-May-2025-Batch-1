<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getProfile(Request $request) {
        // return 'asd';
        // $result = DB::select('select * from profiles where id = ?', [1]);
        // $result = DB::table('profiles')->select('*')->where('id', 1)->get();

        $result = Profile::all();
        // dd($result);
    }

    public function show() {
        $user = User::all();
        return view('profile_list', ['users' => $user]);
    }
    
    public function store(StoreRequest $request) {
        $form = $request->validated();
        $form['password'] = Hash::make($form['password']);
        User::create($form);
        return redirect()->route('register');
    }

    public function login(LoginRequest $request) {
        $form = $request->validated();

        $user = new User;
        $user->email = $form['email'];

        Auth::login($user);
        
        dd($user);
    }
}
