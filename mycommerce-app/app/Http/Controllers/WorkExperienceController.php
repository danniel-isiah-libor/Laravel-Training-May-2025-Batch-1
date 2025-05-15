<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function store(Request $request)
    {
        $request->validated();

        dd($request->all());
    }
}
