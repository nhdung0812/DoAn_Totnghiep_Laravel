@extends('Admin.Layout')
@section('content')
       <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                     <h2 class="content-heading">
                            <i class="fa fa-word mr-2"></i>THÔNG TIN LỊCH TRÌNH
                     </h2>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <a type="button" href="{{ route('Quantri.them_lich_trinh') }}" class=" btn btn-success mr-5 mb-5">
                                <i class="fa fa-plus mr-5"></i>Thêm lịch trình
                            </a>
                            <a href="{{route('Quantri.box-trash')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
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

                                            <th class="d-none d-sm-table-cell">Tên lịch trình</th>
                                            <th class="d-none d-sm-table-cell">Nội dung</th>
                                            <th class="d-none d-sm-table-cell">Mã tour</th>
                                            <th class="d-none d-sm-table-cell">Chức Năng</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($lichtrinh as $lt)
                                    <tr>
                                        <td class="d-none d-sm-table-cell">{{$lt->ma_lich_trinh}}</td>
                                        <td class="d-none d-sm-table-cell">{{$lt->tieu_de}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">{{$lt->noi_dung}}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">{{$lt->ma_tour}}</span>
                                        </td>

                                        <td class="" style="">
                                            <a href="{{ route('Quantri.sua_loai',$lt->ma_lich_trinh) }}" class="edit_tour btn btn-primary min-width-90">
                                                <i class="fa fa-wrench"></i> Sửa
                                            </a>
                                            <a href="{{ route('Quantri.trash_tour',$lt->ma_lich_trinh) }}" title="" type="submit" class="delect_tour btn btn-danger  min-width-10 ">
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
       //@include('Admin/model.model_add');
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset ('Admin/js/Ajax_ProductTour.js')}}"></script>
@endsection
