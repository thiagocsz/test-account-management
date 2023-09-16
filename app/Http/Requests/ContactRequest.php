<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|min:6',
            'email' => 'required|email|unique:contacts,email,' . $this->id .',id',
            'contact' => 'required|integer|size:9',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => "The name field must contain more than 5 characters",
            'email.required' => "The email field is required",
            'email.email' => "The email field was filled out incorrectly",
            'email.unique' => "Email provided already exists",
            'contact.size' => "The contact field must have 9 characters",
        ];
    }
}
