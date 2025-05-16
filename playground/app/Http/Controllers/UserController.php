<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\ProfileRequest;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
       return DB::table('profiles')->select('*')->where('id', 1)->get();
    }

    public function show($id = null)
    {
        $user = new User();

        $data = $user->getData();

        return "
            <ul>
                <li>Name: {$data['name']}</li>
                <li>Email: {$data['email']}</li>
            </ul>
        ";
    }

    public function store(StoreRequest $request)
    {
        $form = $request->validated();

        $user = User::create(array_merge(
            $form,
            [
                'password' => bcrypt($request->password),
            ]
        ));

        $token = Auth::login($user);
        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user,
            'access_token' => $token,
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        $form = $request->validated();

        $user = User::where('email', $form['email'])->first();

        Auth::login($user);
        return redirect('/');
    }

    public function storeProfile(ProfileRequest $request)
    {
        $form = $request->validated();

        $experience = new WorkExperience();
        $experience->user_id = Auth::user()->id;
        $experience->company_name = $form['company_name'];
        $experience->position = $form['position'];
        $experience->start_date = $form['start_date'];
        $experience->end_date = $form['end_date'];
        $experience->role = $form['role'];
        $experience->save();

        return response()->json([
            'message' => 'Work experience successfully added',
            'work_experience' => $experience,
        ]);
    }
}
