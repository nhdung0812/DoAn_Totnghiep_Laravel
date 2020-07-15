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
class AccountController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taiKhoan = TaiKhoan::all();
        $so_tour = DB::table('chuongtrinhtour')->count('ma_tour');
        return view('Admin.ListUser',compact('taiKhoan','so_tour'));
    }
    public function coutTour()
    {
        $so_tour = DB::table('chuongtrinhtour')->count('ma_tour');
        return view('Admin.Dashboard',compact('so_tour'));
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
    public function store(TaikhoanRequest $request)
    {
        $taiKhoan = new TaiKhoan;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $exection = $file->getClientOriginalExtension();
            $file->move(public_path().'/Admin/image/avatar/',$name);
            $taiKhoan->hinh_anh = $name;
        }

        $taiKhoan->ten_quan_tri = $request->ho_ten;
        $taiKhoan->ten_dang_nhap = $request->ten_dang_nhap;
        $taiKhoan->mat_khau = Hash::make($request->mat_khau);
        $taiKhoan->gmail = $request->gmail;
        $taiKhoan->dien_thoai = $request->sdt;
        $taiKhoan->dia_chi = $request->dia_chi;
        if($request->status != 0)
            $taiKhoan->trang_thai = $request->status ;
        else
            $taiKhoan->trang_thai = 0;

        //dd($taiKhoan->hinh_anh);
        $taiKhoan->save();
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
        if($request->up_checkbox != 0)
            $user->trang_thai = $request->up_checkbox ;
        else
            $user->trang_thai = 0;

        $user->save();
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
