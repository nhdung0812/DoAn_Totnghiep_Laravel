@extends('Admin.Layout')
@section('css')

@endsection
@section('content')
<main id="main-container">
       <!-- Page Content -->
       {{-- @if(Session::has('success'))
            <script>
                swal({
                    title: "Thêm thành công",
                    text: "",
                    icon: "success",
                });
                location.reload();
            </script>
       @endif --}}
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
                               <div class="font-size-h2 font-w700 mb-0 text-info js-count-to-enabled" data-toggle="countTo" data-to="{{ $cout_tour}}">{{ $cout_tour }}</div>
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Tất Cả Tour</div>
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
                               <div class="font-size-h2 font-w700 mb-0 text-success js-count-to-enabled" data-toggle="countTo" data-to="{{ $cout_tour_active }}">{{ $cout_tour_active }}</div>
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Tour Hoạt Động</div>
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
                                   <i class="fa fa-times fa-2x text-danger-light"></i>
                               </div>
                           </div>
                           <div class="py-20 text-center">
                                <div class="font-size-h2 font-w700 mb-0 text-danger js-count-to-enabled" data-toggle="countTo" data-to="{{ $cout_tour_off }}">{{ $cout_tour_off }}</div>
                               <div class="font-size-sm font-w600 text-uppercase text-muted">Tour Hết Hạn</div>
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
                   <a href="{{ route('Quantri.mo-tour') }}" type="button" class="create-modal_Diadiem btn btn-success mr-5 mb-5">
                       <i class="fa fa-plus mr-5"></i>Mở thêm tour
                   </a>
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
                                   <th class="d-none d-sm-table-cell">Ngày khởi hành</th>
                                   <th class="d-none d-sm-table-cell">Ngày Kết Thúc</th>
                                   <th class="d-none d-sm-table-cell">Trạng Thái</th>
                                   <th class="d-none d-sm-table-cell">Chức Năng</th>
                               </tr>
                           </tr>
                       </thead>
                       <tbody>
                            @foreach ($tourdulich as $item)
                            <tr>
                                <td class="d-none d-sm-table-cell">{{$stt += 1}}</td>
                                <td class="d-none d-sm-table-cell">
                                     <span class="badge badge-success">{{ $item->Tieu_de }}</span>
                                </td>
                               
                                
                                <td class="d-none d-sm-table-cell">{{ $item->ngay_khoi_hanh }}</td>
                                <td class="d-none d-sm-table-cell">{{ $item->ngay_ket_thuc }}</td>
                                <td class="text-center d-none d-sm-table-cell">
                                    @if($item->Trang_thai == 1)
                                        <span class="text-center badge badge-success">Đang mở</span>
                                    @else 
                                    <span class="text-center badge badge-danger">Đã Đóng</span>
                                    @endif
                                </td>
                                <td class="" style="">
                                    <a href="{{ route('Quantri.edit_dl',[$item->ma_chuog_trinh,$item->ma_tour_open])}}" class="edit_diadiem btn btn-primary min-width-90">
                                        <i class="fa fa-wrench"></i> Sửa
                                    </a>
                                    <a href="" title=""  class="delect-diadiem btn btn-danger  min-width-10 ">
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