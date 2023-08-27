<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $userId = $this->id ?? '';

        $rules  = [
            "name" => "required|string|max:255|min:3",
            "surname" => "required|string|max:255|min:3",
            "email" => "required|email|unique:users,email,{$userId},id",
            "password" => "required|min:4|max:20",
            "cellphone" => "max:11",
        ];

        if($this->method() == 'PUT' || $this->method() == 'PATCH'){

            $rules['password'] = [ 
                "password" => [
                    "nullable",
                    "min:4",
                    "max:20"
                ],
            ];
        }

        return $rules;
       
    }
}
