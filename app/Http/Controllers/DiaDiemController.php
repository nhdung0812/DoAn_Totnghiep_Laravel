<?php

namespace App\Http\Controllers;

use App\DiaDiem;
use App\Events\NotificationEvent;
use App\HinhAnh;
use App\Http\Requests\DiaDiemRequest;
use App\KhuVuc;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //dd($diadiem);
        return view('Admin.ListHinhAnh', compact('diadiem','hinhanh'));
    }

    public function form_them()
    {
        $diadiem =  DiaDiem::all();
        return view('Admin.Form_them_hinh' , compact('diadiem'));
    }
    public function form_sua($id, $mahinh)
    {
        $hinh = DB::table('diadiem')
                        ->join('Hinh_Anh', 'diadiem.ma_dia_diem', '=', 'Hinh_Anh.ma_dia_diem')    
                        ->where('diadiem.ma_dia_diem', '=' , $id)
                        ->where('Hinh_Anh.ma_hinh_anh', '=', $mahinh)                  
                        ->select('*')
                        ->get();
        return view('Admin.Form_sua_hinh' , compact('hinh'));
    }
    
    public function Xu_ly_Them(Request $request)
    {
        //dd($request);
        $photos = $request->file('hinh_dd');
        //dd($photos);
        if (!is_array($photos)) {
            $photos = [$photos];
        }
        $hinh = [];
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = $photo->getClientOriginalName();
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
            $path = public_path('/Home/img/diadiem');

        
            $resize = Image::make($photo)->resize(960,490);
            $resize->resize(960,490, function($constraint){
                $constraint->aspectRatio();
            })->save($path.'/'.$name);

            $hinhanh = new HinhAnh;
            $hinhanh->Hinh_anh_1 = $name;
            $hinhanh->ma_dia_diem = $request->ma_dia_diem;
            $hinhanh->save();
        }
        return redirect()->route('Quantri.ds_hinh');
    }
    // sửa hình ảnh
    public function Xu_ly_sua(Request $request)
    {
        $photo = $request->file('hinh_dd');
        $name = $photo->getClientOriginalName();
        $save_name = $name . '.' . $photo->getClientOriginalExtension();
        $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
        $path = public_path('/Home/img/diadiem');

    
        $resize = Image::make($photo)->resize(960,490);
        $resize->resize(960,490, function($constraint){
            $constraint->aspectRatio();
        })->save($path.'/'.$name);

        $hinhanh = HinhAnh::where('ma_dia_diem',$request->ma_dia_diem)
                            ->where('ma_hinh_anh',$request->hinh)
                            ->update(['Hinh_anh_1' => $name]);
        return redirect()->route('Quantri.ds_hinh');
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
        $user = Auth::guard('quantriviens')->user();
        dd($user);
        // $account_detail = ['fname'=>$diadiem->ten_dia_diem,'lname'=>$diadiem->thongtin];
        // //dd('hahah');
        // event(new NotificationEvent($account_detail));
        // return response()->json(['success' => '1']);
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
