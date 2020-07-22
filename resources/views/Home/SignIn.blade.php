
<div id="signin_member" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                <div class="modal-body p-0" style="border-top:1px solid grey">
                    <form class="js-validation-signin" action="be_pages_auth_all.html" method="post">
                        <div class="block block-themed block-rounded block-shadow">
                            <div class="block-header bg-gd-dusk">
                                <h3 class="block-title">Đăng Nhập</h3>
                                <div class="block-options">
                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="login-username">Gmail</label>
                                        <input type="text" class="form-control" id="login-username" name="login-username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="login-password">Mật khẩu</label>
                                        <input type="password" class="form-control" id="login-password" name="login-password">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-6 d-sm-flex align-items-center push">
                                        <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                            <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                            <label class="custom-control-label" for="login-remember-me">Nhớ mật khẩu</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right push">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="si si-login mr-4"></i> Đăng nhập
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content bg-body-light">
                                <div class="form-group text-center">
                                    <a class="link-effect text-muted mr-10 d-inline-block" href="{{route ('Tous.them_kh')}}" target="_blank">
                                        <i class="fa fa-plus mr-5"></i>Tại tài khoản
                                    </a>
                                    <a class="link-effect text-muted mr-10 d-inline-block" href="op_auth_reminder3.html">
                                        <i class="fa fa-warning mr-5"></i> Quên mật khẩu
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>