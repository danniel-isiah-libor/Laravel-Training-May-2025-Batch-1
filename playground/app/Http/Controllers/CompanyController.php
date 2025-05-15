<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Company\StoreRequest;
class CompanyController extends Controller
{
    public function store(StoreRequest $request){
        $request->validated();
        return view('components.company', [
            'company_name' => $request->company_name,
            'tenure' => $request->tenure,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'role' => $request->role
        ]);
    }
}
