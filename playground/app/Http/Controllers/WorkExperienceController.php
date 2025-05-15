<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function store(StoreRequest $request)
    {
        $form = $request->validated();

        // saving....
        return view('work-experience.show', [
            'form' => $form
        ]);
    }
}
