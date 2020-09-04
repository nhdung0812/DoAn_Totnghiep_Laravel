@extends('Home.Layout')
@section('content')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" class="bg-gray space-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="mb-5 shadow-soft bg-white rounded-sm">
                    <div class="pt-4 pb-5 px-5" <div class="row">
                        <div class="col-md-12">
                            <!-- Validation Wizards -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Validation Wizard Classic -->
                                    <div class="js-wizard-validation-classic block ">
                                        <!-- Step Tabs -->
                                        <div class="container">
                                            <ul class=" pl-2 list-group flex-nowrap overflow-auto overflow-md-visble list-group-horizontal list-group-borderless flex-center-between pt-1"
                                                role="tablist">
                                                <li
                                                    class="list-group-item text-center flex-shrink-0 flex-xl-shrink-1 tab_color">
                                                    <a class="active" href="#wizard-validation-classic-step1"
                                                        data-toggle="tab">
                                                        <div class="flex-content-center mb-3 width-40 height-40 border-width-2 border  mx-auto rounded-circle number_tab"
                                                            style="color: #67747c">
                                                            1
                                                        </div>
                                                        <div class="text_tab" style="color: #67747c ;">Nhập thông
                                                            tin</div>
                                                    </a>
                                                </li>
                                                <li
                                                    class="list-group-item text-center flex-shrink-0 flex-xl-shrink-1 tab_color">
                                                    <a class="" href="#wizard-validation-classic-step2"
                                                        data-toggle="tab">
                                                        <div class="flex-content-center mb-3 width-40 height-40 border  border-width-2  mx-auto rounded-circle number_tab"
                                                            style="color: #67747c">
                                                            2
                                                        </div>
                                                        <div class="text_tab" style="color: #67747c ;">Thanh toán</div>
                                                    </a>
                                                </li>
                                                {{-- <li
                                                    class=" list-group-item text-center flex-shrink-0 flex-md-shrink-1 tab_color">
                                                    <a class="" href="#wizard-validation-classic-step3"
                                                        data-toggle="tab">
                                                        <div class="flex-content-center mb-3 width-40 height-40 border  border-width-2  mx-auto rounded-circle number_tab"
                                                            style="color: #67747c">
                                                            3
                                                        </div>
                                                        <div class="text_tab" style="color: #67747c ;">Xác Nhận đơn Đơn hàng!</div>
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                        <!-- END Step Tabs -->
                                        <hr>
                                        <!-- Form -->
                                        <form class="js-wizard-validation-classic-form"
                                            action="{{ route('Tous.xu-ly-dattour') }}" method="post">

                                            <!-- Steps Content -->
                                            {{ csrf_field() }}
                                            <input type="hidden" name="ma_chuong_trinh" id="ma_chuong_trinh" value="{{$chuongtrinhtour->ma_tour}}">
                                            <input type="hidden" name="thanh_tien" id="thanh_tien" value="0">
                                            <input type="hidden" name="so_luong_than_nhan" id="so_luong_than_nhan" value="">
                                            <div class="block-content block-content-full tab-content"
                                                style="min-height: 265px;">
                                                <!-- Step 1 -->
                                                <div class="tab-pane active" id="wizard-validation-classic-step1"
                                                    role="tabpanel">
                                                    <div class="row">
                                                        <!-- Input -->
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Họ Và Tên
                                                                </label>
                                                                <input type="text" class="form-control {{ $errors->has('firstName') ? 'is-invalid' : '' }}"
                                                                    name="firstName">
                                                                <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->


                                                        <!-- Input -->
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="r">
                                                                <label class="form-label">
                                                                    Gmail
                                                                </label>

                                                                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email">
                                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->

                                                        <!-- Input -->
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Số điện thoại
                                                                </label>

                                                                <input type="number"  class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="phone">
                                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                        <!-- Input -->
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    CMND
                                                                </label>
                                                                <input type="number" class="form-control form-control {{ $errors->has('cmnd') ? 'is-invalid' : '' }}" name="cmnd"
                                                                    placeholder="">
                                                                <span class="text-danger">{{ $errors->first('cmnd') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Ngày sinh
                                                                </label>
                                                                <input class="form-control {{ $errors->has('ngay_sinh_khach_hanh') ? 'is-invalid' : '' }}" type="date" value="" name="ngay_sinh_khach_hanh" id="ngay_sinh_khach_hanh">
                                                                <span class="text-danger">{{ $errors->first('ngay_sinh_khach_hanh') }}</span>

                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="js-form-message">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Giới
                                                                        tính</label>
                                                                    <select class="form-control {{ $errors->has('gioi_tinh_khach_hang') ? 'is-invalid' : '' }}" id="gioi_tinh_khach_hang" name="gioi_tinh_khach_hang">
                                                                        <option selected="" disabled="">Chọn giới tính
                                                                        </option>
                                                                        <option>Nam</option>
                                                                        <option>Nữ</option>
                                                                    </select>
                                                                    <span class="text-danger">{{ $errors->first('gioi_tinh_khach_hang') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Địa chỉ
                                                                </label>
                                                                <input type="text" class="form-control {{ $errors->has('gioi_tinh_khach_hang') ? 'is-invalid' : '' }}" name="diachi"
                                                                    placeholder="">
                                                                    <span class="text-danger">{{ $errors->first('diachi') }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Người lớn
                                                                </label>
                                                                <input type="number" id="nguoi_lon"
                                                                    class="form-control so_nguoi" name="nguoi_lon" value="0"
                                                                    placeholder="0">
                                                                <div id="lasstName-error" class=""
                                                                    style="display: block;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Trẻ em (5 - 11 tuổi)
                                                                </label>
                                                                <input type="number" id="tre_em"
                                                                    class="form-control so_nguoi" name="tre_em" value="0"
                                                                    placeholder="0">
                                                                <div id="lasstName-error" class=""
                                                                    style="display: block;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Trẻ nhỏ ( 2 - < 5 tuổi) </label> <input
                                                                        type="number" id="tre_con"
                                                                        class="form-control so_nguoi" name="tre_con" value="0"
                                                                        placeholder="0">
                                                                        <div id="lasstName-error" class=""
                                                                            style="display: block;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 mb-4">
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Sơ sinh (nhỏ hơn 2 tuổi)
                                                                </label>
                                                                <input type="number" id="so_sinh"
                                                                    class="form-control so_nguoi" name="so_sinh" value="0"
                                                                    placeholder="0">
                                                                <div id="lasstName-error" class=""
                                                                    style="display: block;"></div>
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                        <div class="w-100"></div>

                                                        <div class="w-100"></div>
                                                        
                                                        <div class="col-12 mb-5">
                                                            <!-- Input -->
                                                            <div class="">
                                                                <label class="form-label">
                                                                    Ghi chú
                                                                </label>

                                                                <div class="input-group">
                                                                    <textarea class="form-control" rows="4" name="text"
                                                                        placeholder="" aria-label=""
                                                                        data-msg="Please enter a reason."
                                                                        data-error-class="u-has-error"
                                                                        data-success-class="u-has-success"
                                                                        aria-describedby="text-error"></textarea>
                                                                </div>
                                                                <div id="text-error" class="" style="display: block;">
                                                                </div>
                                                            </div>
                                                            <!-- End Input -->
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <h2>GIÁ TOUR CƠ BẢN </h2>
                                                        </div>
                                                        <div class="col-12">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr class="tb-title">
                                                                        <td>Người lớn (Từ 12 tuổi trở lên)</td>
                                                                        <td>Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</td>
                                                                        <td>Trẻ nhỏ (Từ 2 tuổi đến dưới 5 tuổi)</td>
                                                                        <td>Em bé (Dưới 2 tuổi)</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td data-title="Người lớn">{{ number_format($chuongtrinhtour->gia_tour,0,'.','.')." đ" }}</td>
                                                                        <td data-title="Trẻ em">{{ number_format($chuongtrinhtour->gia_tour - $chuongtrinhtour->gia_tour*0.2,0,'.','.')." đ" }}</td>
                                                                        <td data-title="Trẻ nhỏ">0<span> đ</span></td>
                                                                        <td data-title="Em bé">0<span> đ</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div id="form_hanh_khach" name="Form_hanh_khach"
                                                            class="row m-0">
                                                            
                                                        </div>
                                                        <div class="w-100"></div>

                                                        <div class="col-sm-12 align-self-end mt-5">
                                                            <div class="text-right">
                                                                <button type="button" class="btn btn-alt-secondary"
                                                                    data-wizard="next">
                                                                    Tiếp Theo <i class="fa fa-angle-right ml-5"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Step 1 -->

                                                <!-- Step 2 -->
                                                <div class="tab-pane" id="wizard-validation-classic-step2"
                                                    role="tabpanel">
                                                    <div class="pt-4 pb-5 px-5">
                                                        <h5 id="scroll-description"
                                                            class="font-size-21 font-weight-bold text-dark mb-4">
                                                            Chọn phương thức thanh toán
                                                        </h5>
                                                        <!-- Nav Classic -->
                                                        <ul class="nav nav-classic nav-choose border-0 nav-justified border mx-n3"
                                                            role="tablist">                                                           
                                                            <li class="nav-item mx-3 mb-4 mb-md-0">  
                                                              <a class=" rounded py-5 border-width-2 border nav-link font-weight-medium active"                                                                    
                                                                    id="thanh_toan_truc_tiep_tab" name="truc_tiep"
                                                                    data-toggle="pill" href="#thanh_toan_truc_tiep"
                                                                    role="tab" aria-controls="" aria-selected="true">
                                                                    
                                                                    <div
                                                                        class="height-25 width-25 flex-content-center bg-primary rounded-circle position-absolute left-0 top-0 ml-2 mt-2">
                                                                        <i
                                                                            class="flaticon-tick text-white font-size-15"></i>
                                                                    </div>
                                                                    <div
                                                                        class="d-md-flex justify-content-md-center align-items-md-center flex-wrap">
                                                                        <img class="img-fluid mb-3"
                                                                            src="{{asset('Home/img/logo_pay/thanhtoan.png')}}"
                                                                            alt="Image-Description">
                                                                        <div class="w-100 text-dark">Thanh toán trưc tiếp</div>
                                                                    </div>
                                                                </a>                                                                
                                                            </li>
                                                            <li class="nav-item mx-3 mb-4 mb-md-0">
                                                                <a class=" vnpay rounded py-5 border-width-2 border nav-link font-weight-medium "
                                                                    id="pills-one-example2-tab" data-toggle="pill"
                                                                    href="#pills-one-example2" role="tab"
                                                                    aria-controls="pills-one-example2"
                                                                    aria-selected="true">
                                                                    <input type="hidden" name="thanh_toan" id="thanh_toan" value="0">
                                                                    <div
                                                                        class="height-25 width-25 flex-content-center bg-primary rounded-circle position-absolute left-0 top-0 ml-2 mt-2">
                                                                        <i
                                                                            class="flaticon-tick text-white font-size-15"></i>
                                                                    </div>
                                                                    <div
                                                                        class="d-md-flex justify-content-md-center align-items-md-center flex-wrap">
                                                                        <img class="img-fluid mb-3 pb-1"
                                                                            src="{{asset('Home/img/199x35/img1.jpg')}}"
                                                                            alt="Image-Description">
                                                                        <div class="w-100 text-dark">Thanh toán ngân
                                                                            hàng</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                        <!-- End Nav Classic -->

                                                        <!-- Tab Content -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade pt-8 show active"
                                                                id="thanh_toan_truc_tiep" role="tabpanel"
                                                                aria-labelledby="thanh_toan_truc_tiep_tab">
                                                                <form action="">
                                                                    <button type="submit"
                                                                        class="btn btn-primary w-100 rounded-sm transition-3d-hover font-size-16 font-weight-bold py-3"
                                                                        data-wizard="next">Tiếp Tục
                                                                    </button>
                                                                    <div class="col-sm-12 mt-5">
                                                                        <div class="col-6">
                                                                            <a href="#" class="btn btn-alt-secondary disabled"data-wizard="prev">
                                                                                <i class="fa fa-angle-left mr-5"></i> Quay lại
                                                                            </a>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="tab-pane fade pt-8" id="pills-one-example2"
                                                                role="tabpanel"
                                                                aria-labelledby="pills-one-example2-tab">
                                                                <!-- Payment Form -->
                                                                    <button type="submit"
                                                                    class="btn btn-primary w-100 rounded-sm transition-3d-hover font-size-16 font-weight-bold py-3"
                                                                    data-wizard="next">Tiếp Tục
                                                                </button>
                                                                
                                                                <!-- End Payment Form -->
                                                            </div>

                                                            <div class="tab-pane fade pt-8" id="pills-two-example2"
                                                                role="tabpanel"
                                                                aria-labelledby="pills-two-example2-tab">
                                                                <form class="js-validate" novalidate="novalidate">
                                                                    <!-- Login -->
                                                                    <div id="login" data-target-group="idForm">
                                                                        <!-- Form Group -->
                                                                        <div class="form-group">
                                                                            <div class="js-form-message js-focus-state">
                                                                                <label class="sr-only"
                                                                                    for="signinEmail">Email</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"
                                                                                            id="signinEmailLabel">
                                                                                            <span
                                                                                                class="fas fa-user"></span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <input type="email"
                                                                                        class="form-control"
                                                                                        name="email" id="signinEmail"
                                                                                        placeholder="Email"
                                                                                        aria-label="Email"
                                                                                        aria-describedby="signinEmailLabel"
                                                                                        required=""
                                                                                        data-msg="Please enter a valid email address."
                                                                                        data-error-class="u-has-error"
                                                                                        data-success-class="u-has-success">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Form Group -->
                                                                        
                                                                        <!-- Form Group -->
                                                                        <div class="form-group mb-4">
                                                                            <div class="js-form-message js-focus-state">
                                                                                <label class="sr-only"
                                                                                    for="signinPassword">Password</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"
                                                                                            id="signinPasswordLabel">
                                                                                            <span
                                                                                                class="fas fa-lock"></span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <input type="password"
                                                                                        class="form-control"
                                                                                        name="password"
                                                                                        id="signinPassword"
                                                                                        placeholder="Password"
                                                                                        aria-label="Password"
                                                                                        aria-describedby="signinPasswordLabel"
                                                                                        required=""
                                                                                        data-msg="Your password is invalid. Please try again."
                                                                                        data-error-class="u-has-error"
                                                                                        data-success-class="u-has-success">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Form Group -->

                                                                        <div class="mb-2">
                                                                            <button type="submit"
                                                                                class="btn btn-block btn-primary transition-3d-hover">Thanh
                                                                                Toán</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- End Tab Content -->
                                                    </div>
                                                </div>
                                                <!-- END Step 2 -->
                                                <!-- END Step 3 -->
                                            </div>
                                            <!-- END Steps Content -->

                                            <!-- Steps Navigation -->
                                            {{-- <div class="block-content block-content-sm block-content-full bg-body-light">
                                                               <div class="row">
                                                                      <div class="col-6">
                                                                      <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                                             <i class="fa fa-angle-left mr-5"></i> Previous
                                                                      </button>
                                                                      </div>
                                                                      <div class="col-6 text-right">
                                                                      <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                                             Next <i class="fa fa-angle-right ml-5"></i>
                                                                      </button>
                                                                      <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                                                             <i class="fa fa-check mr-5"></i> Submit
                                                                      </button>
                                                                      </div>
                                                               </div>
                                                               </div> --}}
                                            <!-- END Steps Navigation -->
                                        </form>
                                        <!-- END Form -->
                                    </div>
                                    <!-- END Validation Wizard Classic -->
                                </div>
                            </div>
                            <!-- END Validation Wizards -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="shadow-soft bg-white rounded-sm">
                    <div class="pt-5 pb-3 px-5 border-bottom">
                        <a href="#" class="d-block mb-3">
                            <img class="img-fluid rounded-sm"
                                src="{{ asset('Home/img/tour').'/'.$chuongtrinhtour->hinh_anh}}"
                                alt="Image-Description">
                        </a>
                        <a href="#" class="text-dark font-weight-bold mb-2 d-block">{{ $chuongtrinhtour->ten_tour }}</a>
                        <div class="mb-1 flex-horizontal-center text-gray-1">
                            <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> United Kingdom
                        </div>
                    </div>
                    <!-- Basics Accordion -->
                    <div id="basicsAccordion">
                        <!-- Card -->
                        <div class="card rounded-0 border-top-0 border-left-0 border-right-0">
                            <div class="card-header card-collapse bg-transparent border-0" id="basicsHeadingOne">
                                <h5 class="mb-0">
                                    <button type="button"
                                        class="btn btn-link border-0 btn-block d-flex justify-content-between card-btn py-3 px-4 font-size-17 font-weight-bold text-dark"
                                        data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true"
                                        aria-controls="basicsCollapseOne">
                                        Thông tin
                                        <span class="card-btn-arrow font-size-14 text-dark">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            
                            <div id="basicsCollapseOne" class="collapse show" aria-labelledby="basicsHeadingOne"
                                data-parent="#basicsAccordion">
                                <div class="card-body px-4 pt-0">
                                    <!-- Fact List -->
                                    <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Ngày khởi hành</span>
                                            <span class="text-secondary">22/09/2020</span>
                                        </li>

                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Thời gian</span>
                                            <span class="text-secondary">{{ $chuongtrinhtour->so_ngay }} Ngày
                                                {{ $chuongtrinhtour->so_dem }} đêm</span>
                                        </li>

                                        {{-- <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Loại Tour</span>
                                            <span class="text-secondary">Daily Activity</span>
                                        </li> --}}
                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium" >Giá Tour</span>
                                            <span class="text-secondary" >{{ number_format($chuongtrinhtour->gia_tour,0,'.','.')."  VNĐ" }}</span>
                                            <input type="hidden" id="gia_tour" value="{{ $chuongtrinhtour->gia_tour}}">
                                        </li>
                                    </ul>
                                    <!-- End Fact List -->
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card rounded-0 border-top-0 border-left-0 border-right-0 ">
                            {{-- <div class="card-header card-collapse bg-transparent border-0 show" id="basicsHeadingTwo">
                                <h5 class="mb-0">
                                    <button type="button"
                                        class="btn btn-link border-0 btn-block d-flex justify-content-between card-btn py-3 px-4 font-size-17 font-weight-bold text-dark"
                                        data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false"
                                        aria-controls="basicsCollapseTwo">
                                        Extra

                                        <span class="card-btn-arrow font-size-14 text-dark">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </button>
                                </h5>
                            </div> --}}
                            {{-- <div id="basicsCollapseTwo" class="collapse show" aria-labelledby="basicsHeadingTwo"
                                data-parent="#basicsAccordion">
                                <div class="card-body px-4 pt-0">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid.
                                </div>
                            </div> --}}
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card rounded-0 border-top-0 border-left-0 border-right-0">
                            <div class="card-header card-collapse bg-transparent border-0" id="basicsHeadingFour">
                                <h5 class="mb-0">
                                    <button type="button"
                                        class="btn btn-link border-0 btn-block d-flex justify-content-between card-btn py-3 px-4 font-size-17 font-weight-bold text-dark"
                                        data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false"
                                        aria-controls="basicsCollapseFour">
                                        Hoá đơn

                                        <span class="card-btn-arrow font-size-14 text-dark">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div id="basicsCollapseFour" class="collapse show" aria-labelledby="basicsHeadingFour"
                                data-parent="#basicsAccordion">
                                <div class="card-body px-4 pt-0">
                                    <!-- Fact List -->
                                    <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Giá người lớn</span>
                                            <span style="font-size: 10px;font-weight:bold;" id="so_luong_nguoi_lon">0</span>
                                            <span class="text-secondary" id="gia_nguoi_lon">0</span>
                                        </li>

                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Giá trẻ em</span>
                                            <span style="font-size: 10px;font-weight:bold;" id="so_luong_tre_em">0</span>
                                            <span class="text-secondary" id="gia_tre_em">0</span>
                                        </li>

                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Giá trẻ sơ sinh</span>
                                            <span class="text-secondary">0</span>
                                        </li>

                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Tổng tạm</span>
                                            <span class="text-secondary" id="tong_tam">0</span>
                                        </li>

                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium">Thuế</span>
                                            <span class="text-secondary">10%</span>
                                        </li>
                                        <hr/>
                                        <li class="d-flex justify-content-between py-2 font-size-17 font-weight-bold">
                                            <span class="font-weight-bold">
                                                <h6><b> Tổng tiền</b></h6>
                                            </span>
                                            <span class="">
                                                <h6 id="Tong">0</h6>
                                            </span>
                                        </li>
                                    </ul>
                                    <!-- End Fact List -->
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Basics Accordion -->
                </div>
            </div>
        </div>

    </div>
    </div>
</main>
@endsection

@section('js')

<script src="{{ asset ('Admin/js/codebase.core.min.js')}}"></script>
<script src="{{ asset ('Admin/js/codebase.app.min.js')}}"></script>
<script src="{{ asset ('Admin/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{ asset ('Admin/js/codebase.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset ('Admin/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{ asset ('Admin/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset ('Admin/js/plugins/jquery-validation/additional-methods.js')}}"></script>

<!-- Page JS Code -->
<script src="{{ asset ('Admin/js/pages/be_forms_wizard.min.js')}}"></script>
<!-- Page JS Plugins -->
<script>
    function number_format (number, decimals, dec_point, thousands_sep) {
        // Strip all characters but numerical ones.
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }
    //
    $(".vnpay").click(function(){
        $("#thanh_toan").val('1') ;
    });
    //
    $(".so_nguoi").change(function(){
        $("#gia_nguoi_lon").html("");
        $("#gia_tre_em").html("");
        $("#tong_tam").html("");
        $("#Tong").html("");
        $("#so_luong_nguoi_lon").html("");
        $("#so_luong_tre_em").html("");
        var nguoilon = $("#nguoi_lon").val();
        var treem = $("#tre_em").val();
        var trecon = $("#tre_con").val();
        var sosinh = $("#so_sinh").val();
        var item = Number(nguoilon) + Number(treem) + Number(trecon) + Number(sosinh);
        var gia_tour = parseFloat($("#gia_tour").val());
        var gia_nguoi_lon = gia_tour*nguoilon;
        var gia_tre_em = (gia_tour*treem) - ((gia_tour*treem)*0.3);
        var tong_tam = gia_tre_em + gia_nguoi_lon;
        var Tong_gia = tong_tam + tong_tam*0.1;

        $("#so_luong_nguoi_lon").append('x'+nguoilon);
        $("#so_luong_tre_em").append('x'+treem);
        $("#gia_nguoi_lon").append(number_format(gia_nguoi_lon,0,'.','.')+' VNĐ');
        $("#gia_tre_em").append(number_format(gia_tre_em,0,'.','.')+' VNĐ');
        $("#tong_tam").append(number_format(tong_tam,0,'.','.')+' VNĐ');
        $("#Tong").append(number_format(Tong_gia,0,'.','.')+' VNĐ');
        $("#thanh_tien").val(Tong_gia);
        $("#so_luong_than_nhan").val(item);
        $("#form_hanh_khach").html("");
        for(var i = 1 ; i <= item ; i++)
        {
            $("#form_hanh_khach").append('<div class="col-12 mt-4 mb-3 pt-2" style="background-color: #297cbb"> <h3 style="color: white">Hàng Khách'+i+'</h3> </div> <div class="col-sm-3 mb-4"> <div class=""> <label class="form-label"> Tên Hành Khách </label> <input type="text" class="form-control" id="hanh_khach" name="hanh_khach[]" placeholder="Họ và tên" > <div id="lasstName-error" class="" style="display: block;"></div></div> </div> <div class="col-sm-3 mb-4"> <div class="js-form-message"> <div class="form-group"> <label for="exampleFormControlSelect1">Giới tính</label> <select class="form-control" id="gioi_tinh" name="gioi_tinh[]"> <option selected disabled>Chọn giới tính</option> <option>Nam</option> <option>Nữ</option> </select> </div> </div> </div> <div class="col-sm-3 mb-4"> <div class=""> <label class="form-label"> Ngày sinh </label> <input class="form-control" type="date" value="" name="ngay_sinh[]" id="ngay_sinh"> <div id="lasstName-error" class="" style="display: block;"></div></div> </div> <div class="col-sm-3 mb-4"> <div class=""> <label class="form-label"> Tuổi </label> <input type="number" class="form-control" name="tuoi[]" id="tuoi" placeholder="Họ và tên" > <div id="lasstName-error" class="" style="display: block;"></div></div> </div>')
        }
    });
</script>
@endsection