<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\LoginTaiKhoan;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use app\Events;
use App\Events\NotificationEvent;

class AuthController extends Controller
{
    // public function __construct() {
    // 	$this->middleware('auth');
    // }
    public function getLogin()
    {
        return view('Admin.DangNhap');

    }
    public function postLogin(Request $request)
    {

        // if (Auth::guard('TaiKhoan')->attempt( ['gmail' => $request->email,'password' => md5($request->password)])) {

        //     dd('đăng nhập thành công');
        // }
        $ten_dang_nhap = $request->email;
        $mat_khau = $request->password;
        //dd(Auth::guard('quantriviens')->attempt(['gmail' => $ten_dang_nhap, 'password' => $mat_khau, 'deleted_at' => null, 'trang_thai' => 1]));
        if(Auth::guard('quantriviens')->attempt(['gmail' => $ten_dang_nhap, 'password' => $mat_khau, 'deleted_at' => null]))
        {
            return Redirect()->route('Quantri.Admin');
        }
        else{
            return Redirect()->back()->with('login', 'Tài Khoản Hoặc Mật Khẩu Không Chính Xác!');
        }


    }
    //Logout
    public function getLogout()
    {
        Auth::guard('quantriviens')->logout();
        return redirect()->route('dang-nhap')->with('success', 'Đăng xuất thành công!');
    }
}
