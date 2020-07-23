<?php

namespace App\Http\Controllers;

use App\ChiTietTour;
use App\ChuongTrinhTour;
use App\DiaDiem;
use App\Http\Requests\ChuongTrinhTourRequest;
use App\KhuVuc;
use App\LoaiTour;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tour = ChuongTrinhTour::all();
        
        return view('Admin.ListTour',compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $loai_tour = LoaiTour::all();
        $diadiem = DiaDiem::all();
        $khuvuc = KhuVuc::all();
        return view('Admin.Form_add_tour',compact('loai_tour','diadiem','khuvuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChuongTrinhTourRequest $request)
    {
        $Chuongtrinhtour = new ChuongTrinhTour();
        $Chuongtrinhtour->ten_tour = $request->ten_tour;
        $Chuongtrinhtour->gia_tour = $request->gia_tour;
        $Chuongtrinhtour->so_ngay = $request->so_ngay;
        $Chuongtrinhtour->so_dem = $request->so_dem;
        $Chuongtrinhtour->so_cho = $request->so_cho;
        $Chuongtrinhtour->noi_dung = $request->noi_dung;
        $Chuongtrinhtour->ma_loai_tour = $request->loai_tour;
        $Chuongtrinhtour->khuyen_mai = $request->khuyen_mai;
        $Chuongtrinhtour->ghi_chu = $request->ghi_chu;
        if($request->hasFile('hinh_tour')){
            $file = $request->file('hinh_tour');
            $name = $file->getClientOriginalName();
            $exection = $file->getClientOriginalExtension();
            $path = public_path('/Home/img/tour/');
            $resize = Image::make($file->getRealPath())->resize(300,230);
            $resize->resize(300,230, function($constraint){
                $constraint->aspectRatio();
            })->save($path.'/'.$name);
            
            //$file->move($path,$name);
            //dd($resize);
            $Chuongtrinhtour->hinh_anh = $name;
            
        }
        
        $Chuongtrinhtour->save();
        for($i = 0 ; $i < count($request->dia_diem);$i++)
        {
            $chitiettour = new ChiTietTour;
            $chitiettour->ma_tour = $Chuongtrinhtour->ma_tour;
            $chitiettour->ma_dia_diem = $request->dia_diem[$i];
            $chitiettour->ma_mien = $request->khu_vuc;
            $chitiettour->save();
        }
        
        return redirect()->route('Quantri.danh_sach_chuong_trinh')->with('message', 'Thêm Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        
        $tour = DB::table('chuongtrinhtour')
        ->join('loaitour', 'chuongtrinhtour.ma_loai_tour', '=', 'loaitour.ma_loai_tour')
        ->select('*', 'ten_loai_tour')
        ->where('chuongtrinhtour.ma_tour', '=', $id)
        ->get();
        return view('Admin.Form_update_tour',compact('tour'));

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
    }
    //Trash
    public function trash()
    {
        $trash_tour = ChuongTrinhTour::onlyTrashed()->get();
        //dd($trash_loai);
        return view('Admin.TrashTour',compact('trash_tour'));;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = ChuongTrinhTour::find($id);
        $tour->delete();
        return redirect("/quantri/Tous");
    }
    // Xoá tour vĩnh viễn
    public function forDelete($id)
    {
        $tour = ChuongTrinhTour::withTrashed()->find($id);
        $tour->forceDelete();
        return redirect()->back();
    }

    // Hiện địa điểm theo khu vực
    public function hiendiadiem(Request $request)
    {
        $diadiem = DB::table('diadiem')
        ->select('*', 'ten_dia_diem')
        ->where('ma_mien','=' , $request->ID )
        ->get();
        return response()->json(['diadiem' => $diadiem]);
    }
}
