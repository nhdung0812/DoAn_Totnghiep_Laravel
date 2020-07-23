@extends('Admin.Layout')
@section('content')
       <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                     <h2 class="content-heading">
                            <i class="fa fa-word mr-2"></i>Danh sách địa điểm đã xoá
                     </h2>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <a href="{{ route('Quantri.Danh-sach-dia-diem') }}" type="button" class="show-trash btn btn-success mr-5 mb-5">
                                <i class="fa fa-arrow-left mr-5"></i>Quay Lại
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
                                            <th class="d-none d-sm-table-cell">Khu Vực</th>
                                            <th class="d-none d-sm-table-cell">Thông tin</th>
                                            <th class="d-none d-sm-table-cell">Chức Năng</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($trash_diadiem as $dd)
                                    <tr>
                                        <td class="d-none d-sm-table-cell">{{$dd->ma_dia_diem}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            Địa Điểm <span class="badge badge-success">{{$dd->ten_dia_diem}}</span>
                                        </td>
                                        @foreach ($khuvuc as $item)
                                            @if ($item->ma_mien == $dd->ma_mien)
                                                <td class="d-none d-sm-table-cell">{{$item->ten_mien}}</td>
                                            @endif
                                        @endforeach
                                        <td class="d-none d-sm-table-cell">{{$dd->thongtin	}}</td>
                                        <td class="" style="">
                                            <a href="{{ route('Quantri.phuc_hoi_dia_diem',$dd->ma_dia_diem) }}"  type="submit" class=" btn btn-primary min-width-90">
                                                <i class="fa fa-wrench"></i> Phục hồi
                                            </a>
                                            <a href="{{ route('Quantri.xoa_vinh_vien_dia_diem',$dd->ma_dia_diem) }}" title="" type="submit" class="delect-diadiem btn btn-danger  min-width-10 ">
                                                <i class="fa fa-trash"></i> Xoá vĩnh viễn
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
       @include('Admin/model.model_add_diadiem');
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset ('Admin/js/Ajax_DiaDiem.js')}}"></script>
@endsection
