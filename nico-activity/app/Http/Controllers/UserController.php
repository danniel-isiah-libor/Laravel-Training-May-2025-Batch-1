<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\WorkStoreRequest;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    // public function getProfile(Request $request){
    //     $result = UserDetail::where('user_id', $request->user()->id)->first();

    // }

    public function login(LoginRequest $request){
        $form = $request->validated();
        $user = User::where('email', $form['email'])->first();
        Auth::login($user);
        return redirect()->route('welcome');
    }

    public function show(){
        
    }

    public function store(WorkStoreRequest $request){
        $form = $request->validated();
        WorkExperience::create([
            'user_id' => 5,
            'company' => $form['company'],
            'position' => $form['position'],
            'start_date' => $form['start_date'],
            'end_date' => $form['end_date'],
        ]);
    }

}
