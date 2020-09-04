<?php

namespace App\Http\Controllers;

use App\ChuongTrinhTour;
use App\Http\Requests\ChuongTrinhTourRequest;
use App\Http\Requests\TourDuLichResquest;
use App\TourDuLich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourDuLichController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stt = 0;
        $cout_tour =  DB::table('Tour')->count('ma_tour_open');
        $cout_tour_active =  DB::table('Tour')
                                ->where('Trang_thai','=',1)
                                ->count('ma_tour_open');
        $cout_tour_off = DB::table('Tour')
                            ->where('Trang_thai','=',0)
                            ->count('ma_tour_open');

        $tourdulich = DB::select('SELECT *  FROM Tour , chuongtrinhtour WHERE chuongtrinhtour.ma_tour = Tour.ma_chuog_trinh');
        return view('Admin/Tour.DanhSachTour', compact('tourdulich','stt','cout_tour','cout_tour_active','cout_tour_off'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $chuongtrinhtour = ChuongTrinhTour::all();
        return view('Admin/Tour.OpenTour',compact('chuongtrinhtour'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = new TourDuLich;
        $tour->ma_chuog_trinh = $request->chuongtrinhtour;
        $tour->Tieu_de = $request->ten_tour;
        $tour->ngay_khoi_hanh = $request->ngay_khoi_hanh;
        $tour->ngay_ket_thuc = $request->ngay_ket_thuc;
        if(isset($request->trang_thai))
        {
            $tour->Trang_thai = $request->trang_thai;
        }
        $tour->save();
        return redirect()->route('Quantri.ds_tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id , $matour)
    {
        $chuongtrinh = ChuongTrinhTour::all();
        $tour = DB::select('SELECT * FROM Tour WHERE ma_chuog_trinh = ? and ma_tour_open = ? ', [$id,$matour]);
        return view('Admin/Tour.EditTour',compact('tour','chuongtrinh'));
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
    public function update(Request $request, $id, $matour)
    {
        //
        $tour = TourDuLich::find($matour);
        $tour->ma_chuog_trinh = $request->chuongtrinhtour;
        $tour->Tieu_de = $request->ten_tour;
        if(isset($request->trang_thai))
        {
            $tour->Trang_thai = $request->trang_thai;
        }
        else
        {
            $tour->Trang_thai = 0;
        }
        $tour->ngay_khoi_hanh = $request->ngay_khoi_hanh;
        $tour->ngay_ket_thuc = $request->ngay_ket_thuc;
        $tour->save();
        return redirect()->route('Quantri.ds_tour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function khuyenmai($id)
    {
        //
    }
}
