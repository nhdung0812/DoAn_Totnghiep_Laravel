@extends('Home.Layout')
@section('content')
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <div class="container pt-5 pt-xl-8">
                <div class="row mb-5 mb-md-8 mt-xl-1 pb-md-1">
                    <div class="col-lg-4 col-xl-3 order-lg-1 width-md-50">
                        <div class="navbar-expand-lg navbar-expand-lg-collapse-block">
                            <button class="btn d-lg-none mb-5 p-0 collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="far fa-caret-square-down text-primary font-size-20 card-btn-arrow ml-0"></i>
                                <span class="text-primary ml-2">Sidebar</span>
                            </button>
                            <div id="sidebar" class="collapse navbar-collapse">
                                <div class="mb-6 w-100">
                                    <div class="pb-4 mb-2">
                                        <div class="sidebar border border-color-1 rounded-xs">
                                            <div class="p-4 mx-1 mb-1">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1  font-weight-normal mb-0 text-left">Bạn muốn tìm</span>
                                                <div class="mb-4">
                                                    <div class="input-group border-bottom border-width-2 border-color-1">
                                                        <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold font-size-22"></i>
                                                      <input type="text" class="form-control font-weight-bold font-size-16 shadow-none hero-form font-weight-bold border-0 p-0" placeholder="Bạn muốn đi đâu ?" aria-label="Keyword or title" aria-describedby="keywordInputAddon">
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">khởi hành - kết thúc</span>
                                                <div class="border-bottom border-width-2 border-color-1 mb-4">
                                                    <div id="datepickerWrapperFromOne" class="u-datepicker input-group flex-nowrap">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2 font-size-21">
                                                                <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                        <input class="js-range-datepicker font-size-16 ml-1 shadow-none font-weight-bold form-control hero-form bg-transparent border-0 flatpickr-input p-0" type="date"
                                                            data-rp-wrapper="#datepickerWrapperFromOne"
                                                            data-rp-type="range"
                                                            data-rp-date-format="M d / Y"
                                                            data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->

                                                <div class="col dropdown-custom px-0 mb-5">
                                                    <!-- Input -->
                                                    <span class="d-block text-gray-1 text-left font-weight-normal mb-2">Thành phố</span>
                                                    <div class="flex-horizontal-center border-bottom border-width-2 border-color-1 pb-2">
                                                        <i class="flaticon-backpack d-flex align-items-center mr-2 font-size-24 text-primary"></i>
                                                        <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav"
                                                            data-style="btn-sm mt-1 py-0 px-0  text-black font-size-16 font-weight-semi-bold d-flex align-items-center">
                                                            <option value="one" selected>Chọn thành phố</option>
                                                            <option value="two">Village Tour</option>
                                                            <option value="three">Holiday Tour</option>
                                                            <option value="four">City Tour</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary height-60 w-100 font-weight-bold mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2 font-size-17"></i>Tìm kiếm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-4 mb-2">
                                        <a href="https://goo.gl/maps/kCVqYkjHX3XvoC4B9" class="d-block border border-color-1 rounded-xs">
                                            <img src="../../assets/img/map-markers/map.jpg" alt="" width="100%">
                                        </a>
                                    </div>

                                    <div class="sidenav border border-color-8 rounded-xs">
                                        <!-- Accordiaon -->
                                        <div id="shopRatingAccordion" class="accordion rounded-0 shadow-none border-bottom">
                                            <div class="border-0">
                                                <div class="card-collapse" id="shopCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#shopRatingOne" aria-expanded="false" aria-controls="shopRatingOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark text-lh-1dot4">Star Ratings</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="shopRatingOne" class="collapse show" aria-labelledby="shopCategoryHeadingOne" data-parent="#shopRatingAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5">
                                                        <!-- Checkboxes -->
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandAdidas">
                                                                <label class="custom-control-label text-lh-inherit text-color-1" for="brandAdidas">
                                                                    <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                               <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                                                               <label class="custom-control-label text-lh-inherit text-color-1" for="brandNewBalance">
                                                                    <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                               </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                              <input type="checkbox" class="custom-control-input" id="brandNike">
                                                              <label class="custom-control-label text-lh-inherit text-color-1" for="brandNike">
                                                                    <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                              </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                              <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                                                              <label class="custom-control-label text-lh-inherit text-color-1" for="brandFredPerry">
                                                                    <div class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fas fa-star"></i>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                              </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="shopCartAccordion" class="accordion rounded shadow-none">
                                            <div class="border-0">
                                                <div class="card-collapse" id="shopCardHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#shopCardOne" aria-expanded="false" aria-controls="shopCardOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark">Price Range ($)</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="shopCardOne" class="collapse show" aria-labelledby="shopCardHeadingOne" data-parent="#shopCartAccordion">
                                                    <div class="card-body pt-0 px-5">
                                                        <div class="pb-3 mb-1 d-flex text-lh-1">
                                                            <span>£</span>
                                                            <span id="rangeSliderExample3MinResult" class=""></span>
                                                            <span class="mx-0dot5"> — </span>
                                                            <span>£</span>
                                                            <span id="rangeSliderExample3MaxResult" class=""></span>
                                                        </div>
                                                        <input class="js-range-slider" type="text"
                                                        data-extra-classes="u-range-slider height-35"
                                                        data-type="double"
                                                        data-grid="false"
                                                        data-hide-from-to="true"
                                                        data-min="0"
                                                        data-max="3456"
                                                        data-from="200"
                                                        data-to="3456"
                                                        data-prefix="$"
                                                        data-result-min="#rangeSliderExample3MinResult"
                                                        data-result-max="#rangeSliderExample3MaxResult">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                        <div id="cityCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button" class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed" data-toggle="collapse" data-target="#cityCategoryOne" aria-expanded="false" aria-controls="cityCategoryOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span class="font-weight-bold font-size-17 text-dark mb-3">City</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fas fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="cityCategoryOne" class="collapse show" aria-labelledby="cityCategoryHeadingOne" data-parent="#cityCategoryAccordion">
                                                    <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandamsterdam">
                                                                <label class="custom-control-label" for="brandamsterdam">Amsterdam</label>
                                                            </div>
                                                            <span>749</span>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandrotterdam">
                                                                <label class="custom-control-label" for="brandrotterdam">Rotterdam</label>
                                                            </div>
                                                            <span>630</span>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandvalkenburg">
                                                                <label class="custom-control-label" for="brandvalkenburg">Valkenburg</label>
                                                            </div>
                                                            <span>58</span>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="brandeindhoven">
                                                                <label class="custom-control-label" for="brandeindhoven">Eindhoven</label>
                                                            </div>
                                                            <span>29</span>
                                                        </div>
                                                        <!-- End Checkboxes -->

                                                        <!-- View More - Collapse -->
                                                        <div class="collapse" id="collapseBrand3">
                                                            <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="gucci">
                                                                <label class="custom-control-label" for="gucci">Gucci</label>
                                                                </div>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mango">
                                                                    <label class="custom-control-label" for="mango">Mango</label>
                                                                </div>
                                                                <span>1</span>
                                                            </div>
                                                        </div>
                                                        <!-- End View More - Collapse -->

                                                        <!-- Link -->
                                                        <a class="link link-collapse small font-size-1 mt-2" data-toggle="collapse" href="#collapseBrand3" role="button" aria-expanded="false" aria-controls="collapseBrand3">
                                                          <span class="link-collapse__default font-size-14">Show all 25</span>
                                                          <span class="link-collapse__active font-size-14">Show less</span>
                                                        </a>
                                                        <!-- End Link -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Accordion -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 order-md-1 order-lg-2">
                        <!-- Shop-control-bar Title -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            {{-- <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1">London: 3292 tours found</h3> --}}

                        </div>
                        <!-- End shop-control-bar Title -->

                        <!-- Slick Tab carousel -->
                        <div class="u-slick__tab">
                            <!-- Nav Links -->
                            <div class="mb-5">
                                <ul class="nav flex-nowrap border border-radius-3 tab-nav align-items-center py-2 px-0" role="tablist">
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Recommended
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-auto" data-style="btn-sm py-1 px-4 px-wd-5 font-weight-normal font-size-15  text-gray-1 d-flex align-items-center">
                                          <option value="one" selected>Giá</option>
                                          <option value="two">Two</option>
                                          <option value="three">Three</option>
                                          <option value="four">Four</option>
                                        </select>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <select class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-auto" data-style="btn-sm py-1 px-4 px-wd-5 font-weight-normal font-size-15  text-gray-1 d-flex align-items-center">
                                          <option value="one" selected>Đánh giá</option>
                                          <option value="two">Two</option>
                                          <option value="three">Three</option>
                                          <option value="four">Four</option>
                                        </select>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Guest Rating
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Distance
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                        <a href="#" class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Top Reviewed
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Nav Links -->

                            <!-- Tab Content -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                                    <ul class="d-block list-unstyled products-group prodcut-list-view">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img1.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img2.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img3.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img4.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img5.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img6.jpg"></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-2 pb-1">
                                                                <span class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                                <span class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                                <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../tour/tour-single-v1.html">
                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Stonehenge, Windsor Castle, and Bath from London</span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../tour/tour-single-v1.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="border-xl-left border-color-7">
                                                            <div class="ml-md-4 ml-xl-0">
                                                                <div class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                                    <div class="d-flex flex-column mb-2">
                                                                        <span class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day Tours</span>
                                                                        <span class="font-weight-normal font-size-14 text-gray-1">3 hours 45 minutes</span>
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                        <span class="font-weight-bold font-size-22">£350.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                                    <a href="../tour/tour-single-v1.html" class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img2.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img48.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img4.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img49.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img50.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img51.jpg"></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-2 pb-1">
                                                                <span class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                                <span class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                                <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../tour/tour-single-v2.html">
                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../tour/tour-single-v2.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="border-xl-left border-color-7">
                                                            <div class="ml-md-4 ml-xl-0">
                                                                <div class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                                    <div class="d-flex flex-column mb-2">
                                                                        <span class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day Tours</span>
                                                                        <span class="font-weight-normal font-size-14 text-gray-1">3 hours 45 minutes</span>
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                        <span class="font-weight-bold font-size-22">£350.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                                    <a href="../tour/tour-single-v1.html" class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img52.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img51.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img50.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img49.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img48.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img1.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-2 pb-1">
                                                                <span class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                                <span class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                                <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../tour/tour-single-v1.html">
                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Two Capitals Tour of 7 days and 6 nights From Moscow</span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../tour/tour-single-v1.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="border-xl-left border-color-7">
                                                            <div class="ml-md-4 ml-xl-0">
                                                                <div class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                                    <div class="d-flex flex-column mb-2">
                                                                        <span class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day Tours</span>
                                                                        <span class="font-weight-normal font-size-14 text-gray-1">3 hours 45 minutes</span>
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                        <span class="font-weight-bold font-size-22">£350.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                                    <a href="../tour/tour-single-v1.html" class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img4.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img5.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img9.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img50.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img49.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v2.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img3.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-2 pb-1">
                                                                <span class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                                <span class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                                <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../tour/tour-single-v2.html">
                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Two Small-Group Blue Mountains Day Trip from Sydney with River Cruise</span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../tour/tour-single-v2.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="border-xl-left border-color-7">
                                                            <div class="ml-md-4 ml-xl-0">
                                                                <div class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                                    <div class="d-flex flex-column mb-2">
                                                                        <span class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day Tours</span>
                                                                        <span class="font-weight-normal font-size-14 text-gray-1">3 hours 45 minutes</span>
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                        <span class="font-weight-bold font-size-22">£350.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                                    <a href="../tour/tour-single-v1.html" class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                                                                    data-slides-show="1"
                                                                    data-slides-scroll="1"
                                                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                                    data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img50.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img51.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img60.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img63.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img48.jpg"></a>
                                                                    </div>
                                                                    <div class="js-slide w-100">
                                                                        <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img class="img-fluid min-height-230" src="../../assets/img/300x230/img5.jpg"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-2 pb-1">
                                                                <span class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                                <span class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                                <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                    <small class="fas fa-star font-size-11"></small>
                                                                </span>
                                                            </div>

                                                            <div class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                                <button type="button" class="btn btn-sm btn-icon rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                                    <span class="flaticon-heart-1 font-size-20"></span>
                                                                </button>
                                                            </div>
                                                            <a href="../tour/tour-single-v1.html">
                                                                <span class="font-weight-bold font-size-17 text-dark d-flex mb-1">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <a href="../tour/tour-single-v1.html" class="d-block mb-3">
                                                                    <div class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                                                        <small class="px-1 font-size-15"> - </small>
                                                                        <span class="text-primary font-size-14">View on map</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div class="border-xl-left border-color-7">
                                                            <div class="ml-md-4 ml-xl-0">
                                                                <div class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                                    <div class="d-flex flex-column mb-2">
                                                                        <span class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day Tours</span>
                                                                        <span class="font-weight-normal font-size-14 text-gray-1">3 hours 45 minutes</span>
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                        <span class="font-weight-bold font-size-22">£350.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                                   <a href="../tour/tour-single-v1.html" class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                                    <div class="row">
                                        @foreach ($list_tour as $item)
                                        <div class="col-md-6 col-xl-4 mb-3 mb-md-4 pb-1">
                                            <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                                <div class="position-relative mb-2">
                                                    <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                        <img class="min-height-230 bg-img-hero card-img-top" src="{{ asset('Home/img/tour') }}/{{ $item->hinh_anh }}" alt="img">
                                                    </a>
                                                    <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                        <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">{{ $item->ten_loai_tour }}</span>
                                                        <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">{{ $item->khuyen_mai }}</span>
                                                    </div>
                                                    <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                      <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                        <span class="flaticon-valentine-heart font-size-20"></span>
                                                      </button>
                                                    </div>
                                                    <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-3 pb-2">
                                                            <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">Giá</small>{{ number_format($item->gia_tour,0,'.','.')."    VNĐ" }}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-4 py-2">
                                                    <a href="../tour/tour-single-v1.html" class="d-block">
                                                        <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                            <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                        </div>
                                                    </a>
                                                    <a href="../tour/tour-single-v1.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">{{ $item->ten_tour }}</a>
                                                    <div class="my-2">
                                                        <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                            <div class="green-lighter mr-2">
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                            <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                        <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> {{ $item->so_ngay}} Ngày {{ $item->so_dem }} Đêm
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Content -->
                            <div class="text-center text-md-left font-size-14 mb-3 text-lh-1"></div>
                                <nav aria-label="Page navigation">
                                    <ul class="list-pagination-1 pagination border border-color-4 rounded-sm overflow-auto overflow-xl-visible justify-content-md-center align-items-center py-2 mb-0">
                                        {{ $list_tour->render() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Slick Tab carousel -->
                    </div>
                </div>
            </div>
        </main>
@endsection

@section('js')

@endsection
