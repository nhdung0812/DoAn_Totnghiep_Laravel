@extends('Admin.Layout')
@section('content')
<main id="main-container">
              <!-- Page Content -->

              <div class="content">
              <h2 class="content-heading">Bảng điều khiển <small>Tour Nè    </small></h2>
              <div class="row invisible" data-toggle="appear">
                     <!-- Row #1 -->
                     <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                   <div class="float-right mt-15 d-none d-sm-block">
                                   <i class="fa fa-globe fa-3x text-primary-light"></i>
                                   </div>
                                   <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="{{ $so_tour }}">0</div>
                                   <div class="font-size-sm font-w600 text-uppercase text-muted">Số lượng tour</div>
                            </div>
                     </a>
                     </div>
                     <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                   <div class="float-right mt-15 d-none d-sm-block">
                                   <i class="si si-wallet fa-3x text-earth-light"></i>
                                   </div>
                                   <div class="font-size-h3 font-w600 text-earth"><span data-toggle="countTo" data-speed="1000" data-to="780">0</span> VNĐ</div>
                                   <div class="font-size-sm font-w600 text-uppercase text-muted">Doanh thu</div>
                            </div>
                     </a>
                     </div>
                     <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                   <div class="float-right mt-15 d-none d-sm-block">
                                   <i class="fa fa-cart-arrow-down fa-3x text-elegance-light"></i>
                                   </div>
                                   <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                                   <div class="font-size-sm font-w600 text-uppercase text-muted">Đơn đặt tour</div>
                            </div>
                     </a>
                     </div>
                     <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                   <div class="float-right mt-15 d-none d-sm-block">
                                   <i class="si si-users fa-3x text-pulse"></i>
                                   </div>
                                   <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                   <div class="font-size-sm font-w600 text-uppercase text-muted">Lượt truy cập</div>
                            </div>
                     </a>
                     </div>
                     <!-- END Row #1 -->
              </div>
              <div class="row invisible" data-toggle="appear">
                     <!-- Row #2 -->
                     <div class="col-md-6">
                     <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                   <h3 class="block-title">
                                   Sales <small>This week</small>
                                   </h3>
                                   <div class="block-options">
                                   <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                          <i class="si si-refresh"></i>
                                   </button>
                                   <button type="button" class="btn-block-option">
                                          <i class="si si-wrench"></i>
                                   </button>
                                   </div>
                            </div>
                            <div class="block-content block-content-full">
                                   <div class="pull-all pt-50">
                                   <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                   <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                   <canvas class="js-chartjs-dashboard-lines"></canvas>
                                   </div>
                            </div>
                            <div class="block-content">
                                   <div class="row items-push text-center">
                                   <div class="col-6 col-sm-4">
                                          <div class="font-w600 text-success">
                                          <i class="fa fa-caret-up"></i> +16%
                                          </div>
                                          <div class="font-size-h4 font-w600">720</div>
                                          <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                   </div>
                                   <div class="col-6 col-sm-4">
                                          <div class="font-w600 text-danger">
                                          <i class="fa fa-caret-down"></i> -3%
                                          </div>
                                          <div class="font-size-h4 font-w600">160</div>
                                          <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                   </div>
                                   <div class="col-12 col-sm-4">
                                          <div class="font-w600 text-success">
                                          <i class="fa fa-caret-up"></i> +9%
                                          </div>
                                          <div class="font-size-h4 font-w600">24.3</div>
                                          <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                                   </div>
                                   </div>
                            </div>
                     </div>
                     </div>
                     <div class="col-md-6">
                     <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                   <h3 class="block-title">
                                   Earnings <small>This week</small>
                                   </h3>
                                   <div class="block-options">
                                   <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                          <i class="si si-refresh"></i>
                                   </button>
                                   <button type="button" class="btn-block-option">
                                          <i class="si si-wrench"></i>
                                   </button>
                                   </div>
                            </div>
                            <div class="block-content block-content-full">
                                   <div class="pull-all pt-50">
                                   <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                   <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                   <canvas class="js-chartjs-dashboard-lines2"></canvas>
                                   </div>
                            </div>
                            <div class="block-content bg-white">
                                   <div class="row items-push text-center">
                                   <div class="col-6 col-sm-4">
                                          <div class="font-w600 text-success">
                                          <i class="fa fa-caret-up"></i> +4%
                                          </div>
                                          <div class="font-size-h4 font-w600">$ 6,540</div>
                                          <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                   </div>
                                   <div class="col-6 col-sm-4">
                                          <div class="font-w600 text-danger">
                                          <i class="fa fa-caret-down"></i> -7%
                                          </div>
                                          <div class="font-size-h4 font-w600">$ 1,525</div>
                                          <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                   </div>
                                   <div class="col-12 col-sm-4">
                                          <div class="font-w600 text-success">
                                          <i class="fa fa-caret-up"></i> +35%
                                          </div>
                                          <div class="font-size-h4 font-w600">$ 9,352</div>
                                          <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                                   </div>
                                   </div>
                            </div>
                     </div>
                     </div>
                     <!-- END Row #2 -->
              </div>
              <div class="row invisible" data-toggle="appear">
                     <!-- Row #3 -->
                     <div class="col-md-12">
                     <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                   <h3 class="block-title">Đơn đặt hàng</h3>
                                   <div class="block-options">
                                   <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                          <i class="si si-refresh"></i>
                                   </button>
                                   </div>
                            </div>
                            <div class="block-content">
                                   <table class="table table-borderless table-striped">
                                   <thead>
                                          <tr>
                                          <th style="width: 100px;">Mã đơn</th>
                                          <th>Tên tour </th>
                                          <th class="d-none d-sm-table-cell">Ngày đặt</th>
                                          <th class="d-none d-sm-table-cell">Số lượng chỗ</th>
                                          <th class="d-none d-sm-table-cell">Tổng tiền</th>
                                          <th class="d-none d-sm-table-cell">Trạng thái thanh toán</th>
                                          <th class="d-none d-sm-table-cell">Chức năng</th>
                                          </tr>
                                   </thead>
                                   <tbody>
                                          <tr>
                                            <td>
                                                <a class="font-w600" href="be_pages_ecom_order.html">ORD.1851</a>
                                            </td>
                                            <td>
                                                    <span class="badge badge-info">Processing</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                            </td>
                                            <td class="">
                                                <span class="text-black">$443</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Chưa thanh toán</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Chưa xử lý</span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <a class="font-w600" href="be_pages_ecom_order.html">ORD.1851</a>
                                            </td>
                                            <td>
                                                    <span class="badge badge-info">Processing</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                            </td>
                                            <td class="">
                                                <span class="text-black">$443</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Chưa thanh toán</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">Đang xử lý</span>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <a class="font-w600" href="be_pages_ecom_order.html">ORD.1851</a>
                                            </td>
                                            <td>
                                                    <span class="badge badge-info">Processing</span>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                            </td>
                                            <td class="">
                                                <span class="text-black">$443</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Đã thanh toán</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Đã xử lý</span>
                                            </td>
                                          </tr>
                                   </tbody>
                                   </table>
                            </div>
                     </div>
                     </div>
                        <!-- END Row #3 -->
              </div>
       </div>
              <!-- END Page Content -->
</main>
@endsection
