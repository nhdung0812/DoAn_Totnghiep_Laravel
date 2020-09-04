<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatTourRequest extends FormRequest
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
            'firstName' => 'required',
            'email' => 'required|email|unique:quantrivien',
            'gioi_tinh_khach_hang' => 'required',
            'ngay_sinh_khach_hanh' => 'required',
            'diachi' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'cmnd' => 'required',
        ];
    }
    public function messages(){
        return  [
            'firstName.required' => 'Họ tên không được bỏ trống',
            'email.required' => 'Gmail không được bỏ trống',
            'email.email' => 'Gmail không đúng',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'cmnd.required' => 'CMND không được bỏ trống',
            'ngay_sinh_khach_hanh.required' => 'Ngày sinh không được bỏ trống',
            'gioi_tinh_khach_hang.required' => 'Giới tính không được bỏ trống',
            'diachi.required' => 'Địa chỉ không được bỏ trống',
                 
        ];
    }
}
