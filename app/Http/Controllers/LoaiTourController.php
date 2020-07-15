<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\LoaiTour;
use Illuminate\Http\Request;

class LoaiTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $loai = LoaiTour::all();
        return view('Admin.ListLoaiTous',compact('loai'));

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
        //dd($request);
        $loai = new LoaiTour;
        $loai->ten_loai_tour = $request->ten_loai_tour;
        $loai->save();
        return response()->json(['success' => '1']);
    }
    public function xulyloaitour(Request $request)
    {
        $loai = LoaiTour::findOrFail($request->ID);
        $loai->ten_loai_tour = $request->ten_loai_tour;
        $loai->save();
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
        if($request->ajax())
        {
            $user = LoaiTour::findOrFail($id);
            return response()->json(['data'=> $user]);
        }
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

        $loai = LoaiTour::find($id);
        $loai::find($id)->delete();
        return redirect("/quantri/loaitour");
    }

    // Trash
    public function forDelete($id)
    {
        $loai = LoaiTour::withTrashed()->find($id);
        $loai->forceDelete();
        return redirect()->back();
    }
    // Thùng rác
    public function boxtrash()
    {
        $trash_loai = LoaiTour::onlyTrashed()->get();
        //dd($trash_loai);
        return view('Admin.Trash_loai',compact('trash_loai'));;
    }
    // Xoá vĩnh viễn
    public function DeleteLoai($id)
    {
        $delete_loai = LoaiTour::withTrashed()->find($id);
        $delete_loai->forceDelete();
        return redirect()->back();

    }
    //Khôi phục Tour
    public function ustrash($id)
    {
        $restore = LoaiTour::withTrashed()->find($id);
        $restore->restore();
        return redirect()->back();
    }
}
