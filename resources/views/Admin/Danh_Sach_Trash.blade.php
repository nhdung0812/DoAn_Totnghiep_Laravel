@extends('Admin.Layout')
@section('content')
       <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                     <h2 class="content-heading">
                            <i class="fa fa-trash mr-2"></i>THÙNG RÁC
                     </h2>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <a href="{{route('Quantri.danh_sach')}}" type="button" class="create-modal btn btn-success mr-5 mb-5">
                                Danh sách tài khoản
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
                                        <th>Tên hiển thị</th>
                                        <th class="d-none d-sm-table-cell">Tên đăng nhập</th>
                                        <th class="d-none d-sm-table-cell">Gmail</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Chức vụ</th>
                                        <th class="d-none d-sm-table-cell">Chức Năng</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($trash as $tr)
                                    <tr>

                                        <td class="text-center">{{$tr->ma_quan_tri}}</td>
                                        <td class="font-w600">{{$tr->ten_quan_tri}}</td>
                                        <td class="d-none d-sm-table-cell">{{$tr->ten_dang_nhap}}</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">{{$tr->gmail}}</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                          @if($tr->status == 1)
                                                 <span class="badge badge-success">Admin</span>
                                          @else
                                                 <span class="badge badge-danger">Nhân Viên</span>
                                          @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('Quantri.phuc_hoi',$tr->ma_quan_tri)}}" class="btn btn-primary min-width-90">
                                                <i class="fa fa-wrench"></i> Phục hồi
                                            </a>
                                            <a href="{{route('Quantri.xoa_vinh_vien',$tr->ma_quan_tri)}}}}" title="" type="submit" class="delect_loai btn btn-danger  min-width-90 ">
                                                <i class="fa fa-trash"></i> Xoá Vĩnh Viễn
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
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <script>

              $(document).on('click','.delect_loai', function(event) {
                    event.preventDefault();
                    var me = $(this);
                    var title = me.attr('title');
                    var url1 = me.attr('href');
                    swal({
                        title: "Bạn có chắc chắn muốn xoá không",
                        text: "sẽ bị xoá vĩnh viễn",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((result) => {
                        if (result) {
                            $.ajax({
                                url : url1,
                                type: 'GET',
                                data: {

                                    '_token' : $('input[name=_token]').val(),
                                },
                                success: function(response){
                                    swal({
                                        title: "Xoá thành công",
                                        text: "",
                                        icon: "success",
                                    });
                                    location.reload();
                                },
                                error: function(xhr){
                                    swal({
                                        title: "Xoá Thất Bại",
                                        text: "",
                                        icon: "error",
                                    });
                                }
                            });
                        }
                        else {
                            swal("Xoá Không Thành Công");
                        }
                    });
                });
       </script>
@endsection
