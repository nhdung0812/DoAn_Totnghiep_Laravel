@extends('Admin.Layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
@endsection
@section('content')
<main id="main-container" style="min-height: 523px;">
                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Design -->
                    <h2 class="content-heading">CẬP NHẬT CHƯƠNG TRÌNH TOUR</h2>
                    <div class="row">
                        <div class="col-md-12">
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif


                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-header block-header-default">

                                </div>
                                <div class="block-content">
                                    <form action="{{ route('Quantri.Xu_ly_them_tour') }}" method="post" id="them_chuong_trinh" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <div class="col-md-12 ">
                                                <label for="">Tên Tour<span class="text-danger">(*)</span></label>
                                                <input type="text" class="form-control {{ $errors->has('ten_tour') ? 'is-invalid' : '' }} " id="ten_tour" name="ten_tour" placeholder="abd@gmail.com"  value="{{ $tour[0]->ten_tour }} ">
                                                    <span class="text-danger">{{ $errors->first('ten_tour') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="block col-12">
                                                <div class=" block-content-full">
                                                    <!-- Summernote Container -->
                                                    <textarea class="js-summernote {{ $errors->has('noi_dung') ? 'is-invalid' : '' }}" name="noi_dung" id="noi_dung" cols="30" rows="10" value="{{ $tour[0]->noi_dung }}">@Html.IdFo{{ $tour[0]->noi_dung }}</textarea>
                                                    <span class="text-danger">{{ $errors->first('noi_dung') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 ">
                                                <label for="">Giá tiền<span class="text-danger ">(*)</span></label>
                                                <input type="text" class="form-control {{ $errors->has('gia_tour') ? 'is-invalid' : '' }}" id="gia_tour" name="gia_tour" placeholder="abd@gmail.com" value="{{ $tour[0]->gia_tour }}" >
                                                <span class="text-danger">{{ $errors->first('gia_tour') }}</span>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Loại Tour<span class="text-danger">(*)</span></label>
                                                <select class="form-control {{ $errors->has('loai_tour') ? 'is-invalid' : '' }}" id="loai_tour" name="loai_tour" ">
                                                    <option value="{{ $tour[0]->ma_loai_tour }}">{{ $tour[0]->ten_loai_tour }}</option>
                                                    {{-- @foreach ($tour as $item) --}}
                                                        {{-- <option value="{{ $item->ma_loai_tour }}" {{ old('loai_tour') == "$item->ma_loai_tour" ? 'selected' : '' }}>{{ $item->ten_loai_tour }}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="example-flatpickr-custom">Ngày Khởi hành</label>
                                                <input class="form-control {{ $errors->has('ngay_khoi_hanh') ? 'is-invalid' : '' }}" type="date" id="ngay_khoi_hanh" name="ngay_khoi_hanh" value="{{ $tour[0]->ngay_khoi_hanh, date('d-m-y') }}">
                                                <span class="text-danger">{{ $errors->first('ngay_khoi_hanh') }}</span>

                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="example-flatpickr-custom">Ngày kết thúc</label>
                                                <input class="form-control {{ $errors->has('ngay_ket_thuc') ? 'is-invalid' : '' }}" type="date" value="{{ $tour[0]->ngay_ket_thuc, date('d-m-y') }}" id="ngay_ket_thuc" name="ngay_ket_thuc" >
                                                <span class="text-danger">{{ $errors->first('ngay_ket_thuc') }}</span>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="">Số ngày <span class="text-danger">(*)</span></label>
                                                <input type="number " class="form-control {{ $errors->has('so_ngay') ? 'is-invalid' : '' }}" id="so_ngay" name="so_ngay" min="1" max="50" value="{{ $tour[0]->so_ngay }}" placeholder="1" >
                                                <span class="text-danger">{{ $errors->first('so_ngay') }}</span>

                                            </div>
                                            <div class="col-md-6 ">
                                                <label for="">Số đêm<span class="text-danger">(*)</span></label>
                                                <input type="number" class="form-control {{ $errors->has('so_dem') ? 'is-invalid' : '' }}" id="so_dem" min="1" max="50" name="so_dem" value="{{ $tour[0]->so_dem }}" placeholder="3"   >
                                                <span class="text-danger">{{ $errors->first('so_dem') }}</span>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="">Số chỗ <span class="text-danger">(*)</span></label>
                                                <input type="number" class="form-control {{ $errors->has('so_cho') ? 'is-invalid' : '' }}" id="so_cho" name="so_cho" min="10" max="100" value="{{ $tour[0]->so_cho }}" placeholder="20" >
                                                <span class="text-danger">{{ $errors->first('so_cho') }}</span>

                                            </div>
                                            <div class="col-md-6 ">
                                                <label for="">Khuyến mãi <span class="text-danger">(*)</span></label>
                                                <input type="text" class="form-control {{ $errors->has('khuyen_mai') ? 'is-invalid' : '' }}" id="khuyen_mai" name="khuyen_mai" value="{{ $tour[0]->khuyen_mai }}" placeholder="20%" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label class="col-12">Hình đại diện</label>
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                                    <input type="file" class="custom-file-input  {{ $errors->has('hinh_tour') ? 'is-invalid' : '' }} " id="hinh_tour" name="hinh_tour" data-toggle="custom-file-input">
                                                    <label class="custom-file-label" for="example-file-multiple-input-custom">Choose files</label>
                                                    <span class="text-danger">{{ $errors->first('hinh_tour') }}</span>
                                                </div>


                                                <img id="up_holder" class="img-avatar" src="{{ asset('Admin/media/avatars/avatar15.jpg')}}" alt="" style="max-height:100px;">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Chọn gói<span class="text-danger">(*)</span></label>
                                                <input type="text" class="form-control" id="goi_tour" name="goi_tour" value="{{ $tour[0]->chon_goi }}" placeholder="" >
                                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 ">
                                                <label for="">Ghi chú<span class="text-danger">(*)</span></label>
                                                <textarea class="form-control" id="ghi_chu" name="ghi_chu" rows="6" placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-12 text-right">
                                                <button type="submit" class="create-modal_Tour btn btn-success mr-5 p-3 mb-5">
                                                    <i class="fa fa-plus mr-5"></i>Cập nhật
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Default Elements -->
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
        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->

        <script>
            

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
