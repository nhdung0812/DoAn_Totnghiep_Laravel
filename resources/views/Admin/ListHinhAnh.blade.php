@extends('Admin.Layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
@endsection
@section('content')
<main id="main-container">
    <!-- Page Content -->
    
    
    <div class="content">
        <h2 class="content-heading">
            <i class="fa fa-word mr-2"></i>Danh sách hình địa điểm
        </h2>
        <div class="block">
            <div class="block-header block-header-default">
                <a href="{{ route('Quantri.form_them_hinh') }}" class="create-modal_Tour btn btn-success mr-5 mb-5">
                    <i class="fa fa-plus mr-5"></i>Thêm hình địa điểm
                </a>
                <a href="http://localhost:8000/quantri/thungracloai" type="button" class="show-trash btn btn-danger mr-5 mb-5">
                    <i class="fa fa-trash-o mr-5"></i>Thùng rác
                </a>
            </div>
        </div>
        @foreach ($diadiem as $item)
            <h2 class="content-heading">
                <i class="fa fa-word mr-2"></i>Hình địa điểm {{ $item->ten_dia_diem }}
            </h2>
            <div class="row items-push">
            @foreach($hinhanh as $ha)
                @if ($item->ma_dia_diem == $ha->ma_dia_diem)
                    <div class="col-md-4 animated fadeIn">
                        <div class="options-container">
                            <img class="img-fluid options-item" src="{{ asset('Home/img/diadiem') }}/{{ $ha->Hinh_anh_1 }}" alt="">
                            <div class="options-overlay bg-black-op-75">
                                <div class="options-overlay-content">
                                    <h3 class="h4 text-white mb-5"></h3>
                                    <h4 class="h6 text-white-op mb-15">Đổi hình</h4>
                                    <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="{{ route('Quantri.form_sua_hinh', [$ha->ma_dia_diem, $ha->ma_hinh_anh]) }}">
                                        <i class="fa fa-pencil"></i> Sửa
                                    </a>
                                    {{-- <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                        <i class="fa fa-times"></i> Delete
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                
                @endforeach
            </div>
        @endforeach
        
        
        <!-- Dynamic Table Full -->
    </div>
</main>
@include('Admin/model.model_add_hinh');
@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('Admin/dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
//<script type="text/javascript" src="{{ asset ('Admin/js/Ajax_HinhDiaDiem.js')}}"></script>

@endsection