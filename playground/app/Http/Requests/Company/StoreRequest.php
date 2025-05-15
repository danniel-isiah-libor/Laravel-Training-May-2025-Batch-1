<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //'user_id' => ['required', 'integer', 'exists:users,id'],
            'company_name' => ['required', 'string', 'max:75'],
            'start_date' => ['required', 'date', Rule::date()->beforeOrEqual('today') ],
            'end_date' => ['nullable', 'date', 'after:start_date'],
            'tenure' => ['required', 'numeric', 'between:0,100'],
            'role' => ['required', 'string', 'max:70'],
        ];
    }

    public function message(){
        return [
            'company_name.required' => 'Company name is required',
            'tenure.required' => 'Tenure is required',
            'tenure.numeric' => 'Tenure must be numeric',
            'tenure.between' => 'Tenure must be between 0 and 100',
            'role.required' => 'Role is required',
            'start_date.date' => 'Start date must be a valid date',
            'end_date.date' => 'End date must be a valid date',
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            // 'user_id' => Auth::user()->id
        ]);
    }
}
