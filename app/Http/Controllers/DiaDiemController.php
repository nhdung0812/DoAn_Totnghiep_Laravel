<?php

namespace App\Http\Controllers;

use App\DiaDiem;
use App\HinhAnh;
use App\Http\Requests\DiaDiemRequest;
use App\KhuVuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
class DiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $diadiem =  DiaDiem::all();
        $khuvuc = KhuVuc::all();
        $stt = 0;
        return view('Admin.ListDiaDiem', compact('diadiem','khuvuc','stt'));
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
        $diadiem = new DiaDiem;
        $diadiem->ten_dia_diem = $request->ten_dia_diem;
        $diadiem->thongtin = $request->thongtin_dd;
        $diadiem->ma_mien = $request->khu_vuc;
        $diadiem->save();   
        return response()->json(['success' => '1']);
    }
    public function Upload()
    {
        $diadiem =  DiaDiem::all();
        $hinhanh = HinhAnh::all();
        return view('Admin.ListHinhAnh', compact('diadiem','hinhanh'));
    }

    public function Xu_ly_upload(Request $request)
    {
        $photos = $request->file('file');
        if (!is_array($photos)) {
            $photos = [$photos];
        }
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = $photo->getClientOriginalName();
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
            $path = public_path('/Home/img/diadiem');

        
            $resize = Image::make($photo)->resize(300,230);
            $resize->resize(300,230, function($constraint){
                $constraint->aspectRatio();
            })->save($path.'/'.$name);
            $hinhanh = new HinhAnh;
            $hinhanh->Hinh_anh_1 = $name;
            $hinhanh->ma_dia_diem = 1;
            $hinhanh->save();
        }
        return redirect()->route('Quantri.ds_hinh')->with('message', 'Thêm Thành Công');
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
        //
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
        //
        if($request->ajax())
        {
            $diadiem = DiaDiem::findOrFail($id);
            return response()->json(['data'=> $diadiem]);
        }
    }
    public function xulysuadiadiem(Request $request)
    {
        $diadiem = DiaDiem::findOrFail($request->ID);
        $diadiem->ten_dia_diem = $request->ten_dia_diem;
        $diadiem->thongtin = $request->Thong_tin;
        $diadiem->save();
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
        $diadiem = DiaDiem::find($id);
        $diadiem->delete();
        return redirect("/quantri/diadiem");
    }
    // Thùng rác 
    public function boxtrash()
    {
        $trash_diadiem = DiaDiem::onlyTrashed()->get();
        $khuvuc = KhuVuc::all();
        return view('Admin.Trash_diadiem',compact('trash_diadiem','khuvuc'));;
    }

    // Upload hình
    // phục hồi 
    public function ustrash($id)
    {
        $restore = DiaDiem::withTrashed()->find($id);
        $restore->restore();
        return redirect()->back();
    }
    public function forDelete($id)
    {
        $diadiem = DiaDiem::withTrashed()->find($id);
        $diadiem->forceDelete();
        return redirect()->back();
    }
}
