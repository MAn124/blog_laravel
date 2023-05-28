<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required | email',
            'name' => 'required',
            'password' => 'required|min:8',
            'level' => 'required',
            'agree' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.unique' => 'email already exists', 
            'email.required' => 'please enter email address', 
            'name.required' => 'please enter name ', 
            'email.email' => 'wrong email format', 
            'level.required' => 'please select your role', 
            'agree.required' => 'You not accept our policy yet', 

        ];
    }
}
