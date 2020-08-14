<?php

namespace App\Http\Controllers\Home;

use App\ChiTietTour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChuongTrinhTour;
use App\Comment;
use App\KhuVuc;
use App\LoaiTour;
use App\Post;
use App\TourDuLich;
use Awssat\Visits\Visits;
use Carbon\Carbon;
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
        // $post = Post;
        $Time_now = Carbon::now();
        $Time_now->toDateString();
        $khu_vuc = KhuVuc::all();
        $tour = DB::select('SELECT * FROM chuongtrinhtour, loaitour , Tour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour And Tour.ma_chuog_trinh = chuongtrinhtour.ma_tour And loaitour.ma_loai_tour= 2 AND Tour.Trang_thai = 1');
       
        // Tour Nước ngoài
        $tour_nuoc_ngoai = DB::select('SELECT * FROM chuongtrinhtour, loaitour , Tour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour And Tour.ma_chuog_trinh = chuongtrinhtour.ma_tour And loaitour.ma_loai_tour= 1 AND Tour.Trang_thai = 1');
        // Tour khuyến mãi
        $tour_khuyen_mai = DB::table('chuongtrinhtour')
                            ->join('loaitour', 'chuongtrinhtour.ma_loai_tour', '=', 'loaitour.ma_loai_tour')
                            ->select('*', 'ten_loai_tour')
                            ->where('khuyen_mai','<>' ,'0' )
                            ->get();
        // Tour nỗi bật nhất
        $tour_top_one = DB::select('SELECT * FROM chuongtrinhtour,loaitour,Tour WHERE  chuongtrinhtour.ma_tour = Tour.ma_chuog_trinh and chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat =( SELECT MAX( so_cho_da_dat ) FROM Tour)');
        // Tour nỗi bật thứ 2
        $tour_top_two = DB::select('SELECT * FROM chuongtrinhtour,loaitour ,Tour WHERE chuongtrinhtour.ma_tour = Tour.ma_chuog_trinh and chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat = (SELECT MAX( so_cho_da_dat ) FROM chuongtrinhtour,loaitour ,Tour WHERE chuongtrinhtour.ma_tour = Tour.ma_chuog_trinh and chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat < ( SELECT MAX( so_cho_da_dat ) FROM Tour))');
        // 3 tour nỗi bật còn lại
        $top_three_tour = DB::select('SELECT * FROM chuongtrinhtour,loaitour ,Tour WHERE chuongtrinhtour.ma_tour = Tour.ma_chuog_trinh and chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat < (SELECT MAX( so_cho_da_dat ) FROM chuongtrinhtour,loaitour ,Tour WHERE chuongtrinhtour.ma_tour = Tour.ma_chuog_trinh and chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour and so_cho_da_dat < ( SELECT MAX( so_cho_da_dat ) FROM Tour)) LIMIT 3');

        return view('Home.Home',compact('tour','tour_khuyen_mai','tour_nuoc_ngoai','khu_vuc','tour_top_one','tour_top_two','top_three_tour','Time_now'));
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
    // Hiện hoá đơn
    public function hoadon()
    {
        return view('Home.hoadon');
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
        $stt = 0;
        $temp = (int)$id;   
        //var_dump($temp);
        //dd($id);
        $comment = DB::select('SELECT * FROM comment WHERE ma_tour = ?', [$id]);
        $num_reviews = DB::select('SELECT count(*) as num FROM comment WHERE ma_tour = ?', [$id]);
        $hinh_anh = DB::select('SELECT Hinh_anh_1 FROM chuongtrinhtour , chitiettour ,diadiem , Hinh_Anh WHERE chuongtrinhtour.ma_tour = chitiettour.ma_tour AND chitiettour.ma_dia_diem = diadiem.ma_dia_diem AND diadiem.ma_dia_diem = Hinh_anh.ma_dia_diem AND chuongtrinhtour.ma_tour = ? ', [$temp]);
        //dd($hinh_anh);
        $tour = DB::select('SELECT * FROM chuongtrinhtour, loaitour WHERE chuongtrinhtour.ma_loai_tour = loaitour.ma_loai_tour');
        $singletour = DB::select('SELECT * , ctt.ma_tour FROM chuongtrinhtour as ctt , chitiettour ct , mien ,loaitour, Tour WHERE Tour.ma_chuog_trinh = ctt.ma_tour AND ct.ma_mien = mien.ma_mien AND ctt.ma_loai_tour = loaitour.ma_loai_tour  and ctt.ma_tour = ? LIMIT 1,1' ,[$id]   );
        // $singletour = DB::table('chuongtrinhtour')
        //                     ->join('Tour','chuongtrinhtour.ma_tour','=','Tour.ma_chuog_trinh')
        //                     ->join('loaitour', 'chuongtrinhtour.ma_loai_tour', '=', 'loaitour.ma_loai_tour')
        //                     //->join('chitiettour' , 'chuongtrinhtour.ma_tour','=' ,'chitiettour.ma_tour')
        //                     //->join('mien' , 'chitiettour.ma_mien','=' ,'mien.ma_mien')
        //                     ->select('*')
        //                     ->where('chuongtrinhtour.ma_tour', '=', $id)
        //                     ->get();
        //dd($singletour);
        $lich_trinh = DB::select('SELECT * FROM chuongtrinhtour,lichtrinh WHERE chuongtrinhtour.ma_tour = lichtrinh.ma_chuong_trinh and chuongtrinhtour.ma_tour = ?' , [$id]);
        return View('Home.single', compact( 'singletour','tour','hinh_anh','lich_trinh','stt','comment','num_reviews'));
    }
    // search
    public function search(Request $request)
    {
        //dd($request);
        $list_tour = DB::table('chuongtrinhtour')
                            ->join('loaitour', 'chuongtrinhtour.ma_loai_tour', '=', 'loaitour.ma_loai_tour')
                            ->join('chitiettour' , 'chuongtrinhtour.ma_tour','=' ,'chitiettour.ma_tour')
                            ->join('mien' , 'chitiettour.ma_mien','=' ,'mien.ma_mien')
                            ->join('Tour','chuongtrinhtour.ma_tour','=','Tour.ma_chuog_trinh')
                            ->select('*')
                            ->where('mien.ma_mien', '=', $request->dia_diem)
                            ->orWhere('ngay_khoi_hanh','=',$request->ngay)
                            ->paginate(6);
        //dd($list_tour);
        return view('Home.ListTour', compact('list_tour'));
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
