@extends('Admin.Layout')
@section('content')
<main id="main-container">
                <!-- Page Content -->
                <!-- User Info -->
                @if(isset($taiKhoan))
                <div class="bg-image bg-image-bottom" style="background-image: url('assets/media/photos/photo13@2x.jpg');">
                    <div class="bg-black-op-75 py-30">
                        <div class="content content-full text-center">
                            <!-- Avatar -->
                            <div class="mb-15">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('Admin/image/avatar/')}}/{{ $taiKhoan->hinh_anh }}" alt="">
                                </a>
                            </div>
                            <!-- END Avatar -->

                            <!-- Personal -->
                            <h1 class="h3 text-white font-w700 mb-10">{{$taiKhoan->ho_ten}}</h1>
                            <h2 class="h5 text-white-op">
                                Product Manager <a class="text-primary-light" href="javascript:void(0)">@GraphicXspace</a>
                            </h2>
                            <!-- END Personal -->

                            <!-- Actions -->
                            <a href="{{route('Quantri.Admin')}}" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5">
                                <i class="fa fa-arrow-left mr-5"></i> Quay lại trang chủ
                            </a>
                            <!-- END Actions -->
                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <!-- Main Content -->
                <div class="content">
                    <!-- User Profile -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h2 class="block-title">
                                <i class="fa fa-user-circle mr-5"></i>Thông tin
                            </h2>
                        </div>
                        <div class="block-content">
                            <form action="be_pages_generic_profile.edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="row items-push">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-username">Tên đăng nhập</label>
                                                <input type="text" class="form-control fo4m-control-lg" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="" value="{{$taiKhoan->ten_dang_nhap}} " readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-name">Tên hiển thị</label>
                                                <input type="text" class="form-control form-control-lg" id="ho_ten" name="ho_ten" placeholder="Nhập tên của bạn" value="{{$taiKhoan->ten_quan_tri}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-email">Gmail</label>
                                                <input type="email" class="form-control form-control-lg" id="gmail" name="gmail" placeholder="Nhập gmail bạn đang sử dụng" value="{{$taiKhoan->gmail}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-10 col-xl-6 mt-4">
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <input type="file" class="custom-file-input" id="profile-settings-avatar" name="profile-settings-avatar" data-toggle="custom-file-input">
                                                    <label class="custom-file-label" for="profile-settings-avatar">Choose new avatar</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xl-6">
                                            <img class="img-avatar" src="{{ asset('Admin/media/avatars/avatar15.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Cập nhật thông tin</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 border-1">
                                          <div class="title">
                                                 <h2>Đổi mật khẩu</h2>
                                          </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-password">Mật khẩu cũ</label>
                                                <input type="password" class="form-control form-control-lg" id="profile-settings-password" name="profile-settings-password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-password-new">Mật khẩu mới</label>
                                                <input type="password" class="form-control form-control-lg" id="profile-settings-password-new" name="profile-settings-password-new">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="profile-settings-password-new-confirm">Xác nhận lại mật khẩu mới</label>
                                                <input type="password" class="form-control form-control-lg" id="profile-settings-password-new-confirm" name="profile-settings-password-new-confirm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Đổi mật khẩu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    @endif
                    <!-- END User Profile -->

                    <!-- Change Password -->
                    <!-- END Change Password -->
                </div>
                <!-- END Main Content -->
                <!-- END Page Content -->
            </main>
@endsection
