@extends('Admin.Layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
//

<link rel="stylesheet" href="text/css" href="{{ asset('Admin/js/plugins/summernote/summernote.css')}}">
<link rel="stylesheet" href="text/css" href="{{ asset('Admin/js/plugins/summernote/summernote-lite.css')}}">

@endsection
@section('content')
<main id="main-container" style="min-height: 550px;">
    <!-- Page Content -->
    <div class="content">
           <div class="block">
        <div class="block-header block-header-default">

        </div>
        <div class="block-content">
            <form class="js-validation-material" enctype="multipart/form-data"
                action="{{ route('Quantri.them_hinh_anh') }}" role="form" id="Creatr_Product_Tour"
                name="Creatr_Product_Tour" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-12" for="example-select">Địa Điểm</label>
                    <div class="col-md-12">
                        <select class="form-control" id="ma_dia_diem" name="ma_dia_diem">
                            <option value="0">Chọn địa điểm</option>
                            @foreach ($diadiem as $item)
                            <option value="{{ $item->ma_dia_diem }}">{{ $item->ten_dia_diem }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="block block-rounded block-themed">
                            <div class="block-header bg-gd-primary">
                                <h3 class="block-title">HÌNH ẢNH ĐỊA ĐIỂM</h3>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="options-container js--image-preview"></div>
                                    <div class="upload-options">
                                      <label>
                                        <input type="file" class="" id="avatar" name="hinh_dd[]" data-toggle="custom-file-input"  required>
                                      </label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="options-container js--image-preview"></div>
                                    <div class="upload-options">
                                      <label>
                                        <input type="file" class="" id="avatar" name="hinh_dd[]" data-toggle="custom-file-input"  required>
                                      </label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                    <div class="options-container js--image-preview"></div>
                                    <div class="upload-options">
                                      <label>
                                        <input type="file" class="" id="avatar" name="hinh_dd[]" data-toggle="custom-file-input"  required>
                                      </label>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-12 text-right">
                        <button type="submit" class=" btn btn-success mr-5 p-3 mb-5" id="them_hinh_dia_diem">
                            <i class="fa fa-plus mr-5"></i>Thêm
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
       </div>
<!-- END Page Content -->
</main>
@endsection

@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('Admin/dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>
//<script type="text/javascript" src="{{ asset ('Admin/js/Ajax_HinhDiaDiem.js')}}"></script>
<script>
        var drop = $('#template-preview').html();
        Dropzone.autoDiscover = false;
        var count = 0;
        var addedFilesHash = {};
        $("#my-dropzone").dropzone({
            url: '{{ route("Quantri.xy_ly_update_img") }}',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            uploadMultiple: true,
            parallelUploads: 3,
            maxFilesize: 3,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            previewsContainer:"#previews",
            previewTemplate: drop,
            //dictRemoveFile: 'Remove file',
            dictFileTooBig: 'Image is larger than 16MB',
            autoProcessQueue: true,
            timeout: 10000,
            headers: {
            'X-CSRF-TOKEN': " {{ csrf_token() }}"
            },
            success: function (file, response) {
              
            removedfile: function (file) {
            file.previewElement.remove()
              var name = ''
              if (typeof file.file_name !== 'undefined') {
                     name = file.file_name
              } else {
                     name = uploadedDocumentMap[file.name]
              }
              $('form').find('input[name="document[]"][value="' + name + '"]').remove()
              },

        }); 
</script>
@endsection