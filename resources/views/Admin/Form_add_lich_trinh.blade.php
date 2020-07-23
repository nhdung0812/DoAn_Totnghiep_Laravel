@extends('Admin.Layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
    //<link rel="stylesheet" href="text/css" href="{{ asset('Admin/js/plugins/summernote/summernote.css')}}">
    <link rel="stylesheet" href="text/css" href="{{ asset('Admin/js/plugins/summernote/summernote-lite.css')}}">
    
@endsection
@section('content')
<main id="main-container" style="min-height: 408px;">
    <!-- Page Content -->
    <div class="content">
        <!-- Bootstrap Design -->
        <h2 class="content-heading">Thêm Lịch Trình</h2>
        <div class="row">
            <div class="col-md-12">

                <!-- Input Sizes -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title"></h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="be_forms_elements_bootstrap.html" method="post" id="them_lich_trinh" onsubmit="return false;">
                            <div class="form-group">
                                <label for="example-input-small">Chương Trình Tour</label>
                                <select class="form-control" id="chuong_trinh" name="chuong_trinh">
                                    <option disabled selected>Chọn Chương trình Tour</option>
                                    @foreach ($chuong_trinh as $item)
                                        <option value="{{ $item->ma_tour }}">{{$item->ten_tour}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="form_lich_trinh">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Input Sizes -->
            </div>
        </div>
        <!-- END Bootstrap Design -->
    </div>
    <!-- END Page Content -->
</main>
@endsection

@section('js')
    <script src="{{ asset('Admin/js/codebase.core.min.js')}}"></script>
    <script src="{{asset('Admin/dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('Admin/js/plugins/summernote/summernote.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('Admin/js/plugins/summernote/summernote.js')}}" type="text/javascript"></script>
    <script src="{{asset('Admin/js/plugins/summernote/summernote-lite.css')}}" type="text/javascript"></script>
    <script >
        // Hiện địa điểm theo khu vực
        $( "#chuong_trinh" ).change(function() {
            var formData = new FormData($('them_lich_trinh')[0]);
            formData.append('ID',$('#chuong_trinh option:selected').val()),

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{ route('Quantri.lay_so_ngay') }}',
                cache:false,
                contentType: false,
                processData: false,
                data:formData,
                success: function(data){
                   
                    var stringified = JSON.stringify(data);
                    var diadiem = JSON.parse(stringified);
                    $('#form_lich_trinh').html("");
                    for(var i = 1 ; i <= diadiem.data[0].so_ngay ; i++){
                       $('#form_lich_trinh').append('<h4 class="mb-2">Ngày'+i+'</h4> <div class="form-group row">  <div class="col-sm-6"><label class="col-12  pl-0" for="ecom-product-price">Tên lịch trình<span class="text-danger">(*)</span></label><div class="input-group"><input type="text" class="form-control " id="gia_tour" name="gia_tour" placeholder="2000000" value=""></div><span class="text-danger"></span></div><div class="col-sm-6"><label class="col-12 pl-0" for="ecom-product-stock">Nội dung lịch trình</label><div class="input-group"><textarea type="text" class="form-control " id="khuyen_mai" value="" name="khuyen_mai" placeholder="20%"></textarea></div><span class="text-danger"></span></div></div>')             
                   }
                },
                error: function(data){
                }
            });
        });

    </script>
@endsection
