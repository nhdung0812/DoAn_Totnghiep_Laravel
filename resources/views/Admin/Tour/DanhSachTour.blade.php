@extends('Admin.Layout')
@section('css')

@endsection
@section('content')
<main id="main-container">
       <!-- Page Content -->

       <div class="content">
           <h2 class="content-heading">
               <i class="fa fa-word mr-2"></i>
           </h2>
           <div class="row gutters-tiny">
               <!-- In Orders -->
               <div class="col-md-6 col-xl-4">
                   <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                       <div class="block-content block-content-full block-sticky-options">
                           <div class="block-options">
                               <div class="block-options-item">
                                   <i class="fa fa-shopping-basket fa-2x text-info-light"></i>
                               </div>
                           </div>
                           <div class="py-20 text-center">
                               <div class="font-size-h2 font-w700 mb-0 text-info js-count-to-enabled" data-toggle="countTo" data-to="39">39</div>
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Địa Điểm</div>
                           </div>
                       </div>
                   </a>
               </div>
               <!-- END In Orders -->
   
               <!-- Stock -->
               <div class="col-md-6 col-xl-4">
                   <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                       <div class="block-content block-content-full block-sticky-options">
                           <div class="block-options">
                               <div class="block-options-item">
                                   <i class="fa fa-check fa-2x text-success-light"></i>
                               </div>
                           </div>
                           <div class="py-20 text-center">
                               <div class="font-size-h2 font-w700 mb-0 text-success js-count-to-enabled" data-toggle="countTo" data-to="85">85</div>
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Trong Nước</div>
                           </div>
                       </div>
                   </a>
               </div>
               <!-- END Stock -->
   
               <!-- Delete Product -->
               <div class="col-xl-4">
                   <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                       <div class="block-content block-content-full block-sticky-options">
                           <div class="block-options">
                               <div class="block-options-item">
                                   <i class="fa fa-archive fa-2x text-danger-light"></i>
                               </div>
                           </div>
                           <div class="py-20 text-center">
                               <div class="font-size-h2 font-w700 mb-0 text-danger">
                                   <i class="fa fa-times"></i>
                               </div>
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Ngoài nước </div>
                           </div>
                       </div>
                   </a>
               </div>
               <!-- END Delete Product -->
           </div>
            <h2 class="content-heading">
                   <i class="fa fa-word mr-2"></i>Danh sách địa điểm
            </h2>
           <!-- Dynamic Table Full -->
           <div class="block">
               <div class="block-header block-header-default">
                   <button type="button" class="create-modal_Diadiem btn btn-success mr-5 mb-5">
                       <i class="fa fa-plus mr-5"></i>Thêm địa điểm
                   </button>
                   <a href="{{route('Quantri.box-trash-dia-diem')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
                       <i class="fa fa-trash-o mr-5"></i>Thùng rác
                   </a>
               </div>
               <div class="block-content block-content-full">
                   <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                   <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                   <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                       <thead>
                           <tr>
                               <tr class="post">
                                   <th class="text-center">STT</th>
                                   <th class="d-none d-sm-table-cell">Tên Tour</th>
                                   <th class="d-none d-sm-table-cell">Tên khu vực</th>
                                   <th class="d-none d-sm-table-cell">Thông tin</th>
                                   <th class="d-none d-sm-table-cell">Chức Năng</th>
                               </tr>
                           </tr>
                       </thead>
                       <tbody>
                          @foreach($tourdulich as $dd)
                           <tr>
                               <td class="d-none d-sm-table-cell">{{$stt += 1}}</td>
                               <td class="d-none d-sm-table-cell">
                                   Địa Điểm <span class="badge badge-success">{{$dd->ma_chuog_trinh}}</span>
                               </td>
                               @foreach ($khuvuc as $item)
                                   @if ($item->ma_mien == $dd->ma_mien)
                                       <td class="d-none d-sm-table-cell">{{$item->ten_mien}}</td>
                                   @endif
                               @endforeach
                               
                               <td class="d-none d-sm-table-cell">{{$dd->ngay_khoi_hanh}}</td>
                               <td class="d-none d-sm-table-cell">{{$dd->ngay_ket_thuc}}</td>
                               <td class="d-none d-sm-table-cell">{{$dd->so_cho_da_dat}}</td>
                               <td class="" style="">
                                   <a href="{{ route('Quantri.sua_dia_diem',$dd->ma_dia_diem) }}" class="edit_diadiem btn btn-primary min-width-90">
                                       <i class="fa fa-wrench"></i> Sửa
                                   </a>
                                   <a href="{{ route('Quantri.trash_dia_diem',$dd->ma_dia_diem) }}" title=""  class="delect-diadiem btn btn-danger  min-width-10 ">
                                       <i class="fa fa-trash"></i> Xoá
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