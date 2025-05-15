<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Company\StoreRequest;
use App\Models\WorkExperience;
use App\Models\User;

class CompanyController extends Controller
{
    public function store(StoreRequest $request){
        $form = $request->validated();
        WorkExperience::create([
            'company_name' => $form['company_name'],
            'start_date' => $form['start_date'],
            'end_date' => $form['end_date'],
            'role' => $form['role'],
            'tenure' => $form['tenure'],
            'location' => $form['location'],
            'user_id' => $form['user_id'],
        ]);

        return view('components.company', [
            'company_name' => $request->company_name,
            'tenure' => $request->tenure,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'role' => $request->role,
            'location' => $request->location
        ]);
    }
}
