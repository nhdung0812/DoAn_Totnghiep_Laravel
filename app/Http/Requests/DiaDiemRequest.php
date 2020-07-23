<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaDiemRequest extends FormRequest
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
            'ten_dia_diem' => 'required',
            'khu_vuc' => 'required',
        ];
    }
    public function messages(){
        return  [
            'ten_dia_diem.required' => 'Tên địa điểm không được bỏ trống',
            'khu_vuc.required' => 'Khu vực không được bỏ trống',
        ];
    }
}
