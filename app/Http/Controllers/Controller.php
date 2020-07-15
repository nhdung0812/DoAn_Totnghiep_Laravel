<?php

namespace App\Http\Controllers;

use App\LoaiTour;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct()
    {
        $this->dangNhap();
        $this->loadtheloai();
    }
    function dangNhap()
    {
        if(Auth::guard('quantriviens')->check())
        {
            view()->share('user_login' , Auth::user());
        }
    }
    function loadtheloai()
    {
        $loai = LoaiTour::all();
        view()->share('loai',$loai);
    }
}
