@extends('Admin.Layout')
@section('content')
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">DANH SÁCH QUẢN TRỊ VIÊN</h2>
        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header block-header-default">
                <button type="button" class="create-modal btn btn-success mr-5 mb-5">
                    <i class="fa fa-plus mr-5"></i>Thêm tài khoản
                </button>
                <a href="{{route('Quantri.thung-rac')}}" type="button" class="show-trash btn btn-danger mr-5 mb-5">
                    <i class="fa fa-trash-o mr-5"></i>Thùng rác
                </a>

            </div>
            <div class="block-content block-content-full">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title ">Quản trị viên</h3>
                    </div>
                    <div class="block-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;"><i class="si si-user"></i></th>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Tên hiển thị</th>
                                        <th class="text-center d-none d-sm-table-cell">Tên đăng nhập</th>
                                        <th class="text-center d-none d-sm-table-cell">Gmail</th>
                                        <th class="text-center d-none d-sm-table-cell" style="width: 15%;">Chức vụ</th>
                                        <th class="text-center d-none d-sm-table-cell text-center">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($taiKhoan as $tk)
                                    <tr>

                                        <td class="text-center  d-none d-sm-table-cell avt nav-justified">
                                            <img src="{{ asset('Admin/image/avatar/')}}/{{$tk->hinh_anh }} " class="img-avatar img-avatar48" />
                                        </td>
                                        <td class="text-center">{{ $tk->ma_quan_tri }}</td>
                                        <td class="text-center font-w600" >{{ $tk->ten_quan_tri}}</td>
                                        <td class="text-center d-none d-sm-table-cell">{{ $tk->ten_dang_nhap}}</td>
                                        <td class="text-center d-none d-sm-table-cell">
                                            {{ $tk->gmail}}
                                        </td>
                                        <td class="text-center d-none d-sm-table-cell">
                                            @if($tk->trang_thai == 1)
                                                    <span class="text-center badge badge-success">Admin</span>
                                            @elseif($tk->trang_thai == -1)
                                                    <span class="text-center badge badge-info">Supper Admin</span>
                                            @else
                                                    <span class="text-center badge badge-danger">Nhân Viên</span>
                                            @endif
                                                    
                                        </td>
                                        <td class="text-center">
                                            @if($tk->trang_thai == -1)
                                                <span class="h3">😅🤣😊😌😉</span>
                                            @else
                                                <a href="{{route('Quantri.update',$tk->ma_quan_tri)}}" type="submit" class="edit btn btn-primary min-width-90">
                                                    <i class="fa fa-wrench"></i> Sửa
                                                </a>
                                                <a href="{{route('Quantri.xoa',$tk->ma_quan_tri)}}" title="{{ $tk->ten_quan_tri}}" type="submit" class="delect btn btn-danger  min-width-90 ">
                                                    <i class="fa fa-trash"></i> Xoá
                                                </a>
                                            @endif
                                        </td>
                                        

                                    </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- {{-- Modal Form Thêm Tài Khoản --}} -->
