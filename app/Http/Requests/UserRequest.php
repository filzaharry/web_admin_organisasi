<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'level' => 'required',
            'pass' => 'required|min:6',
            'repeatpass' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Nama Lengkap Belum Diisi !!!',
            'username.required' => 'Nama User Belum Diisi !!!',
            'username.unique' => 'Nama User Sudah Digunakan !!!',
            'email.required' => 'Email Belum Diisi !!!',
            'email.unique' => 'Email Sudah Digunakan !!!',
            'level.required' => 'Level User Belum Diisi !!!',
            'pass.required' => 'Password Belum Diisi !!!',
            'repeatpass.required' => 'Ulangi Password Belum Diisi !!!',
        ];
    }
}
