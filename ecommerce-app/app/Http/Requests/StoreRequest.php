<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'email',
                'string',
                'max:255',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:12',
                'confirmed',
                // Password::min(8)
                //     ->max(12)
                //     ->mixedCase()
                //     ->symbols()
                //     ->numbers()
                //     ->letters()
                //     ->uncompromised()
            ],
        ];
    }

    public function messages(){
        return [
            'email.email' => 'email is invalid oy',
            'password' => 'password is invalid oy'
        ];
    }
}
