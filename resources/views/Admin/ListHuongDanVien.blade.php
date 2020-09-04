@extends('Admin.Layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
@endsection
@section('content')
       <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                     <h2 class="content-heading">
                            <i class="fa fa-word mr-2"></i>Danh sách Hướng Dẫn Viên
                     </h2>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <tr class="post">
                                            <th class="text-center">ID</th>
                                            <th class="d-none d-sm-table-cell">Ho, Tên Đệm</th>
                                            <th class="d-none d-sm-table-cell">Tên hướng dẫn viên</th>
                                            <th class="d-none d-sm-table-cell">Ngày sinh</th>
                                            <th class="d-none d-sm-table-cell">Số điện thoại</th>
                                            <th class="d-none d-sm-table-cell">Trạng thái</th>
                                            <th class="d-none d-sm-table-cell">Chức Năng</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{--  @foreach ($listComment as $item)
                                    <tr>
                                        <td class="d-none d-sm-table-cell">{{$stt+=1}}</td>
                                        <td class="d-none d-sm-table-cell">{{$item->ma_tour}}</td>
                                        <td class="d-none d-sm-table-cell"> 
                                            {{$item->ten}}
                                        </td>
                                        <td class="d-none d-sm-table-cell">{{$item->noidung}}</td>
                                        @if ($item->trang_thai == 1)
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">Đã duyệt</span>
                                            </td>
                                        @elseif ($item->trang_thai == 0)
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Chưa duyệt</span>
                                            </td>
                                        @else 
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-danger">Đã huỷ</span>
                                            </td>
                                        @endif
                                        
                                        <td class="" style="">
                                            <a href="{{route('Quantri.ActiveComment',$item->id)}}"  type="submit" class="active btn btn-primary min-width-90">
                                                <i class="fa fa-wrench"></i> Duyệt
                                            </a>
                                            <a href="{{route('Quantri.DelectComment',$item->id)}}" title="" type="submit" class="huy btn btn-danger  min-width-10 ">
                                                <i class="fa fa-trash"></i> Huỷ Comment
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach  --}}
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
    <script>
        $('.active').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Bạn có muốn duyệt Comment Không?',
                text: '',
                icon: 'warning',
                buttons: ["Thoát", "Có"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>
    <script>
        $('.huy').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Bạn có muốn huỷ Comment Không?',
                text: '',
                icon: 'warning',
                buttons: ["Thoát", "Có"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>
@endsection
