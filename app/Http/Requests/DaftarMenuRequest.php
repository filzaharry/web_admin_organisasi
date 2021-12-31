<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaftarMenuRequest extends FormRequest
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
            'nama_menu' => 'required',
            'sort' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'nama_menu.required' => 'Nama Menu Belum Diisi !!!',
            'sort.required' => 'Nomor Urut Belum Diisi !!!'
        ];
    }
}
