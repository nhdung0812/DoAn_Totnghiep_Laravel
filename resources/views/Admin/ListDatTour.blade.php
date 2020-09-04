@extends('Admin.Layout')
@section('css')

@endsection
@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <!-- Table Sections (.js-table-sections class is initialized in Helpers.tableToolsSections()) -->
        <h2 class="content-heading">DANH SÁCH ĐẶT TOUR</h2>
        <div class="block">
            {{-- <div class="block-header block-header-default">
                <a href="{{route('Quantri.box-trash-dia-diem')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
                    <i class="fa fa-trash-o mr-5"></i>Thùng rác
                </a>
            </div> --}}
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <tr class="post">
                                <th class="text-center">STT</th>
                                <th class="d-none d-sm-table-cell">Tên</th>
                                <th class="d-none d-sm-table-cell">Đặt lúc</th>
                                <th class="d-none d-sm-table-cell">Thông tin</th>
                                <th class="d-none d-sm-table-cell">Ghi Chú</th>
                                <th class="d-none d-sm-table-cell" style="width:23%;">Thông tin đặt</th>
                                <th class="d-none d-sm-table-cell">Trạng thái</th>
                                <th class="d-none d-sm-table-cell" style="width:13%;">Chức Năng</th>
                            </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($danh_sach_dat as $item)
                        <tr>
                            <td class="d-none d-sm-table-cell">{{ $stt += 1}}</td>
                            <td class="d-none d-sm-table-cell">
                                <div>{{ $item->ten_kh }}</div>
                                
                            </td>
                          
                            <td class="d-none d-sm-table-cell">{{ $item->ngay_dat}}</td>
                            <td class="d-none d-sm-table-cell">
                                <div><b>Gmail</b>:{{ $item->gamil }}</div>
                                <div><b>SĐT</b>:{{ $item->dien_thoai }}</div>
                                <div><b>Giới tính</b>:{{ $item->gioi_tinh }}</div>
                                <div><b>CMND</b>:{{ $item->cmnd }}</div>
                            </td>
                            <td class="d-none d-sm-table-cell"></td>
                            <td class=" ">
                                <div><b>Tên Tour</b>: <p style="word-break: break-word">{{ $item->ten_tour }}</p></div>
                                <div><b>Giá</b>:{{ $item->gia_tour }}</div>
                                <div>
                                    <span><b> Người lớn</b> : {{ $item->so_cho_nguoi_lon }}</span>|
                                    <span><b>Trẻ em</b>: {{ $item->so_cho_tre_em }}</span>|
                                    <span><b>Trẻ nhỏ</b>: {{ $item->so_cho_tre_con }} </span>|
                                    <span><b>Sơ sinh</b>: {{ $item->so_cho_so_sinh }}</span>
                                </div>
                                <div><b>Ngày đi</b> : {{ $item->so_cho_nguoi_lon }}</div>
                            </td>
                           <td>
                                @if ($item->Phuong_thuc_thanh_toan == 0)
                                    <div><b>Phương thức thanh toán: </b><span class="text-center badge badge-success">Trực Tiếp</span></div>
                                    <br>
                                @else 
                                    <div><b>Phương thức thanh toán: </b><span class="text-center badge badge-success">Online</span></div>
                                    <br>
                                @endif
                                @if ($item->trang_thai_thanh_toan == 0)
                                    <div><b>Thanh Toán: </b><span class="text-center badge badge-danger"> Chưa xử lý</span></div>
                                    <br>
                                @else 
                                <div><b>Thanh Toán: </b><span class="text-center badge badge-success">Đã thanh toán</span></div>
                                    <br>
                                @endif
                                    
                           </td>
                            <td class="d-none d-sm-table-cell" style="$item->gia_tour">
                                <a href="{{ route('Quantri.dsHanhKhach',$item->ma_khach_hang ) }}" class="btn btn-warning min-width-90 " data-toggle="tooltip" title=" Xem Hàng khách đi cùng">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <!-- Generated markup by the plugin -->
                                <div class="tooltip bs-tooltip-top" role="tooltip">
                                    <div class="arrow"></div>
                                    <div class="tooltip-inner">
                                       Xem Hàng khách đi cùng
                                    </div>
                                </div>
                                <a href="#" title=""  class="delect-diadiem btn btn-danger  min-width-10 " data-toggle="tooltip1" title="Xoá Đơn ">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <div class="tooltip bs-tooltip-top" role="tooltip1">
                                    <div class="arrow"></div>
                                    <div class="tooltip-inner">
                                       Xoá Đơn 
                                    </div>
                                </div>
                                <a href="{{ route('Quantri.hoadon', $item->ma_dat_tour) }}" title=""  class="delect-diadiem btn btn-success  min-width-10 ">
                                    <i class="fa fa-file-text-o"></i>
                                </a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Table Sections --> 
</main>
      
        <script src="{{ asset('Admin/js/codebase.core.min.js')}}"></script>
        <script src="{{ asset('Admin/js/codebase.app.min.js')}}"></script>
        
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
@section('js')


<!-- Page JS Helpers (Table Tools helper) -->
<script>jQuery(function(){ Codebase.helpers('table-tools'); });</script>
@endsection
