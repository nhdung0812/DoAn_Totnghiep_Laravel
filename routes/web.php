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
    Route::post('/comment/{id}', 'CommentController@postComment')->name('comment');
    Route::get('/tin-tuc', 'TinTucController@index')->name('tintuc');
    Route::get('/search', 'Home\ChuongTrinhTourController@search')->name('search');
    Route::get('/hoadon', 'Home\ChuongTrinhTourController@hoadon')->name('hoadon');
    // Danh sách theo thể loại
    Route::get('theloai/{id}', 'Home\ChuongTrinhTourController@theloaitour')->name('danh-sanh_the_loai');
      // Đặt Tour
    Route::get('/dattour/{id}', 'DatTourController@index')->name('dat-tour');
    Route::post('/xu-ly-dattour', 'DatTourController@store')->name('xu-ly-dattour');
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
            Route::GET('/xoa_vinh_vien_user/{id}','AccountController@forDelete')->name('xoa_vinh_vien_user');
            Route::GET('/editprofile/{id}','AccountController@edit')->name('edit-profile');
            Route::get('/chucvu','ChucVuController@index')->name('chuc_vu');
            Route::get('/chucvu_edit/{id}','ChucVuController@show')->name('edit_chuc_vu');

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
            Route::GET('/suatour/{id}','TourController@show')->name('sua_tour');
            Route::GET('/xoaTous/{id}', 'TourController@destroy')->name('Xu_ly_xoa_tour');
            Route::GET('thungractour','TourController@trash')->name('trash-tour');
            Route::GET('/xoatour/{id}','TourController@forDelete')->name('xoa_vinh_vien_tour');
            
            // Địa điểm 
            Route::get('/diadiem', 'DiaDiemController@index')->name('Danh-sach-dia-diem');
            Route::POST('themdiadiem', 'DiaDiemController@store')->name('them_dia_diem');
            Route::POST('suadiadiem/{id}','DiaDiemController@update')->name('sua_dia_diem');
            Route::POST('suadiadiem','DiaDiemController@xulysuadiadiem')->name('xu_ly_sua_dia_diem');
            Route::GET('xoadiadiem/{id}','DiaDiemController@destroy')->name('trash_dia_diem');
            Route::GET('thungracdiadiem','DiaDiemController@boxtrash')->name('box-trash-dia-diem');
            Route::GET('xoa_vinh_vien_dia_diem/{id}','DiaDiemController@forDelete')->name('xoa_vinh_vien_dia_diem');
            Route::GET('/diadiem_untrash/{id}','DiaDiemController@ustrash')->name('phuc_hoi_dia_diem');

            Route::GET('upload', 'DiaDiemController@Upload')->name('ds_hinh');
            Route::post('upload/image', 'DiaDiemController@Xu_ly_upload')->name('xy_ly_update_img');
            Route::post('upload/hinh_dia_diem', 'DiaDiemController@Xu_ly_Them')->name('them_hinh_anh');         
            Route::get('upload/them_hinh', 'DiaDiemController@form_them')->name('form_them_hinh');
            Route::get('upload/sua_hinh/dia_diem={id}&ma_hinh={mahinh}', 'DiaDiemController@form_sua')->name('form_sua_hinh');
            Route::post('upload/sua_hinh_dia_diem', 'DiaDiemController@Xu_ly_sua')->name('sua_hinh_anh');         
            // Khu Vực
            Route::get('/khuvuc', 'KhuVucController@index')->name('ds_khu_vuc');
            Route::POST('themkhuvuc', 'KhuVucController@store')->name('them_khu_vuc');
            Route::POST('suakhuvuc/{id}', 'KhuVucController@update')->name('sua_khu_vuc');
            Route::POST('suakhuvuc', 'KhuVucController@xu_ly_update')->name('xu_ly_khu_vuc');
            Route::GET('xoakhuvuc{id}','KhuVucController@destroy')->name('trash_khu_vuc');
            Route::GET('thungrackhuvuc','KhuVucController@boxtrash')->name('box-trash-khu-vuc');
            Route::GET('/khuvuc_untrash/{id}','KhuVucController@ustrash')->name('phuc_hoi_khu_vuc');
            Route::GET('/xoa_vinh_vien/{id}','KhuVucController@forDelete')->name('xoa_vinh_vien_khu_vuc');

            // Hiện địa điểm theo khu vực
            Route::POST('hien_khu_vuc','TourController@hiendiadiem')->name('hien_dia_diem');

           // Tour Du lịch
           Route::get('/dstour', 'TourDuLichController@index')->name('ds_tour');
           Route::get('/motour', 'TourDuLichController@create')->name('mo-tour');
           Route::post('/xu-ly-mo-tour', 'TourDuLichController@store')->name('xu-ly-mo-tour');
           Route::get('/edit_dl/ma_chuong_trinh={id}&ma_tour={matour}', 'TourDuLichController@show')->name('edit_dl');
           Route::post('/xu-ly-edit-tour/ma_chuong_trinh={id}&ma_tour={matour}', 'TourDuLichController@update')->name('xu-ly-edit-tour');
           Route::get('/search', 'TourDuLichController@search')->name('search');
           Route::GET('/tour_untrash/{id}','TourController@ustrash')->name('phuc_hoi_tour');
           // Lịch Trình
           Route::get('/dslichtrinh', 'LichTrinhController@index')->name('ds_lich_trinh');
           Route::get('/themlichtrinh', 'LichTrinhController@create')->name('them_lich_trinh');
           Route::POST('/so_ngay', 'LichTrinhController@layso')->name('lay_so_ngay');
           Route::POST('/xu_ly_lich_trinh', 'LichTrinhController@store')->name('xu_ly_lich_trinh');
            //List Đặt Tour
            Route::get('/dsTour/', 'DatTourController@ListTour')->name('dsDatTour');
            Route::get('/dshanhkhach/{id}', 'DatTourController@ListKhach')->name('dsHanhKhach');
            Route::get('/hoadon/{id}', 'DatTourController@hoadon')->name('hoadon');
           
            
           
        });
    });
});
// Trạng thái thanh toán
Route::get('/return-vnpay', 'DatTourController@return')->name('trangthai');
Route::get('/test', 'DatTourController@getMonthlyPostData')->name('hahah');
{}
View::composer(["*"],function($view){
    $user = Auth::guard('quantriviens')->user();
    $view->with('user_login',$user);
});


Route::get('/counter', function (){
   return view('counter');
});

Route::get('/pusher', function(Illuminate\Http\Request $request) {
    event(new App\Events\NotificationEvent($request));
    return redirect('getPusher');
});
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
