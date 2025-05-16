<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function show()
    {
        $profile = Profile::where('user_id', auth()->user()->id)->first();

        return view('profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validated();

        $profile = Profile::find($request->id);

        $profile->update($request->all());   
        
        return Response::json($profile);

    }

    public function destroy(Request $request)
    {
        $profile = Profile::find($request->id);

        $profile->delete();
    }
    
    public function store(Request $request)
    {
        $request->validated();

        return back();
    }
}
