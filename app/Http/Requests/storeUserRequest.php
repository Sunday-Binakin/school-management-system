<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'role'=>'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }

    /**
     * return  validation error messages
     */
    public function messages()
    {
        return [
            'role.required'=> 'Select a role',
            'name.required'=>'Please Enter Your Name',
            // 'name.unique'=> 'The name you entered already exist',
            'email.required'=>'Please Enter a valid Email',
            'email.email'=>'Something is wrong with your email',
            'password.required'=>'Please Enter Your Password',
            'password.min'=>'Minimum password length is 8 characters'
        ];
    }
}
