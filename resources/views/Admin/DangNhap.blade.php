@include('Admin.header')
<div id="page-container" class="main-content-boxed">

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="bg-gd-dusk">
        <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
            <a class="link-effect font-w700" href="{{ route ('Tous.Tous')}}">
                    <i class="si si-fire"></i>
                    <span class="font-size-xl text-primary-dark">Tous</span><span class="font-size-xl">Nè</span>
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Quản Trị Website Tous Nè</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Vui lòng đăng nhập</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-signin" action="{{url('quantri/dangnhap')}}" method="POST" role="form">
                            {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="email" name="email">
                                    <label for="login-username">Gmail</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="password" name="password">
                                    <label for="login-password">Mật Khẩu</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                    <i class="si si-login mr-10"></i> Đăng Nhập
                                </button>
                            </div>
                            <!-- <div class="col-sm-6 mb-5">
                                <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="op_auth_signup.html">
                                    <i class="fa fa-plus text-muted mr-5"></i> New Account
                                </a>
                            </div>
                            <div class="col-sm-6 mb-5">
                                <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="op_auth_reminder.html">
                                    <i class="fa fa-warning text-muted mr-5"></i> Forgot password
                                </a>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Sign In Form -->
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
</div>
@include('Admin.Footer')
            