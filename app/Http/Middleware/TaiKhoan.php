<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class TaiKhoan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd(Auth::guard('quantriviens')->check());
        if(!Auth::guard('quantriviens')->check())
        {
            return redirect()->route('dang-nhap');
        }

        //dd(Auth::check());
        return $next($request);
    }
}
