<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class CompanyController extends Controller
{
    public function addEmployee(EmployeeRequest $request){
        $form = $request->validated();
        $company_name = $form['company_name'];
        $tenure = $form['tenure'];
        $role = $form['role'];
        return view('employee-display', compact('company_name', 'tenure', 'role' ));
    }
}
