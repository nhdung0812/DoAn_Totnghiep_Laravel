<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TaiKhoan;
use App\Permission;
class ChucVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $taikhoan = DB::table('roles')
        //                 ->join('role_permission', 'role_permission.role_id', '=', 'roles.id')                      
        //                 ->select('roles.id', 'roles.name', 'roles.display_name')
        //                 ->groupBy('roles.id')
        //                 ->get();
        $taikhoan = Role::all();
        $role = DB::table('role_permission')                   
                ->select('*')
                ->get();
        $phanquyen = DB::table('permissions')                   
                        ->select('*')
                        ->get();
        return view('Admin.Access',compact('taikhoan','phanquyen','role')) ;
    }

    // Load permissions
    public function load_role(Request $request)
    {
        $role = Role::all();
        return response()->json(['data_pq'=> $role]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = Permission::all();
        return view('Admin.form_add_quyen', compact('permissions'));
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
        $role = new Role();
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->save();

        // Thêm dữ kiệu role_permission
        $role->permission()->attach($request->quyentruycap);

        return redirect()->route('Quantri.chuc_vu');
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
        $permissions = Permission::all();
        $role = Role::findOrFail($id);
        $getAllPermissionsofRole = DB::table('role_permission')->where('role_id', $id)->pluck('permission_id');
        return view('Admin.form_edit_quyen', compact('permissions', 'role','getAllPermissionsofRole'));
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
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->save();

        DB::table('role_permission')->where('role_id', $id)->delete();
        $roleedit = Role::findOrFail($id);
        $roleedit->permission()->attach($request->quyentruycap);


        return redirect()->route('Quantri.chuc_vu');
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
         $role = Role::find($id);
         $role->delete($id);
         $role->permission()->detach();
         return redirect()->route('Quantri.chuc_vu');
    }
}
