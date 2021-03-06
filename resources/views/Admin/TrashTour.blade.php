@extends('Admin.Layout')
@section('css')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <!-- Table Sections (.js-table-sections class is initialized in Helpers.tableToolsSections()) -->
        <h2 class="content-heading">DANH SÁCH CHƯƠNG TRÌNH TOUR</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <div class="block-header block-header-default">
                        <a href="{{route('Quantri.danh_sach_chuong_trinh')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
                            <i class="fa fa-trash-o mr-5"></i>Quay lại 
                        </a>
                    </div>
                </h3>
            </div>
            <div class="text-success">
            </div>
            <div class="block-content">
                {{-- HIỂN THỊ DANH SÁCH TOUR --}}
                <table class="js-table-sections table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 30px;"></th>
                            <th style="width: 260px;">Mã Tour</th>
                            <th>Tên Tour</th>
                            <th style="width: 10%;">Trạng thái</th>
                            <th class="d-none d-sm-table-cell" style="width: 20%;">Giá</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    @foreach ($trash_tour as $item)
                    {{-- Tour --}}
                    <tbody class="js-table-sections-header">
                        <tr>
                            <td class="text-center">
                                <i class="fa fa-angle-right"></i>
                            </td>
                            <td class="">
                                <span>{{ $item->ma_tour }}</span>
                            </td>
                            <td class="font-w600">{{ $item->ten_tour }}</td>
                            <td>
                                <span class="badge badge-success">Hoạt động</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <em class="text-muted">{{ $item->gia_tour }}</em>
                            </td>
                            <td>
                                <a href="{{ route('Quantri.xoa_vinh_vien_tour',$item->ma_tour) }}" title="" type="submit" class="delete-confirm btn btn-success  min-width-10 ">
                                    Xoá
                                </a>
                                <a href="{{ route('Quantri.phuc_hoi_tour',$item->ma_tour) }}" class="edit_tour btn btn-primary min-width-90">
                                    <i class="fa fa-wrench"></i> Phục hồi
                                </a>
                                
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center">Số chỗ:</td>
                            <td class="font-w600 text-success">{{ $item->so_cho }} chỗ</td>
                            <td class="font-size-sm text-bold">Khuyến Mãi</td>
                            <td class="d-none d-sm-table-cell text-success">
                                {{ $item->khuyen_mai }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center">Ngày khởi hành</td>
                            <td class="font-w600 text-success">{{ $item->ngay_khoi_hanh }}</td>
                            <td class="font-size-sm">Ngày kết thúc</td>
                            <td class="d-none d-sm-table-cell text-success">
                               {{ $item->ngay_ket_thuc }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center">Số ngày</td>
                            <td class="font-w600 text-success">{{ $item->so_ngay }}ngày</td>
                            <td class="font-size-sm">Số đêm</td>
                            <td class="d-none d-sm-table-cell text-success">
                                {{ $item->so_dem }} đêm
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center">Nội dung</td>
                            <td class="font-w600 text-success" style="width:29%">{{ $item->noi_dung }}</td>
                            <td class="">Hình ảnh</td>
                            <td><img src="{{ asset('Home/img/tour/')}}/{{ $item->hinh_anh }}" class="img-thumbnail" alt=""></td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center">Loại Tour</td>
                            <td class="text-success">{{ $item->ma_loai_tour }}</td>
                            <td class="">Trọn gói</td>
                            <td class="text-success">{{ $item->chon_goi }}</td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center">Số chỗ đã đặt</td>
                            <td class="text-success">{{ $item->so_cho_da_dat }}</td>
                            <td class="">Ghi chú</td>
                            <td class="text-success">{{ $item->ghi_chu }}</td>
                        </tr>
                    </tbody>
                    {{-- End Tour --}}
                    @endforeach
                </table>
            </div>
        </div>
        <!-- END Table Sections -->
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
@section('js')
<script src="{{ asset('Admin/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{ asset('Admin/js/codebase.app.min.js')}}"></script>

<!-- Page JS Helpers (Table Tools helper) -->
<script>jQuery(function(){ Codebase.helpers('table-tools'); });</script>
@endsection
