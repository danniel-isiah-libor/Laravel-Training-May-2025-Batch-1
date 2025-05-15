<?php

namespace App\Http\Requests\WorkExperience;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'company' => [
                'required',
                'string',
            ],
            'start_date' => [
                'required',
                'date',
                Rule::date()->beforeOrEqual('today')
            ],
            'end_date' => [
                'nullable',
                'date',
                'after:start_date'
            ],
            'position' => [
                'required',
                'string',
            ],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1 // Auth::user()->id
        ]);
    }
}
