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
                    action="{{route('Quantri.xu_ly_them_chuc_vu')}}" role="form" id=""
                    name="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-12" for="example-text-input">Tên Chức Vụ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhân Viên hoặc kế toán">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-text-input">Tên Hiển Thị</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="display_name" name="display_name" placeholder="Xoá Thêm Sửa ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="example-text-input"> <h2> Quyền Truy Cập</h2> </label>
                        <div class="col-12">
                            @foreach ($permissions as $permi)
                                <div class="col-sm-3 custom-control custom-checkbox custom-control-inline mb-5 pb-4 ">
                                    <input class="custom-control-input" type="checkbox" name="quyentruycap[]" id="quyentruycap{{$permi->id}}" value="{{ $permi->id}}">
                                    <label class="custom-control-label" for="quyentruycap{{ $permi->id}}">{{ $permi->display_name}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-12 text-right">
                            <button type="submit" class=" btn btn-success mr-5 p-3 mb-5">
                                <i class="fa fa-plus mr-5"></i> Thêm
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
