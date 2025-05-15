<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\StoreRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(StoreRequest $request) {
        // dd($request);
        $form = $request->validated();

        // save
        

        dd($form);

        return view('employee.show', [
            'form' => $form
        ]);
    }
}
