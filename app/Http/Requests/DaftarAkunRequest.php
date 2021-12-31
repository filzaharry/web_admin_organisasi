<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaftarAkunRequest extends FormRequest
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
            'code' => 'required|unique:akun',
            'name' => 'required',
            'desc' => 'required',
            'group' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'No. Account Belum Diisi !!!',
            'code.unique' => 'No. Account Sudah Digunakan !!!',
            'name.required' => 'Nama Account Belum Diisi !!!',
            'desc.required' => 'Keterangan Belum Dipilih !!!',
            'group.required' => 'Grup Account Belum Dipilih !!!',
        ];
    }
}
