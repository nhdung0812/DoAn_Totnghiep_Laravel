@extends('Admin.Layout')
@section('css')

@endsection
@section('content')
<main id="main-container" style="min-height: 522px;">
    <!-- Page Content -->
    <div class="content">
        <!-- Update Product -->
        <h2 class="content-heading">Cập nhật Tour Du Lịch</h2>
        <div class="row gutters-tiny">
            <!-- Basic Info -->
            <div class="col-md-12">
                <form action="{{ route('Quantri.xu-ly-edit-tour',[$tour[0]->ma_chuog_trinh , $tour[0]->ma_tour_open ]) }}" method="post">
                    {{ csrf_field() }}
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <div class="block-options">
                               
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="">Chương trình Tour<span class="text-danger">(*)</span></label>
                                    <select class="form-control {{ $errors->has('chuongtrinhtour') ? 'is-invalid' : '' }}"id="chuongtrinhtour" name="chuongtrinhtour">
                                        <option disabled selected>Chọn Chương trình Tour</option>
                                        @foreach ($chuongtrinh as $item)
                                        <option value="{{ $item->ma_tour }}"
                                            {{ old('chuongtrinhtour') == $item->ten_tour ? 'selected' : '' }}
                                            {{ $item->ma_tour == $tour[0]->ma_chuog_trinh ? 'selected' : '' }}>
                                            {{ $item->ten_tour }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('chuongtrinhtour') }}</span>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-12 {{ $errors->has('ten_tour') ? 'is-invalid' : '' }}" for="ecom-product-name">Tên Tour<span class="text-danger">(*)</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="ten_tour" name="ten_tour" placeholder="" value="{{ $tour[0]->Tieu_de }}">
                                    <span class="text-danger">{{ $errors->first('ten_tour') }}</span>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="" class="col-sm-6 p-0">Trạng Thái</label>
                                    <label class="col-6 css-control css-control-primary css-switch">
                                        <input type="checkbox" name="trang_thai" id="trang_thai" class="css-control-input " value="{{  $tour[0]->Trang_thai }}" {{ $tour[0]->Trang_thai == 1 ? 'checked="checked"' : '' }}>
                                        <span class="css-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-12 p-0" for="ecom-product-price">Ngày khởi hành<span class="text-danger">(*)</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-sun-o"></i>
                                            </span>
                                        </div>
                                        <input class="form-control {{ $errors->has('ngay_khoi_hanh') ? 'is-invalid' : '' }}" type="date" value="{{ $tour[0]->ngay_khoi_hanh }}" name="ngay_khoi_hanh" id="ngay_khoi_hanh">
                                    </div>
                                    <span class="text-danger">{{ $errors->first('ngay_khoi_hanh') }}</span>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-12 p-0" for="ecom-product-price">Ngày kết thúc<span class="text-danger">(*)</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-sun-o"></i>
                                            </span>
                                        </div>
                                        <input class="form-control {{ $errors->has('ngay_ket_thuc') ? 'is-invalid' : '' }}" type="date" value="{{ $tour[0]->ngay_ket_thuc }}" name="ngay_ket_thuc" id="ngay_ket_thuc">
                                    </div>
                                    <span class="text-danger">{{ $errors->first('ngay_ket_thuc') }}</span>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-12 text-right">
                                    <button type="submit" class=" btn btn-success mr-5 p-3 mb-5">
                                        <i class="fa fa-plus mr-5"></i>Cập nhật Tour
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Basic Info -->
        </div>
        <!-- END Update Product -->
    </div>
    <!-- END Page Content -->
</main>
@endsection
@section('js')
<script src="{{ asset('Admin/js/codebase.core.min.js')}}"></script>
<script>
var checkbox =0;
$("#trang_thai").change(function() {
       if(this.checked) {
              checkbox = 1;
              $("#trang_thai").val(checkbox)
       }
       else
       {
            checkbox = 0;
            $("#trang_thai").val(checkbox)
              
       }
});
</script>
@endsection