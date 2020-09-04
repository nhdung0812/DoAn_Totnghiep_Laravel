<?php

namespace App\Http\Middleware;

use App\Permission;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CheckPermissionACl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $permission )
    {
        // Lấy tất cả các role hệ thống
        $listUserRole = DB::table('quantrivien')
                    ->join('Role_user', 'Role_user.user_id', '=' , 'quantrivien.ma_quan_tri')
                    ->join('roles', 'Role_user.role_id' , '=' , 'roles.id')
                    ->where('quantrivien.ma_quan_tri', Auth::guard('quantriviens')->id())
                    ->select('roles.*')
                    ->get()->pluck('id')->toArray();
        // Lấy tất cả quyền của user
        $listUserRolePermission = DB::table('roles')
        ->join('role_permission', 'roles.id', '=' , 'role_permission.role_id')
        ->join('permissions', 'role_permission.permission_id' , '=' , 'permissions.id')
        ->whereIn('roles.id', $listUserRole)
        ->select('permissions.*')
        ->get()->pluck('id')->unique();
        
        // Lấy ra ma chức năng để check phân quyền
        $check = Permission::where('name' , $permission)->value('id');
        if( $listUserRolePermission->contains($check)){
            return $next($request);
        }
        return redirect()->route('loi');
    }
}
