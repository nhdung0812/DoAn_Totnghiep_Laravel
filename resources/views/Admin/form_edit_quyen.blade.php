@extends('Admin.Layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('Admin/dropzone/dist/min/dropzone.min.css')}}">
@endsection
@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-content">
                <form class="js-validation-material" enctype="multipart/form-data"
                    action="" role="form" id="Creatr_Product_Tour"
                    name="Creatr_Product_Tour" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                     <label class="col-12" for="example-tags1"></label>
                     <div class="col-lg-12">
                         <input type="text" class="js-tags-input form-control js-tags-input-enabled" id="example-tags2" name="example-tags2" value="HTML,CSS,JavaScript" data-tagsinput-init="true" style="display: none;">
                         <div id="example-tags2_tagsinput" class="tagsinput" style="width: 100%;">
                            <span class="tag">
                                   <span>HTML&nbsp;&nbsp;</span>
                                   <a href="#" title="Removing tag">x</a>
                            </span>
                            <span class="tag">
                                   <span>CSS&nbsp;&nbsp;</span>
                                   <a href="#" title="Removing tag">x</a>
                            </span><span class="tag">
                                   <span>JavaScript&nbsp;&nbsp;</span>
                                   <a href="#" title="Removing tag">x</a>
                            </span>
                            <div id="example-tags2_addTag">
                                   <input id="example-tags2_tag" value="" data-default="Add tag" style="color: rgb(102, 102, 102); width: 68px;"></div>
                                   <div class="tags_clear"></div>
                            </div>
                     </div>
                 </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="block block-rounded block-themed">
                                <div class="block-header bg-gd-primary">
                                    <h3 class="block-title">HÌNH ẢNH ĐỊA ĐIỂM</h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- Existing Images -->
                                    <div class="row gutters-tiny items-push" id="previews">
                                        <div class="col-sm-6 col-xl-4" id="template-preview" style="display: none;">
                                            <div class="options-container mr-2">
                                                <img data-dz-thumbnail class="img-fluid options-item"
                                                    src="assets/media/photos/photo8.jpg" alt="">
                                                <div class="options-overlay bg-black-op-75">
                                                    <div class="options-overlay-content">
                                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75 dz-remove"
                                                            href="javascript:void(0)" data-dz-remove>
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
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
</main>
<script src="{{ asset ('Admin/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
<script>
       $(function () {
              $('input').tagsinput();
       });
       $('input').tagsinput({
              tagClass: function(item) {
                return (item.length > 10 ? 'label label-warning' : 'label label-info');
              }
            });
            $('input').tagsinput('add', { id: 1, text: 'hihi' });
</script>
@endsection
