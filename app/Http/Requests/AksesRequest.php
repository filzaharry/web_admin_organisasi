<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AksesRequest extends FormRequest
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
            'level' => 'required',
            'main' => 'required',
            'sub_menu' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'level.required' => 'Level User Belum Diisi !!!',
            'main.required' => 'Master Menu Belum Diisi !!!',
            'sub_menu.required' => 'Sub Menu Belum Diisi !!!'
        ];
    }
}
