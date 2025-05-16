<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function show()
    {
        $workExperience = WorkExperience::first();

        return response()->json([
            'status' => 'success',
            'data' => $workExperience,
        ]);
        
    }

    public function update(Request $request)
    {
        $workExperience = WorkExperience::first();
        $workExperience->update($request->all());
        return view('components.work-experience');
    }

    public function destroy()
    {
        $workExperience = WorkExperience::first();
        $workExperience->delete();
        return true;
    }
}
