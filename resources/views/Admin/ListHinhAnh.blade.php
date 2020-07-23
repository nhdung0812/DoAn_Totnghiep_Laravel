@extends('Admin.Layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
@endsection
@section('content')
       <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                     <h2 class="content-heading">
                            <i class="fa fa-word mr-2"></i>Danh sách địa điểm
                     </h2>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <a href="{{route('Quantri.box-trash-dia-diem')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
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
                                            <th class="d-none d-sm-table-cell">Tên địa điểm</th>
                                            <th class="d-none d-sm-table-cell">Thông tin</th>
                                            <th class="d-none d-sm-table-cell">Chức Năng</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($hinhanh as $ha)
                                    <tr>
                                        <td class="d-none d-sm-table-cell">{{$ha->ma_hinh_anh}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            Địa Điểm <span class="badge badge-success">{{$ha->ma_dia_diem}}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <img src="{{ asset('Home/img/diadiem') }}/{{ $ha->Hinh_anh_1 }}" class="img-thumbnail" alt="">
                                        </td>
                                        <td class="" style="">
                                            <a href=""  type="submit" class="edit_diadiem btn btn-primary min-width-90">
                                                <i class="fa fa-wrench"></i> Sửa
                                            </a>
                                            <a href="" title="" type="submit" class="delect-diadiem btn btn-danger  min-width-10 ">
                                                <i class="fa fa-trash"></i> Xoá
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="block">
                        <div class="block-header block-header-default">

                        </div>
                        <div class="block-content">
                            <form class="js-validation-material" enctype="multipart/form-data" role="form" id="Creatr_Product_Tour" name="Creatr_Product_Tour" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-12" for="example-select">Địa Điểm</label>
                                    <div class="col-md-12">
                                        <select class="form-control" id="ma_dia_diem" name="ma_dia_diem">
                                            <option value="0">Chọn địa điểm</option>
                                            @foreach ($diadiem as $item)     
                                                <option value="{{ $item->ma_dia_diem }}">{{ $item->ten_dia_diem }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="">Hình ảnh địa điểm <span class="text-danger">(*)</span></label>
                                        <div class="dropzone dz-clickable" id="my-dropzone">
                                            <div class="dz-default dz-message" data-dz-message="">
                                              <span>Drop files here to upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12 text-right">
                                        <button type="submit" class=" btn btn-success mr-5 p-3 mb-5" id="them_hinh_dia_diem">
                                            <i class="fa fa-plus mr-5"></i>Thêm
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
       </main>
       @include('Admin/model.model_add_hinh');
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('Admin/dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
    //<script type="text/javascript" src="{{ asset ('Admin/js/Ajax_HinhDiaDiem.js')}}"></script>
   
@endsection
