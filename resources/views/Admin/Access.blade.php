@extends('Admin.Layout')
@section('content')
<main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">PHÂN QUYỀN</h2>

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Tên hiển thị</th>
                                        <th class="d-none d-sm-table-cell">Tên đăng nhập</th>
                                        <th class="d-none d-sm-table-cell" style="width: 20%;">Chức vụ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($taiKhoan as $tk)
                                    <tr>
                                        <td class="text-center">{{ $tk->id }}</td>
                                        <td class="font-w600">{{ $tk->ho_ten}}</td>
                                        <td class="d-none d-sm-table-cell">{{ $tk->ten_dang_nhap}}</td>
                                        <td class="d-none d-sm-table-cell">
                                          <div class="col-6" style="max-width:100%">
                                            @if($tk->status == 1)
                                                <label class="css-control css-control-success css-switch">
                                                    <input type="checkbox" id="checkbox" class="css-control-input" checked="1">
                                                    <span class="css-control-indicator"></span> Admin
                                                </label>
                                            @else
                                                <label class="css-control css-control-success css-switch">
                                                    <input type="checkbox"  class="css-control-input">
                                                    <span class="css-control-indicator"></span> Nhân viên
                                                </label>
                                            @endif
                                          </div>
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
