<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Redirect;

class ChuongTrinhTourRequest extends FormRequest
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
            'ten_tour' => 'required',
            'gia_tour' => 'required',
            'ngay_khoi_hanh' => 'required',
            'ngay_ket_thuc' => 'required',
            'so_ngay' => 'required',
            'so_dem' => 'required',
            'hinh_tour' => 'required',
            'so_cho' => 'required',
            'noi_dung' => 'required',
            'loai_tour' => 'required',
            'khuyen_mai' => 'required',
        ];

    }
    public function messages(){

        return [
            'ten_tour.required' => 'Tên Tour không được bỏ trống',
            'gia_tour.required' => 'Giá Tour không được bỏ trống',
            'ngay_khoi_hanh.required' => 'Ngày khởi hành không được bỏ trống',
            'ngay_ket_thuc.required' => 'Ngày kết thúc không được bỏ trống',
            'so_ngay.required' => 'Số ngày không được bỏ trống',
            'hinh_tour.required' => 'Hình ảnh Tour không được bỏ trống',
            'so_dem.required' => 'Số đêm không được bỏ trống',
            'so_cho.required' => 'Số chỗ không được bỏ trống',
            'noi_dung.required' => 'Nội dung không được bỏ trống',
            'loai_tour.required' => 'Loại Tour không được bỏ trống',
            'khuyen_mai.required' => 'Khuyến mãi không được bỏ trống',
        ];
    }
}
