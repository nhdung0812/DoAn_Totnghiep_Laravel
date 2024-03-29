<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TaiKhoan;
use Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\http\Requests;
use App\Http\Requests\TaikhoanRequest;
use App\LoginTaiKhoan;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Json;
use Illuminate\Http\UploadedFile;
use App\Post;
use Illuminate\Auth\Access\Gate;
use App\Providers\AuthServiceProvider;
use App\RoleUser;
use App\User;
use DebugBar\DebugBar;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AccountController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $role = Role::all();
        if(('isAdmin')){
            $taiKhoan = TaiKhoan::all();
            $so_tour = DB::table('chuongtrinhtour')->count('ma_tour');
            return view('Admin.ListUser',compact('taiKhoan','so_tour','role'));
        }
    }
    public function coutTour()
    {
        $range = \Carbon\Carbon::now()->subYears(5);
        $orderYear = DB::table('dattour')
                    ->select(DB::raw('year(ngay_dat) as getYear'), DB::raw('COUNT(*) as value'))
                    ->where('ngay_dat', '>=', $range)
                    ->groupBy('getYear')
                    ->orderBy('getYear', 'ASC')
                    ->get();

        $so_tour = DB::table('chuongtrinhtour')->count('ma_tour');
        $so_dat_tour = DB::table('dattour')->count('ma_dat_tour');
        $doanh_thu = DB::table('dattour')->sum('thanh_tien');
        $dt = number_format($doanh_thu,0,'.','.');
        $danh_sach_dat = DB::select('SELECT * FROM dattour, khachhang , chitietdattour, chuongtrinhtour WHERE dattour.ma_dat_tour = chitietdattour.ma_dat_tour and chitietdattour.ma_khach_hang = khachhang.ma_khach_hang and chuongtrinhtour.ma_tour = dattour.ma_tour');

        return view('Admin.Dashboard',compact('so_tour','danh_sach_dat','so_dat_tour','dt','orderYear'));
    }
    public function trash()
    {
        $trash = TaiKhoan::onlyTrashed()->get();
        return view('Admin.Danh_Sach_Trash',compact('trash'));;
    }
    public function ustrash($id)
    {
        $model = TaiKhoan::withTrashed()->find($id);
        $model->restore();
        return redirect()->back()->with('thongbao','ádasdsds');
        //return view('QuanTri.Danh_Sach_Trash',compact('trash'));;
    }
    public function forDelete($id)
    {

        $model = TaiKhoan::withTrashed()->find($id);
        $model->forceDelete();
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $users = TaiKhoan::role('admin')->get();
        // $check =  Auth::guard('quantriviens')->user();
        //dd($request);
        $taiKhoan = new TaiKhoan;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $exection = $file->getClientOriginalExtension();
            $file->move(public_path().'/Admin/image/avatar/',$name);
            $taiKhoan->hinh_anh = $name;
        }
                                                                
        $taiKhoan->ten_dang_nhap = $request->ten_dang_nhap;
        $taiKhoan->ten_quan_tri = $request->ho_ten;
        $taiKhoan->mat_khau = Hash::make($request->mat_khau);
        $taiKhoan->gmail = $request->gmail;
        $taiKhoan->dien_thoai = $request->sdt;
        $taiKhoan->dia_chi = $request->dia_chi;
        if($request->phanquan != 2)
            $taiKhoan->trang_thai = $request->phanquyen ;
        else
            $taiKhoan->phanquyen = 2;
        //dd($taiKhoan->hinh_anh);
        $taiKhoan->save();
        // if($request->status != 0)
        //     $taiKhoan->givePermissionTo('edit articles');
        // return auth()->user()->givePermissionTo('edit articles');

        // Thêm Phân Quyền
        $UserRoles = new RoleUser();
        $UserRoles->role_id = $request->phanquyen;
        $UserRoles->user_id = $taiKhoan->ma_quan_tri;
        $UserRoles->save();
        return response()->json(['success' => '1']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taiKhoan = TaiKhoan::findOrFail($id);
        return view('Admin.EditProfile',compact('taiKhoan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->ajax())
        {
            $user = TaiKhoan::findOrFail($id);
            return response()->json(['data'=> $user]);
        }
    }
    public function xulysua(Request $request)
    {
        $user = TaiKhoan::findOrFail($request->ID);
        $user->ten_quan_tri = $request->ho_ten;
        $user->ten_dang_nhap = $request->ten_dang_nhap;
        $user->mat_khau = $request->up_mat_khau;
        $user->gmail = $request->gmail;
        $user->dien_thoai = $request->sdt;
        $user->dia_chi = $request->dia_chi;
        $user->trang_thai = $request->phanquyen ;
        $user->save();

        $UserRoles =  DB::table('Role_user')->where('user_id', $request->ID)->update(['role_id' => $request->phanquyen]);
        return response()->json(['success' => '1']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taiKhoan = TaiKhoan::find($id);
        TaiKhoan::find($id)->delete();

        return redirect("/quantri/ds");
    }

}
