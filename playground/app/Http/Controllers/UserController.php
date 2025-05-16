<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
        // $result = DB::select('select * from profiles where id = ?', [1]);
        // $result = DB::table('profiles')->where('id', 1)->get();

        // $id = [];

        // $result = Profile::where(function ($query) use ($id) {
        // $query->where('id', $id);
        // })
        // ->whereIn('id', [1, 2])
        // ->whereBetween('id', [1, 3])
        // ->whereRaw('id = ?', [1])
        // ->get();
        // ->cursor()
        // ->each(function ($item) {
        //     dd($item);
        // });
        // ->toSql();

        // option 1:
        // $result = Profile::where('id', 1)->update([
        //     'gender' => 'other',
        // ]);

        // option 2:
        // $result = Profile::where('id', 1)->first();
        // $result->update([
        //     'gender' => 'other',
        // ]);

        // option 3:
        // $result = Profile::where('id', 1)->first();
        // $result->gender = 'other';
        // $result->save();

        $result = Profile::where('id', 1)->delete();

        dd($result);
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

        User::create($form);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $form = $request->validated();

        $user = User::where('email', $form['email'])->first();

        // // authenticate...
        // if (!Hash::check($form['password'], $user->password)) {
        //     return redirect()->back()->withErrors([
        //         'password' => 'Password is incorrect'
        //     ]);
        // }

        // if (!Auth::attempt($form)) {
        //     return redirect()->back()->withErrors([
        //         'password' => 'Password is incorrect'
        //     ]);
        // }

        Auth::login($user);

        // redirect to dashboard...
        return redirect()->route('welcome');
    }
}
