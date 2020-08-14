@extends('Admin.Layout')
@section('content')
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content">
        
                <!-- Dynamic Table Full Pagination -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Danh Sách Hàng Khách</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                            <thead>
                                <tr>
                                    <th class="text-center">Tên Khách Hàng</th>
                                    <th class="text-center">Tên Hành Khách</th>
                                    <th>Tuổi</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Giới tính</th>
                                    <th class="text-center" style="width: 15%;">Ngày Sinh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($danh_hang_khach); $i++)
                                <tr>
                                    <td class="text-center">{{ $danh_hang_khach[0]->ten_kh }}</td>
                                    <td class="font-w600">{{ $danh_hang_khach[$i]->ten_than_nha }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $danh_hang_khach[$i]->tuoi }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $danh_hang_khach[$i]->gioi_tinh }}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                       {{ $danh_hang_khach[$i]->ngay_sinh }}
                                    </td>
                                   
                                </tr>
                                
                                @endfor
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table Full Pagination -->

            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-sm clearfix">
                <div class="float-right">
                    Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="float-left">
                    <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.4</a> &copy; <span class="js-year-copy"></span>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
@endsection