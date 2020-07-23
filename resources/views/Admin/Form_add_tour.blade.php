@extends('Admin.Layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
    //<link rel="stylesheet" href="text/css" href="{{ asset('Admin/js/plugins/summernote/summernote.css')}}">
    <link rel="stylesheet" href="text/css" href="{{ asset('Admin/js/plugins/summernote/summernote-lite.css')}}">
    
@endsection
@section('content')
<main id="main-container" style="min-height: 550px;">
    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <h2 class="content-heading">Overview</h2>

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
                            <div class="font-size-sm font-w600 text-uppercase text-muted">In Orders</div>
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
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Stock</div>
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
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Delete Product</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Delete Product -->
        </div>
        <!-- END Overview -->

        <!-- Update Product -->
        <h2 class="content-heading"><i class="si si-pointer"></i> THÊM CHƯƠNG TRÌNH TOUR</h2>
        <form class="row gutters-tiny" action="{{ route('Quantri.Xu_ly_them_tour') }}" method="post" id="them_chuong_trinh" name="them_chuong_trinh" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Basic Info -->
                <div class="col-md-7">
                        <div class="block block-rounded block-themed">
                            <div class="block-header bg-gd-primary">
                                <h3 class="block-title">Thông Tin Tour</h3>
                                <div class="block-options">
                                    <button type="submit" class="btn btn-sm btn-alt-primary">
                                        <i class="fa fa-save mr-5"></i>Lưu
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="form-group row">
                                    <label class="col-12" for="ecom-product-name">Tên Chương Trình Tour<span class="text-danger">(*)</span></label>
                                    <div class="col-12">
                                        <input type="text" class="form-control {{ $errors->has('ten_tour') ? 'is-invalid' : '' }} " id="ten_tour" name="ten_tour" placeholder="" value="{{ old('ten_tour') }}">
                                        <span class="text-danger">{{ $errors->first('ten_tour') }}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12">Nội Dung</label>
                                    <div class="col-12">
                                        <textarea class="{{ $errors->has('noi_dung') ? 'is-invalid' : '' }}" name="noi_dung" id="noi_dung" value="{{ old('noi_dung') }}"></textarea>
                                        <span class="text-danger">{{ $errors->first('noi_dung') }}</span>
                                    </div>
                                </div>
                                <div class="form-group row">  
                                    <div class="col-sm-6">
                                        <label class="col-12  pl-0" for="ecom-product-price">Giá Tiền<span class="text-danger">(*)</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-fw fa-usd"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control {{ $errors->has('gia_tour') ? 'is-invalid' : '' }}" id="gia_tour" name="gia_tour" placeholder="2000000" value="{{ old('gia_tour') }}" >
                                           
                                        </div>
                                        <span class="text-danger">{{ $errors->first('gia_tour') }}</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-12 pl-0" for="ecom-product-stock">Khuyến Mãi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-fw fa-archive"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control {{ $errors->has('noi_dung') ? 'is-invalid' : '' }}" id="khuyen_mai" value="{{ old('khuyen_mai') }}" name="khuyen_mai" placeholder="20%" >
                                        </div>
                                        <span class="text-danger">{{ $errors->first('khuyen_mai') }}</span>
                                    </div>
                                </div>
                                <div class="form-group row">  
                                    <div class="col-sm-6">
                                        <label class="col-12  pl-0" for="ecom-product-price">Số Ngày<span class="text-danger">(*)</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-sun-o"></i>
                                                </span>
                                            </div>
                                            <input type="number " value="{{ old('so_ngay') }}" class="form-control {{ $errors->has('so_ngay') ? 'is-invalid' : '' }}" id="so_ngay" name="so_ngay" min="1" max="50" placeholder="1" >
                                        </div>
                                        <span class="text-danger">{{ $errors->first('so_ngay') }}</span>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label class="col-12 pl-0" for="ecom-product-stock">Số Đêm<span class="text-danger">(*)</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-moon-o"></i>
                                                </span>
                                            </div>
                                            <input type="number" class="form-control {{ $errors->has('so_dem') ? 'is-invalid' : '' }}" id="so_dem" min="1" max="50" name="so_dem" value="{{ old('so_dem') }}" placeholder="3"   >   
                                        </div>
                                        <span class="text-danger">{{ $errors->first('so_dem') }}</span>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">  
                                    <div class="col-sm-6">
                                        <label class="col-12  pl-0" for="ecom-product-price">Số chỗ<span class="text-danger">(*)</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="si si-users"></i>
                                                </span>
                                            </div>
                                            <input type="number" class="form-control {{ $errors->has('noi_dung') ? 'is-invalid' : '' }}" id="so_cho" name="so_cho" min="10" max="100" placeholder="20" >
                                        </div>
                                        <span class="text-danger">{{ $errors->first('so_cho') }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Loại Tour<span class="text-danger">(*)</span></label>
                                        <select class="form-control {{ $errors->has('loai_tour') ? 'is-invalid' : '' }}" id="loai_tour" name="loai_tour">
                                            <option disabled selected>Chọn loại Tour</option>
                                            @foreach ($loai_tour as $item)
                                                <option value= "{{ $item->ma_loai_tour }}" {{ old('loai_tour') == $item->ma_loai_tour ? 'selected' : ''}}>{{ $item->ten_loai_tour }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="ecom-product-description-short">Ghi Chú</label>
                                    <div class="col-12">
                                        <textarea class="form-control" id="ghi_chu" name="ghi_chu" placeholder="Description visible on preview.." rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- END Basic Info -->

                <!-- More Options -->
                <div class="col-md-5">
                    <!-- KHU VUC -->
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title"><i class="fas fa-map-marked-alt"></i>KHU VỰC<span class="text-danger">(*)</span></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <select class="form-control {{ $errors->has('khu_vuc') ? 'is-invalid' : '' }}" id="khu_vuc" name="khu_vuc">
                                        <option disabled selected>Chọn Khu Vực</option>
                                        @foreach ($khuvuc as $item)
                                            <option value = "{{ $item->ma_mien }}" {{ old('khu_vuc') == $item->ma_mien ? 'selected' : '' }}>{{ $item->ten_mien }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('khu_vuc') }}</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                {{-- END KHU VỰC --}}   
                    <!-- Địa điểm -->
                        <div class="block block-rounded block-themed">
                            <div class="block-header bg-gd-primary">
                                <h3 class="block-title">ĐỊA ĐIỂM</h3>

                            </div>
                            <div class="block-content block-content-full">
                                <div class="form-group row">
                                    <label class="col-12">Địa Điểm</label>
                                    <div class="col-12" id= "Form_dia_diem">
                                            
                                    </div>
                                    {{-- <span class="text-danger">{{ $errors->first('dia_diem[]') }}</span> --}}
                                </div>
                            </div>
                        </div>
                    <!-- END địa điểm -->
                    <!-- END Images -->
                    <!-- Images -->
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">HÌNH ẢNH ĐỊA ĐIỂM</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- Existing Images -->
                            <div class="row gutters-tiny items-push">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="options-container">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo8.jpg" alt="">
                                        <div class="options-overlay bg-black-op-75">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="options-container">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo18.jpg" alt="">
                                        <div class="options-overlay bg-black-op-75">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Hình ảnh địa điểm <span class="text-danger">(*)</span></label>
                                    <div class="dropzone dz-clickable" id="my-dropzone">
                                        <div class="dz-default dz-message" data-dz-message="">
                                          <span>Drop files here to upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- END Existing Images -->

                            <!-- DropzoneJS Container -->   
                        </div>
                    </div>
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Hình Đại Diện</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- Existing Images -->
                            <div class="row gutters-tiny items-push">
                                <div class="col-12">
                                    <label class="col-12 pl-0">Hình đại diện</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input  {{ $errors->has('hinh_tour') ? 'is-invalid' : '' }} " id="hinh_tour" name="hinh_tour" data-toggle="custom-file-input">
                                        <label class="custom-file-label" for="example-file-multiple-input-custom">Choose files</label>
                                        <span class="text-danger">{{ $errors->first('hinh_tour') }}</span>
                                    </div>
                                    <img id="up_holder" class="img-avatar" src="{{ asset('Admin/media/avatars/avatar15.jpg')}}" alt="" style="max-height:100px;">
                                </div>
                            </div>
                            
                            <!-- END Existing Images -->

                            <!-- DropzoneJS Container -->   
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-12 text-right">
                            <button type="submit" class="create-modal_Tour btn btn-success mr-5 p-3 mb-5">
                                <i class="fa fa-plus mr-5"></i>Thêm
                            </button>
                        </div>
                    </div>
                    <!-- END Images -->
                </div>
                <!-- END More Options -->
            </form>
        <!-- END Update Product -->
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
    <script>
       
        Dropzone.autoDiscover = false;
             $("#my-dropzone").dropzone({
               url: "upload/image",
               headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               
               uploadMultiple: true,
               parallelUploads: 3,
               maxFilesize: 3,
               addRemoveLinks: true,
               dictRemoveFile: 'Remove file',
               dictFileTooBig: 'Image is larger than 16MB',
               timeout: 10000,
               init : function() {
                   var submit = document.querySelector("#them_hinh_dia_diem")
                   myDropzone = this;
 
                   submit.addEventListener("click", function(e){                  
                         myDropzone.processQueue();
                   });
               }
             });
     </script>    
    <script>
            // Hiện địa điểm theo khu vực
            $( "#khu_vuc" ).change(function() {
                var formData = new FormData($('them_chuong_trinh')[0]);
                formData.append('ID',$('#khu_vuc option:selected').val()),
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ route('Quantri.hien_dia_diem') }}',
                    cache:false,
                    contentType: false,
                    processData: false,
                    data:formData,
                    success: function(data){
                        var stringified = JSON.stringify(data);
                        var diadiem = JSON.parse(stringified);
                        console.log(diadiem.diadiem.length);
                        $('#Form_dia_diem').html("");
                        for(var i = 0 ; i < diadiem.diadiem.length ; i++){
                            $('#Form_dia_diem').append('<div class="custom-control custom-checkbox custom-control-inline mb-5 col-3"> <input class="font-size-h3 mb-3 custom-control-input" type="checkbox" name="dia_diem[]" id="diadien_'+diadiem.diadiem[i].ma_dia_diem+'" value="'+diadiem.diadiem[i].ma_dia_diem+'"> <label class="custom-control-label" for="diadien_'+diadiem.diadiem[i].ma_dia_diem+'">'+diadiem.diadiem[i].ten_dia_diem+'</label></div>')             
                        }
                    },
                    error: function(data){
                    }
                });
            });

            $('#noi_dung').summernote({
                placeholder: 'Hello stand alone ui',
                height: 300,
                'fontname' : 'arial',
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        </script>
        <script >
            //hiện hình avatar
            maxFilesize: 10,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return false;
            }
            $('input[name=hinh_tour]').change(function(e) {
                alert('hâhah');
                var fileName = e.target.files[0].name;
                var file = this.files[0];
                $("#file").val(fileName);
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("up_holder").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });
        </script>


        <!-- Page JS Code -->
    <script src="{{ asset('Admin/js/pages/be_forms_plugins.min.js')}}"></script>
@endsection
