<?php

namespace App\Http\Controllers;

use App\ChuongTrinhTour;
use App\Http\Requests\ChuongTrinhTourRequest;
use App\LoaiTour;
use App\Tour;
use Illuminate\Http\Request;

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
        $tour = Tour::all();
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
        return view('Admin.Form_add_tour',compact('loai_tour'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChuongTrinhTourRequest $request)
    {

        dd($request->validator);

        // if($request->errors)
        // {
        //     $Chuongtrinhtour = new ChuongTrinhTour();
        //     $Chuongtrinhtour->ten_tour = $request->ten_tour;
        //     $Chuongtrinhtour->gia_tour = $request->gia_tour;
        //     $Chuongtrinhtour->ngay_khoi_hanh = $request->ngay_khoi_hanh;
        //     $Chuongtrinhtour->ngay_ket_thuc = $request->ngay_ket_thuc;
        //     $Chuongtrinhtour->so_ngay = $request->so_ngay;
        //     $Chuongtrinhtour->so_dem = $request->so_dem;
        //     $Chuongtrinhtour->so_cho = $request->so_cho;
        //     $Chuongtrinhtour->noi_dung = $request->noi_dung;
        //     $Chuongtrinhtour->ma_loai_tour = $request->loai_tour;
        //     $Chuongtrinhtour->khuyen_mai = $request->khuyen_mai;
        //     $Chuongtrinhtour->ghi_chu = $request->ghi_chu;
        // }
        // if($request->hasFile('hinh_tour')){
        //     $file = $request->file('hinh_tour');
        //     $name = $file->getClientOriginalName();
        //     $exection = $file->getClientOriginalExtension();
        //     $file->move(public_path().'/Home/img/tour/',$name);
        //     $Chuongtrinhtour->hinh_anh = $name;
        // }

        // $Chuongtrinhtour->save();
        // return redirect()->route('Quantri.danh_sach_chuong_trinh')->with('message', 'Thêm Thành Công');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
