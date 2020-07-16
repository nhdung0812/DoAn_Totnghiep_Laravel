<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  Rotute Home Page


//  Route Tous Page
Route::name('Tous.')->group(function () {
    Route::get('/', 'Home\ChuongTrinhTourController@index')->name('Tous');
    Route::get('dangky', 'KhachHangController@create')->name('them_kh');
    Route::post('dangky', 'KhachHangController@xulydangky')->name('xu_ly');
    Route::get('/thong-tin-tous/{id}', 'Home\ChuongTrinhTourController@show')->name('single');
    Route::get('/tin-tuc', function () {
        return view('Home/news');
    })->name('tintuc');
    // Danh sách theo thể loại
    Route::get('theloai/{id}', 'Home\ChuongTrinhTourController@theloaitour')->name('danh-sanh_the_loai');
});

Route::GET('quantri/dangnhap','Login\AuthController@getLogin')->name('dang-nhap');
Route::POST('quantri/dangnhap','Login\AuthController@postLogin')->name('xu-ly-dang-nhap');
Route::GET('quantri/dangxuat','Login\AuthController@getLogout')->name('dang-xuat');

// Route Admin Page
Route::prefix('quantri')->group(function () {
        Route::group(['middleware' => ['TaiKhoan']], function (){
        Route::name('Quantri.')->group(function () {
            // Tài khoản quản trị viên
            Route::get('/','AccountController@coutTour')->name('Admin');
            Route::get('/ds','AccountController@index')->name('danh_sach');
            Route::get('/dskh','KhachHangController@index')->name('list_khach');
            Route::POST('/themTK', 'AccountController@store')->name('them_tk');
            Route::GET('sua/{id}','AccountController@edit')->name('sua');
            Route::post('update','AccountController@xulysua')->name('xu_ly_sua');
            Route::post('update/{id}','AccountController@update')->name('update');
            Route::POST('xoa/{id}','AccountController@destroy')->name('xoa');
            Route::GET('/trash','AccountController@trash')->name('thung-rac');
            Route::GET('/taikhoan_untrash/{id}','AccountController@ustrash')->name('phuc_hoi');
            Route::GET('/xoa_vinh_vien/{id}','AccountController@forDelete')->name('xoa_vinh_vien');
            Route::GET('/editprofile/{id}','AccountController@edit')->name('edit-profile');
            Route::get('/chucvu','ChucVuController@index')->name('chuc_vu');
            // Loại Tour
            Route::get('/loaitour', 'LoaiTourController@index')->name('Danh_sach_tour');
            Route::POST('themloai','LoaiTourController@store')->name('them_loai');
            Route::POST('sualoai/{id}','LoaiTourController@update')->name('sua_loai');
            Route::POST('sualoai','LoaiTourController@xulyloaitour')->name('xu_ly_loai');
            Route::POST('xoatour/{id}','LoaiTourController@destroy')->name('trash_tour');
            Route::GET('thungracloai','LoaiTourController@boxtrash')->name('box-trash');
            Route::GET('/xoaloai/{id}','LoaiTourController@DeleteLoai')->name('xoa_vinh_vien_loai');
            Route::GET('/loaitour_untrash/{id}','LoaiTourController@ustrash')->name('phuc_hoi_loai_tour');
            // Chương trình Tour
            Route::get('/Tous', 'TourController@index')->name('danh_sach_chuong_trinh');
            Route::get('/Tous/themtour', 'TourController@create')->name('them_Tour');
            Route::POST('/xu_ly_them', 'TourController@store')->name('Xu_ly_them_tour');
        });
    });
});

View::composer(["*"],function($view){
    $user = Auth::guard('quantriviens')->user();
    $view->with('user_login',$user);
});

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
