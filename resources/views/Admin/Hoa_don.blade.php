@extends('Admin.Layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
@endsection
@section('content')
<main id="main-container">
       <!-- Page Content -->
       <div class="content">
           <!-- Invoice -->
           <h2 class="content-heading d-print-none">
               <button type="button" class="btn btn-sm btn-rounded btn-success float-right">New Invoice</button>
               Hoá Đơn
           </h2>
           <div class="block">
               <div class="block-header block-header-default">
                   <h3 class="block-title">#HD{{ $hoadon[0]->ma_dat_tour }}</h3>
                   <div class="block-options">
                       <!-- Print Page functionality is initialized in Helpers.print() -->
                       <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                           <i class="si si-printer"></i> In Hoá Đơn
                       </button>
                       <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                       <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                           <i class="si si-refresh"></i>
                       </button>
                   </div>
               </div>
               <div class="block-content">
                   <!-- Invoice Info -->
                   <div class="row my-20">
                       <!-- Company Info -->
                       <div class="col-6">
                            <div class="content-header-item mb-3">
                                <a class="link-effect font-w700">
                                    <img src="http://localhost:8000/Admin/image/avatar/favi.png" alt="" width="45px" height="43px">
                                    <span class="font-size-xl text-dual-primary-dark pt-5" style="color: #0d9cbf !important">TOUR NÈ</span>
                                </a>
                            </div>
                            <br>
                           <address>
                            16 Phạm Đôn,  <br>
                            Phường 10,<br>
                            Quận 5<br>
                            nhd0812@gmail.com <br>
                            0794.859.859
                           </address>
                       </div>
                       <!-- END Company Info -->

                       <!-- Client Info -->
                       <div class="col-6 text-right">
                           <p class="h3">Khách Hành</p>
                           <span><b>Tên:</b> {{ $hoadon[0]->ten_kh }}</span>
                           <address>
                               <b>Địa chỉ: </b>
                               {{ $hoadon[0]->dia_chi }}
                           </address>
                           <span><b>SĐT:</b> {{ $hoadon[0]->dien_thoai }}</span><br>
                           <span><b>Gmail:</b> {{ $hoadon[0]->gamil }}</span>
                       </div>
                       <!-- END Client Info -->
                   </div>
                   <!-- END Invoice Info -->

                   <!-- Table -->
                   <div class="table-responsive push">
                       <table class="table table-bordered table-hover">
                           <thead>
                               <tr>
                                   <th class="text-center" style="width: 60px;"></th>
                                   <th>TOUR</th>
                                   <th class="text-center" style="width: 90px;">Số lượng</th>
                                   <th class="text-right" style="width: 120px;">Đơn vị</th>
                                   <th class="text-right" style="width: 120px;">Số Tiền</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td class="text-center">1</td>
                                   <td>
                                       <p class=" mb-5"> <b>Tên Tour:</b> {{ $hoadon[0]->ten_tour }}</p>
                                       <span> <b>Ngày Đặt:</b> {{ $hoadon[0]->ngay_dat }}</span>
                                   </td>
                                   <td class="text-center">
                                       <span class="badge badge-pill badge-primary">1</span>
                                   </td>
                                   <td class="text-right">{{ number_format($hoadon[0]->gia_tour ,0,'.','.')." đ" }}</td>
                                   <td class="text-right">{{ number_format($hoadon[0]->gia_tour ,0,'.','.')." đ" }}</td>
                               </tr>
                               <tr>
                                   <td class="text-center">2</td>
                                   <td>
                                       <p class="font-w600 mb-5">Online Store Design &amp; Development</p>
                                       <div class="text-muted">Design/Development for all popular modern browsers</div>
                                   </td>
                                   <td class="text-center">
                                       <span class="badge badge-pill badge-primary">1</span>
                                   </td>
                                   <td class="text-right">$20.000,00</td>
                                   <td class="text-right">$20.000,00</td>
                               </tr>
                               <tr>
                                   <td class="text-center">3</td>
                                   <td>
                                       <p class="font-w600 mb-5">App Design</p>
                                       <div class="text-muted">Promotional mobile application</div>
                                   </td>
                                   <td class="text-center">
                                       <span class="badge badge-pill badge-primary">1</span>
                                   </td>
                                   <td class="text-right">$3.200,00</td>
                                   <td class="text-right">$3.200,00</td>
                               </tr>
                               <tr>
                                   <td colspan="4" class="font-w600 text-right">Tổng Phụ</td>
                                   <td class="text-right">$25.000,00</td>
                               </tr>
                               <tr>
                                   <td colspan="4" class="font-w600 text-right">Thuế VAT</td>
                                   <td class="text-right">20%</td>
                               </tr>
                               <tr>
                                   <td colspan="4" class="font-w600 text-right">Số tiền thuế</td>
                                   <td class="text-right">$5.000,00</td>
                               </tr>
                               <tr class="table-warning">
                                   <td colspan="4" class="font-w700 text-uppercase text-right">Tổng tiền</td>
                                   <td class="font-w700 text-right">$30.000,00</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   <!-- END Table -->

                   <!-- Footer -->
                   <p class="text-muted text-center">Cảm ơn bạn rất nhiều vì đặt tour du lịch bên chúng tôi. Chúng tôi mong được dẫn và hướng đẫn bạn một lần nữa!</p>
                   <!-- END Footer -->
               </div>
           </div>
           <!-- END Invoice -->
       </div>
       <!-- END Page Content -->
   </main>

@endsection