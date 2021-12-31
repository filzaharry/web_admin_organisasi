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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'repeatpassword' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'A firstname is required',
            'lastname.required' => 'A lastname is required',
            'email.required' => 'A email is required',
            'username.required' => 'A username is required',
            'password.required' => 'A password is required',
            'repeatpassword.required' => 'A repeatpassword is required',
        ];
    }
}
