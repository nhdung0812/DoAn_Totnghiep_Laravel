<?php

namespace App\Http\Controllers;

use App\Events\NotificationEvent;
use App\KhuVuc;
use Illuminate\Http\Request;

class KhuVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $KhuVuc = KhuVuc::all();
        return view('Admin.ListKhuVuc',compact('KhuVuc'));
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
        $khuvuc = new KhuVuc;
        $khuvuc->ten_mien = $request->ten_khu_vuc;
        $khuvuc->ghi_chu = $request->ghi_chu;
        $khuvuc->save();   
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
            $diadiem = KhuVuc::findOrFail($id);
            return response()->json(['data'=> $diadiem]);
        }
    }
    // Xử lý sửa khu vực
    public function xu_ly_update(Request $request)
    {
        $khuvuc = KhuVuc::findOrFail($request->ID);
        $khuvuc->ten_mien = $request->ten_khu_vuc;
        $khuvuc->ghi_chu = $request->ghi_chu;
        $khuvuc->save();
        event(new NotificationEvent(json_decode($khuvuc)));
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
        //
        $khuvuc = KhuVuc::find($id);
        $khuvuc->delete();
        return redirect("/quantri/khuvuc");
    }
    // Thùng rác 
    public function boxtrash()
    {
        $trash_khuvuc = KhuVuc::onlyTrashed()->get();
        return view('Admin.Trash_KhuVuc',compact('trash_khuvuc'));;
    }

    // phục hồi 
    public function ustrash($id)
    {
        $restore = KhuVuc::withTrashed()->find($id);
        $restore->restore();
        return redirect()->back();
    }
    // Xoá vĩnh viễn
    public function forDelete($id)
    {
        $khuvuc = KhuVuc::withTrashed()->find($id);
        $khuvuc->forceDelete();
        return redirect()->back();
    }
}
