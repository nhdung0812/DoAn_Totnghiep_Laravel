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

        $tour = DB::select('SELECT * FROM chuongtrinhtour, loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour');
        return view('Home.Home',compact('tour'));
    }
    // Danh sách thể loại tour
    public function theloaitour($id)
    {

        $list_tour = DB::table('chuongtrinhtour')
                            ->join('loaitour', 'chuongtrinhtour.ma_loai_tour', '=', 'loaitour.ma_loai_tour')
                            ->select('*', 'ten_loai_tour')
                            ->where('loaitour.ma_loai_tour', '=', $id)
                            ->paginate(2);
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
        $singletour = DB::select('SELECT tour.ma_tour, tour.ten_tour , tour.gia_tour ,tour.ngay_khoi_hanh, tour.ngay_ket_thuc ,tour.so_ngay ,tour.so_dem , tour.so_cho, tour.noi_dung ,tour.hinh_anh,tour.khuyen_mai, mien.ten_mien , loaitour.ten_loai_tour FROM chuongtrinhtour as tour , chitiettour ct , mien ,loaitour WHERE  tour.ma_tour = tour.ma_tour AND ct.ma_mien = mien.ma_mien AND tour.ma_loai_tour = loaitour.ma_loai_tour and tour.ma_tour = ? ', [$temp]);
        return View('Home.single', compact( 'singletour'));
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
