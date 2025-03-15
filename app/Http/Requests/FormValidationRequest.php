<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
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
            'name' => 'required ',
            'email' => 'required | email',
            'password' => 'required | max:20 | min:8 | regex:/^[0-9a-zA-Z]*$/',
            'password_re' => 'same:password' 
        ];
    }
}
