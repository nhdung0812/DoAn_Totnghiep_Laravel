<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourDuLichResquest extends FormRequest
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
            'chuongtrinhtour' => 'required',
            'ten_tour' => 'required|unique:quantrivien',
            'ngay_ket_thuc' => 'required|confirmed',
            'ngay_khoi_hanh' => 'required|email|unique:quantrivien',
        ];
    }
    public function messages(){
        return  [
            'chuongtrinhtour.required' => 'Vui lòng chọn không được bỏ trống',
            'ten_tour.required' => 'Tên Tour không được bỏ trống',
            'ngay_ket_thuc.required' => 'Ngày không được bỏ trống',
            'ngay_khoi_hanh.required' => 'Ngày không được bỏ trống',
        ];
    }
}
