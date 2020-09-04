<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index()
    {
        $stt = 0;
        $listComment = Comment::all();
        return view('Admin.ListComment', compact('listComment','stt'));
    }

    public function ActiveComment($id)
    {
        $listComment = Comment::find($id);
        $listComment->trang_thai = 1;
        $listComment->save();
        return redirect()->route('Quantri.list_comment');
    }
    
    public function DelectComment($id)
    {
        $listComment = Comment::find($id);
        $listComment->trang_thai = -1;
        $listComment->save();
        return redirect()->route('Quantri.list_comment');
    }

    public function postComment($id , Request $request)
    {
        
        $ngay = Carbon::now();
        $Commnet = new Comment();
        $Commnet->ten = $request->name;
        $Commnet->gmail = $request->gmail;
        $Commnet->noidung = $request->content;
        $Commnet->Ngay_commnet = $ngay;
        $Commnet->ma_tour = $id;
        $Commnet->save();
        return back();
    }
}
