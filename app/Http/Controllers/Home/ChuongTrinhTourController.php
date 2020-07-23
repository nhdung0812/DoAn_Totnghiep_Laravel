<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChuongTrinhTour;
use App\LoaiTour;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
class ChuongTrinhTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tour = DB::select('SELECT * FROM chuongtrinhtour, loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour And loaitour.ma_loai_tour= 2 ');
        // Tour Nước ngoài
        $tour_nuoc_ngoai = DB::select('SELECT * FROM chuongtrinhtour, loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour And loaitour.ma_loai_tour= 1');
        // Tour khuyến mãi
        $tour_khuyen_mai = DB::table('chuongtrinhtour')
                            ->join('loaitour', 'chuongtrinhtour.ma_loai_tour', '=', 'loaitour.ma_loai_tour')
                            ->select('*', 'ten_loai_tour')
                            ->where('khuyen_mai','<>' ,'0' )
                            ->get();
        // Tour nỗi bật nhất
        // $tour_top_one = DB::select('SELECT * FROM chuongtrinhtour,loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat =( SELECT MAX( so_cho_da_dat ) FROM chuongtrinhtour)');
        // // Tour nỗi bật thứ 2
        // $tour_top_two = DB::select('SELECT * FROM chuongtrinhtour,loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat = (SELECT MAX( so_cho_da_dat ) FROM chuongtrinhtour,loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat < ( SELECT MAX( so_cho_da_dat ) FROM chuongtrinhtour))');
        // // 3 tour nỗi bật còn lại
        // $top_three_tour = DB::select('SELECT * FROM chuongtrinhtour,loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat < (SELECT MAX( so_cho_da_dat ) FROM chuongtrinhtour,loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat < ( SELECT MAX( so_cho_da_dat ) FROM chuongtrinhtour)) LIMIT 3');
        return view('Home.Home',compact('tour','tour_khuyen_mai','tour_nuoc_ngoai'));
    }
    // Danh sách thể loại tour
    public function theloaitour($id)
    {
        
        $list_tour = DB::table('chuongtrinhtour')
                            ->join('loaitour', 'chuongtrinhtour.ma_loai_tour', '=', 'loaitour.ma_loai_tour')
                            ->select('*', 'ten_loai_tour')
                            ->where('loaitour.ma_loai_tour', '=', $id)
                            ->paginate(6);
        return view('Home.ListTour', compact('list_tour'));
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
        //
       
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
        $temp = (int)$id;
        //var_dump($temp);
        $hinh_anh = DB::select('SELECT Hinh_anh_1 FROM chuongtrinhtour , chitiettour ,diadiem , Hinh_Anh WHERE chuongtrinhtour.ma_tour = chitiettour.ma_tour AND chitiettour.ma_dia_diem = diadiem.ma_dia_diem AND diadiem.ma_dia_diem = Hinh_anh.ma_dia_diem AND chuongtrinhtour.ma_tour = ? ', [$temp]);
        //dd($hinh_anh);
        $tour = DB::select('SELECT * FROM chuongtrinhtour, loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour');
        $singletour = DB::select('SELECT tour.ma_tour, tour.ten_tour , tour.gia_tour ,tour.so_ngay ,tour.so_dem , tour.so_cho, tour.noi_dung ,tour.hinh_anh,tour.khuyen_mai, mien.ten_mien , loaitour.ten_loai_tour FROM chuongtrinhtour as tour , chitiettour ct , mien ,loaitour WHERE  tour.ma_tour = tour.ma_tour AND ct.ma_mien = mien.ma_mien AND tour.ma_loai_tour = loaitour.ma_loai_tour and tour.ma_tour = ? ', [$temp]);
        return View('Home.single', compact( 'singletour','tour','hinh_anh'));
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
