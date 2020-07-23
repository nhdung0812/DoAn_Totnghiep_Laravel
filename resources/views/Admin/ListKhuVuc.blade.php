@extends('Admin.Layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
@endsection
@section('content')
       <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                     <h2 class="content-heading">
                            <i class="fa fa-word mr-2"></i>Danh sách khu vực
                     </h2>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <button type="button" class="create-modal_KhuVuc btn btn-success mr-5 mb-5">
                                <i class="fa fa-plus mr-5"></i>Thêm khu vục
                            </button>
                            <a href="{{route('Quantri.box-trash-khu-vuc')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
                                <i class="fa fa-trash-o mr-5"></i>Thùng rác
                            </a>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <tr class="post">
                                            <th class="text-center">ID</th>
                                            <th class="d-none d-sm-table-cell">Tên khu vực</th>
                                            <th class="d-none d-sm-table-cell">Ghi Chú</th>
                                            <th class="d-none d-sm-table-cell">Chức Năng</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($KhuVuc as $dd)
                                    <tr>
                                        <td class="d-none d-sm-table-cell">{{$dd->ma_mien}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            Tên Miền <span class="badge badge-success">{{$dd->ten_mien}}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">{{$dd->ghi_chu}}</td>
                                        <td class="" style="">
                                            <a href="{{ route('Quantri.sua_khu_vuc',$dd->ma_mien) }}"  type="submit" class="edit_khuvuc btn btn-primary min-width-90">
                                                <i class="fa fa-wrench"></i> Sửa
                                            </a>
                                            <a href="{{ route('Quantri.trash_khu_vuc',$dd->ma_mien) }}" title="" type="submit" class="delect-diadiem btn btn-danger  min-width-10 ">
                                                <i class="fa fa-trash"></i> Xoá
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
              </div>
       </main>
       @include('Admin/model.model_add_khuvuc');
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('Admin/dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset ('Admin/js/Ajax_KhuVuc.js')}}"></script>
   
@endsection
