<?php

namespace App\Http\Controllers;

use App\ChuongTrinhTour;
use App\LichTrinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LichTrinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lichtrinh = LichTrinh::all();
        return view('Admin.ListLichTrinh',compact('lichtrinh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $chuong_trinh = ChuongTrinhTour::all();
        return view('Admin.Form_add_lich_trinh',compact('chuong_trinh'));
    }
    public function layso(Request $request)
    {
        $chuong_trinh = DB::table('chuongtrinhtour')
                            ->select('*')
                            ->where('ma_tour', '=', $request->ID)
                            ->get();
        return response()->json(['data' => $chuong_trinh]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for($i = 0 ; $i < count($request->ten_lich_trinh); $i++)
        {
            $lichtrinh = new LichTrinh;
            $lichtrinh->ma_chuong_trinh = $request->chuong_trinh;
            $lichtrinh->noi_dung_lich_trinh = $request->lich_trinh[$i];
            $lichtrinh->tieu_de = $request->ten_lich_trinh[$i];
            $lichtrinh->save();
        }

        return redirect()->route('Quantri.ds_lich_trinh')->with('message', 'Thêm Thành Công');
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