<div id="create" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-2" id="name my-modal-title"><span class="si si-user-follow">Title</span></h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="border-top:1px solid grey">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <div id="validation-errors"></div>

                <form class="js-validation-material" enctype="multipart/form-data" id="addForm" name="addForm" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group row "></div>
                        <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Họ và Tên <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="ho_ten" name="ho_ten" placeholder="Nguyễn Văn Nè" required>
                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                            </div>
                            <div class="col-md-6 ">
                                <label for="">Tên đăng nhập <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="Đăng nhập nè"  required>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6 ">
                                <label for="">Mật khẩu <span class="text-danger">(*)</span></label>
                                <input type="password" class="form-control" id="mat_khau" name="mat_khau" placeholder="" required>
                            </div>
                            <div class="col-md-6 ">
                                <label for="">Xác nhận lại mật khẩu<span class="text-danger">(*)</span></label>
                                <input type="password" class="form-control" id="mat_khau_confirmation" name="mat_khau_confirmation" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <label for="">Gmail<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="gmail" name="gmail" placeholder="abd@gmail.com" >
                            </div>
                            <div class="col-6">
                                <label for="" class="col-sm-6 p-0">Admin</label>
                                <label class="col-6 css-control css-control-primary css-switch">
                                    <input type="checkbox" name="checkbox" id="checkbox" class="css-control-input" value='1' required>
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 ">
                                <label for="">Số điện thoại</span></label>
                                <input type="tel" id="sdt" name="sdt" class="form-control" placeholder="888 888 8888" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12"  title="Ten digits code" required/>
                            </div>
                            <div class="col-md-8">
                                <label for="">Địa chỉ</span></label>
                                <input type="text" class="form-control" id="dia_chi" name="dia_chi" placeholder="Ham nghi , Q1" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Hình đại diện</label>
                            <div class="col-9 mt-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="avatar" name="avatar" data-toggle="custom-file-input"  required>
                                    <label class="custom-file-label" for="example-file-multiple-input-custom">Choose files</label>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <img id="holder" class="img-avatar" src="" alt="" style="max-height:100px;">
                            </div>
                        </div>
                        <div class="row no-gutters items-push" id="role">
                            <div class="col-12">
                                <h3 class="mb-0">Phân Quyền</h3>
                            </div>
                            <div class="col-md-12">
                                <select class="form-control " id="phanquyen" name="phanquyen">
                                    @foreach ($role as $item)
                                        <option value="{{ $item->id}}">{{$item->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class=" btn btn-warning" type="submit" value="add" id="add">
                    <span class="glyphicon glyphicon-plus"></span>Thêm
                </button>
                <button class="btn btn-warning" type="button" data-dismiss="modal">
                <span class="glyphicon glyphicon-remobe"></span>Thoát
                </button>
            </div>
        </div>
    </div>
</div>
{{--  Modal Form edit Tài Khoản  --}}
<div id="update" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-2" id="name my-modal-title"><span class="si si-user-follow">Title</span></h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="border-top:1px solid grey">
               
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <div id="validation-errors"></div>
                <form class="js-validation-material" enctype="multipart/form-data" id="updateForm" name="updateForm" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group row "></div>
                        <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" class="form-control" id="up_ID" name="up_ID" placeholder="Nguyễn Văn Nè" required>
                        <div class="form-group row {{ $errors->has('firstname') ? 'has-error' : '' }}">
                            <div class="col-md-6">
                                <label for="">Họ và Tên <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="up_ho_ten" name="up_ho_ten" placeholder="Nguyễn Văn Nè" required>
                                <div id="val-username-error" class="invalid-feedback animated fadeInDown">Please enter a username</div>
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                            <div class="col-md-6 ">
                                <label for="">Tên đăng nhập <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="up_ten_dang_nhap" name="up_ten_dang_nhap" placeholder="Đăng nhập nè"  readonly required>
                                <div class="valid-feedback">
                                    Looks good!
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6 ">
                                <label for="">Mật khẩu <span class="text-danger">(*)</span></label>
                                <input type="password" class="form-control" id="up_mat_khau" name="up_mat_khau" placeholder="" readonly required>
                            </div>
                            {{-- <div class="col-md-6 ">
                                <label for="">Xác nhận lại mật khẩu<span class="text-danger">(*)</span></label>
                                <input type="password" class="form-control" id="up_mat_khau_confirmation" name="up_mat_khau_confirmation" placeholder="" required>
                            </div> --}}
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <label for="">Gmail<span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" id="up_gmail" name="up_gmail" placeholder="abd@gmail.com" >
                            </div>
                            <div class="col-6">
                                <label for="" class="col-sm-6 p-0">Admin</label>
                                <label class="col-6 css-control css-control-primary css-switch">
                                    <input type="checkbox" name="up_checkbox" id="up_checkbox" class="css-control-input" value='1' required>
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 ">
                                <label for="">Số điện thoại</span></label>
                                <input type="tel" id="up_sdt" name="up_sdt" class="form-control" placeholder="888 888 8888" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12"  title="Ten digits code" required/>
                            </div>
                            <div class="col-md-8">
                                <label for="">Địa chỉ</span></label>
                                <input type="text" class="form-control" id="up_dia_chi" name="up_dia_chi" placeholder="Ham nghi , Q1" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Hình đại diện</label>
                            <div class="col-9 mt-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="up_avatar" name="up_avatar" data-toggle="custom-file-input"  required>
                                    <label class="custom-file-label" for="example-file-multiple-input-custom">Choose files</label>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <img id="up_holder" class="img-avatar" src="" alt="" style="max-height:100px;">
                            </div>
                        </div>
                        <div class="row no-gutters items-push" id="role">
                            <div class="col-12">
                                <h3 class="mb-0">Phân Quyền</h3>
                            </div>
                            <div class="col-md-12">
                                <select class="form-control " id="phanquyen_edit" name="phanquyen">
                                    
                                </select>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="action btn btn-success" type="submit" value="btn_edit" id="">
                    <span class="glyphicon glyphicon-plus"></span>Cập nhật
                </button>
                <button class="btn btn-warning" type="button" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remobe"></span>Thoát
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("js")      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{asset('Admin/js/pages/be_forms_validation.min.js')}}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
        <script>
            $(document).on('click','.edit', function(e){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ route('Quantri.load_permissions') }}',
                    success: function(data){
                        console.log(data);
                        var stringified = JSON.stringify(data);
                        var phanquyen = JSON.parse(stringified);
                        $('#phanquyen_edit').html('<option disabled="" selected="">Chọn chức vụ</option>');
                        for(var i = 0 ; i < phanquyen.data_pq.length ; i++){
                           $('#phanquyen_edit').append('<option value="' + phanquyen.data_pq[i].id +'">'+ phanquyen.data_pq[i].name +'</option>')             
                        }
                    },
                    error: function(data){
                    }
                });
            });
        </script>   
        <script type="text/javascript" src="{{ asset ('Admin/js/Ajax_Admin.js')}}"></script>
        <script type="text/javascript" src="{{ asset ('Admin/js/update_action.js')}}"></script>
        
@endsection
