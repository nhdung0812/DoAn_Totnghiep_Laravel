@extends('Admin.Layout')
@section('content')
<main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">Quyền Truy Cập</h2>

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <a href="{{ route('Quantri.them_chuc_vu') }}" class="create-modal_KhuVuc btn btn-success mr-5 mb-5">
                                <i class="fa fa-plus mr-5"></i>Thêm Phân Quyền
                            </a>
                            
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center">stt</th>
                                        <th>Loại Quyền</th>
                                        <th>Tên Hiển Thị</th>
                                        <th class="d-none d-sm-table-cell">Quyền Truy Cập</th>
                                        <th class="d-none d-sm-table-cell" style="width: 20%;">Chức vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($taikhoan as $item)
                                        
                                        <tr>
                                            <td class="text-center">{{ $item->id }}</td>
                                            <td class="d-none d-sm-table-cell">{{ $item->name }}</td>
                                            <td class="d-none d-sm-table-cell">{{ $item->display_name }}</td>
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
                                                <a href="{{route('Quantri.xoa_role', $item->id) }}" title="" type="submit" class="delete-confirm btn btn-danger  min-width-10 ">
                                                    Xoá
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                   
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-12 col-md-5"></div>
                                <div class="col-sm-12 col-md-7">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
       </main>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            $('.delete-confirm').on('click', function (event) {
                event.preventDefault();
                const url = $(this).attr('href');
                swal({
                    title: 'Bạn có muốn xoá Tour ?',
                    text: '',
                    icon: 'warning',
                    buttons: ["Thoát", "Xoá"],
                }).then(function(value) {
                    if (value) {
                        window.location.href = url;
                    }
                });
            });
           </script>
@endsection
