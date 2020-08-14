@extends('Admin.Layout')
@section('content')
<main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">Quyền Truy Cập</h2>

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center">stt</th>
                                        <th>Loại Quyền</th>
                                        <th class="d-none d-sm-table-cell">Quyền Truy Cập</th>
                                        <th class="d-none d-sm-table-cell" style="width: 20%;">Chức vụ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{ $n = 0  }}
                                    @foreach ($taikhoan as $item)
                                        
                                        <tr>
                                            <td class="text-center">{{ $item->id }}</td>
                                            <td class="d-none d-sm-table-cell">{{ $item->name }}</td>
                                            <td class="font-w600">
                                                @foreach ($role as $roles)
                                                    @foreach ($phanquyen as $phanquyens)
                                                        @if ($phanquyens->id == $roles->permission_id && $item->id == $roles->role_id)
                                                            <span class="text-center badge badge-success">{{ $phanquyens->name }}</span>
                                                        @endif  
                                                    @endforeach 
                                                @endforeach
                                               
                                            </td>
                                            
                                            <td class="text-center">

                                                <a href="{{ route('Quantri.edit_chuc_vu',$item->id) }}" type="submit" class="edit btn btn-primary min-width-90">
                                                    <i class="fa fa-wrench"></i> Sửa
                                                </a>
                                                <a href="" type="submit" class="delect btn btn-danger  min-width-90 ">
                                                    <i class="fa fa-trash"></i> Xoá
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                   
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-12 col-md-5"></div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers pagination" style="justify-content:flex-end" id="DataTables_Table_1_paginate">
                                            <button type="button" class="btn btn-info min-width-100">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
       </main>
@endsection
