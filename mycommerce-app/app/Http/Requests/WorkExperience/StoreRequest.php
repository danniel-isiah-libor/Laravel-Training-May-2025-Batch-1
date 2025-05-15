<?php

namespace App\Http\Requests\WorkExperience;

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
            'user_id' => 'required',
           'company_name' => 'required',
           'position' => 'required',
           'tenure' => 'required',
           'start_date' => 'required|before_or_equal:today',
           'end_date' => 'required','after:start_date',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1,
        ]);
    }
}
