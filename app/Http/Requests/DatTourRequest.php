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
            'ho_ten' => 'required',
            'ten_dang_nhap' => 'required|unique:quantrivien',
            'mat_khau' => 'required|confirmed',
            'gmail' => 'required|email|unique:quantrivien',
            'nguoi_lon' => 'required',
            'tre_em' => 'required',
            'tre_con' => 'required',
            'so_sinh' => 'required',
            'firstName' => 'required',
            'gioi_tinh_khach_hang' => 'required',
            'ngay_sinh_khach_hanh' => 'required',
            'diachi' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'cmnd' => 'required',
            'hanh_khach' => 'required',
            'gioi_tinh' => 'required',
            'ngay_sinh' => 'required',
            'tuoi' => 'required',
        ];
    }
    public function messages(){
        return  [
            // 'ho_ten.required' => 'Họ tên không được bỏ trống',
            // 'ten_dang_nhap.required' => 'Tên đăng nhập không được bỏ trống',
            // 'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại',
            // 'mat_khau.confirmed' => 'Xác nhận lại mật khẩu không chính xác',
            // 'mat_khau.required' => 'Mật khẩu không được bỏ trống',
            // 'gmail.unique' => 'Gmail đã tồn tại',
            // 'gmail.required' => 'Gmail không được bỏ trống',
            // 'gmail.email' => 'Gmail không đúng',
        ];
    }
}
