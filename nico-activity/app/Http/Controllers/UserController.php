<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\WorkStoreRequest;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(LoginRequest $request){
        $credentials = $request->validated();

        if ($credentials) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }
        return back()->with('error', 'Invalid credentials');
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
