<?php

namespace App\Http\Requests\WorkExperience;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'user_id' => [
                'required',
                'integer',
                'exists:users,id'
            ],
            'company_name' => [
                'sometimes',
                'string',
                'max:255'
            ],
            'position' => [
                'sometimes',
                'string',
                'max:255'
            ],
            'start_date' => [
                'sometimes',
                'date',
                Rule::date()->beforeOrEqual('today')
            ],
            'end_date' => [
                'nullable',
                'date',
                'after:start_date'
            ]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => Auth::user()->id
        ]);
    }
}
