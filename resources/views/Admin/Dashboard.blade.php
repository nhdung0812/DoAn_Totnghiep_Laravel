@extends('Admin.Layout')
@section('content')
<main id="main-container">
              <!-- Page Content -->

              <div class="content content_layout_full_width">
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
                                   <div class="font-size-h5 font-w600 text-earth"><span>{{ $dt }}</span> VNĐ</div>
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
                                   <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="{{ $so_dat_tour}}"></div>
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
                                   <canvas id="container" class="js-chartjs-dashboard-lines" data-order="{{ $orderYear }}"></canvas>
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
                     <div class="block-header block-header-default border-b">
                            <h3 class="block-title">
                            Thống kê <small>theo năm</small>
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
                     <div class="block block-rounded block-bordered">
                            <div class="pull-all pt-50">
                                   <canvas id="line-chart"></canvas>
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
                                          @foreach ($danh_sach_dat as $item)
                                                 <tr>
                                                        <td>
                                                        <a class="font-w600" href="be_pages_ecom_order.html">ORD.{{ $item->ma_dat_tour }}</a>
                                                        </td>
                                                        <td>
                                                               {{ $item->ten_tour }}
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                               {{ $item->ngay_dat }}
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                               {{ $item->ngay_dat }}
                                                        </td>
                                                        <td class="">
                                                        <span class="text-black">{{ number_format($item->thanh_tien,0,'.','.')."  VNĐ" }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                               @if ($item->Phuong_thuc_thanh_toan == 0)
                                                                      <span class="text-center badge badge-success">Trực Tiếp</span>
                                                                      
                                                               @else 
                                                                      <span class="text-center badge badge-success">Online</span>

                                                               @endif

                                                        </td>
                                                        <td>
                                                               <span class="badge badge-danger">Chưa xử lý</span>
                                                        </td>
                                                 </tr>
                                          @endforeach
                                          
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
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('Admin/dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
<script>
      

          window.onload = function () {
              var order = $('#container').data('order');
              var listOfValue = [];
              var listOfYear = [];
              order.forEach(function(element){
                     listOfYear.push(element.getYear);
                     listOfValue.push(element.value);
              });
              Chart.defaults.global.defaultFontColor = '#000000';
              Chart.defaults.global.defaultFontFamily = 'Arial';
              var lineChart = document.getElementById('line-chart');
              var myChart = new Chart(lineChart, {
                  type: 'bar',
                  data: {
                      labels: listOfYear,
                      datasets: [
                          {
                              label: 'Số Tour',
                              data: listOfValue,
                              backgroundColor: 'rgba(0, 128, 128, 0.3)',
                              borderColor: 'rgba(0, 128, 128, 0.7)',
                              borderWidth: 1,
                              backgroundColor: [
                                   'rgba(255, 99, 132, 0.2)',
                                   'rgba(54, 162, 235, 0.2)',
                                   'rgba(255, 206, 86, 0.2)',
                                   'rgba(75, 192, 192, 0.2)',
                                   'rgba(153, 102, 255, 0.2)',
                                   'rgba(255, 159, 64, 0.2)'
                                   ],
                                   borderColor: [
                                          'rgba(255, 99, 132, 1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)'
                                   ],
                                   borderWidth: 1,
                          },
                      ]
                  },
                  options: {
                     layout: {
                            padding: {
                              left: 5,
                              top: 5,
                              right: 10,
                              bottom: 5,
                            },
                          },
                     title: {
                            display: true,
                            text: 'Doanh Thu Theo Năm',
                            fontSize: 20,
                            lineHeight:1.2,      
                        },
                     scales: {
                         xAxes: [{
                                
                            display: true,
                             gridLines: {
                                 offsetGridLines: true,
                             },
                             stacked: true,
                             
                             scaleLabel: {
                                   display: true,
                                   labelString: 'Năm',
                                   fontSize: 18,
                                   padding:4,
                                 },
                            ticks: {
                                   fontSize: 15,
                            }
                            
                         }],
                         yAxes: [{
                            display: true,
                             gridLines: {
                                 offsetGridLines: true,
                             },
                             
                             scaleLabel: {
                                   display: true,
                                   labelString: 'Số Tour',
                                   fontSize: 18,
                                   padding: 25,
                                 },
                            ticks: {
                                   fontSize: 15,
                                   responsive:true,	
                            }
                         }]

                      }
              },
              });
          };
</script>
@endsection
