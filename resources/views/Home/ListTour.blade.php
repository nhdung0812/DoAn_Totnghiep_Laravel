@extends('Home.Layout')
@section('content')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="container pt-5 pt-xl-8">

        <div class="row mb-5 mb-md-8 mt-xl-1 pb-md-1">
          
            <div class="col-lg-8 col-xl-9 order-md-1 order-lg-2">
                <!-- Shop-control-bar Title -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1">Tìm Thấy {{ $count}} Tour </h3> 

                </div>
                <!-- End shop-control-bar Title -->

                <!-- Slick Tab carousel -->
                <div class="u-slick__tab">
                    <!-- Nav Links -->
                   
                    <!-- End Nav Links -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-three-example1" role="tabpanel"
                            aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                            <ul class="d-block list-unstyled products-group prodcut-list-view">
                                <li class="card mb-5 overflow-hidden">
                                    <div class="product-item__outer w-100">
                                        <div class="row">
                                            <div class="col-md-5 col-xl-4">
                                                <div class="product-item__header">
                                                    <div class="position-relative">
                                                        <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
                                                            data-slides-show="1" data-slides-scroll="1"
                                                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                            data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                            data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                            data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img1.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img2.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img3.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img4.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img5.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img6.jpg"></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                <div class="w-100 position-relative m-4 m-md-0">
                                                    <div class="mb-2 pb-1">
                                                        <span
                                                            class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                        <span
                                                            class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                        <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                        </span>
                                                    </div>

                                                    <div
                                                        class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                        <button type="button" class="btn btn-sm btn-icon rounded-circle"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Save for later">
                                                            <span class="flaticon-heart-1 font-size-20"></span>
                                                        </button>
                                                    </div>
                                                    <a href="../tour/tour-single-v1.html">
                                                        <span
                                                            class="font-weight-bold font-size-17 text-dark d-flex mb-1">Stonehenge,
                                                            Windsor Castle, and Bath from London</span>
                                                    </a>
                                                    <div class="card-body p-0">
                                                        <a href="../tour/tour-single-v1.html" class="d-block mb-3">
                                                            <div
                                                                class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                <i
                                                                    class="icon flaticon-placeholder mr-2 font-size-20"></i>
                                                                Greater London, United Kingdom
                                                                <small class="px-1 font-size-15"> - </small>
                                                                <span class="text-primary font-size-14">View on
                                                                    map</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                <div class="border-xl-left border-color-7">
                                                    <div class="ml-md-4 ml-xl-0">
                                                        <div
                                                            class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                            <div class="d-flex flex-column mb-2">
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day
                                                                    Tours</span>
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1">3
                                                                    hours 45 minutes</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span
                                                                    class="font-weight-bold font-size-22">£350.00</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                            <a href="../tour/tour-single-v1.html"
                                                                class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View
                                                                Detail</a>
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
                                                            data-slides-show="1" data-slides-scroll="1"
                                                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                            data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                            data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                            data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img2.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img48.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img4.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img49.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img50.jpg"></a>
                                                            </div>
                                                            <div class="js-slide">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img51.jpg"></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                <div class="w-100 position-relative m-4 m-md-0">
                                                    <div class="mb-2 pb-1">
                                                        <span
                                                            class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                        <span
                                                            class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                        <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                        </span>
                                                    </div>

                                                    <div
                                                        class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                        <button type="button" class="btn btn-sm btn-icon rounded-circle"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Save for later">
                                                            <span class="flaticon-heart-1 font-size-20"></span>
                                                        </button>
                                                    </div>
                                                    <a href="../tour/tour-single-v2.html">
                                                        <span
                                                            class="font-weight-bold font-size-17 text-dark d-flex mb-1">Bosphorus
                                                            Strait and Black Sea Half-Day Cruise from Istanbul</span>
                                                    </a>
                                                    <div class="card-body p-0">
                                                        <a href="../tour/tour-single-v2.html" class="d-block mb-3">
                                                            <div
                                                                class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                <i
                                                                    class="icon flaticon-placeholder mr-2 font-size-20"></i>
                                                                Greater London, United Kingdom
                                                                <small class="px-1 font-size-15"> - </small>
                                                                <span class="text-primary font-size-14">View on
                                                                    map</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                <div class="border-xl-left border-color-7">
                                                    <div class="ml-md-4 ml-xl-0">
                                                        <div
                                                            class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                            <div class="d-flex flex-column mb-2">
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day
                                                                    Tours</span>
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1">3
                                                                    hours 45 minutes</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span
                                                                    class="font-weight-bold font-size-22">£350.00</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                            <a href="../tour/tour-single-v1.html"
                                                                class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View
                                                                Detail</a>
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
                                                            data-slides-show="1" data-slides-scroll="1"
                                                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                            data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                            data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                            data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img52.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img51.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img50.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img49.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img48.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img1.jpg"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                <div class="w-100 position-relative m-4 m-md-0">
                                                    <div class="mb-2 pb-1">
                                                        <span
                                                            class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                        <span
                                                            class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                        <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                        </span>
                                                    </div>

                                                    <div
                                                        class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                        <button type="button" class="btn btn-sm btn-icon rounded-circle"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Save for later">
                                                            <span class="flaticon-heart-1 font-size-20"></span>
                                                        </button>
                                                    </div>
                                                    <a href="../tour/tour-single-v1.html">
                                                        <span
                                                            class="font-weight-bold font-size-17 text-dark d-flex mb-1">Two
                                                            Capitals Tour of 7 days and 6 nights From Moscow</span>
                                                    </a>
                                                    <div class="card-body p-0">
                                                        <a href="../tour/tour-single-v1.html" class="d-block mb-3">
                                                            <div
                                                                class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                <i
                                                                    class="icon flaticon-placeholder mr-2 font-size-20"></i>
                                                                Greater London, United Kingdom
                                                                <small class="px-1 font-size-15"> - </small>
                                                                <span class="text-primary font-size-14">View on
                                                                    map</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                <div class="border-xl-left border-color-7">
                                                    <div class="ml-md-4 ml-xl-0">
                                                        <div
                                                            class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                            <div class="d-flex flex-column mb-2">
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day
                                                                    Tours</span>
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1">3
                                                                    hours 45 minutes</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span
                                                                    class="font-weight-bold font-size-22">£350.00</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                            <a href="../tour/tour-single-v1.html"
                                                                class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View
                                                                Detail</a>
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
                                                            data-slides-show="1" data-slides-scroll="1"
                                                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                            data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                            data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                            data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img4.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img5.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img9.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img50.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img49.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v2.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img3.jpg"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                <div class="w-100 position-relative m-4 m-md-0">
                                                    <div class="mb-2 pb-1">
                                                        <span
                                                            class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                        <span
                                                            class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                        <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                        </span>
                                                    </div>

                                                    <div
                                                        class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                        <button type="button" class="btn btn-sm btn-icon rounded-circle"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Save for later">
                                                            <span class="flaticon-heart-1 font-size-20"></span>
                                                        </button>
                                                    </div>
                                                    <a href="../tour/tour-single-v2.html">
                                                        <span
                                                            class="font-weight-bold font-size-17 text-dark d-flex mb-1">Two
                                                            Small-Group Blue Mountains Day Trip from Sydney with River
                                                            Cruise</span>
                                                    </a>
                                                    <div class="card-body p-0">
                                                        <a href="../tour/tour-single-v2.html" class="d-block mb-3">
                                                            <div
                                                                class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                <i
                                                                    class="icon flaticon-placeholder mr-2 font-size-20"></i>
                                                                Greater London, United Kingdom
                                                                <small class="px-1 font-size-15"> - </small>
                                                                <span class="text-primary font-size-14">View on
                                                                    map</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                <div class="border-xl-left border-color-7">
                                                    <div class="ml-md-4 ml-xl-0">
                                                        <div
                                                            class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                            <div class="d-flex flex-column mb-2">
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day
                                                                    Tours</span>
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1">3
                                                                    hours 45 minutes</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span
                                                                    class="font-weight-bold font-size-22">£350.00</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                            <a href="../tour/tour-single-v1.html"
                                                                class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View
                                                                Detail</a>
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
                                                            data-slides-show="1" data-slides-scroll="1"
                                                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic v4 u-slick__arrow-classic--v4 u-slick__arrow-centered--y rounded-circle"
                                                            data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left"
                                                            data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right"
                                                            data-pagi-classes="js-pagination text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-3 mb-0">
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img50.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img51.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img60.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img63.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img48.jpg"></a>
                                                            </div>
                                                            <div class="js-slide w-100">
                                                                <a href="../tour/tour-single-v1.html"
                                                                    class="d-block gradient-overlay-half-bg-gradient-v5 w-100"><img
                                                                        class="img-fluid min-height-230"
                                                                        src="../../assets/img/300x230/img5.jpg"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-5 flex-horizontal-center">
                                                <div class="w-100 position-relative m-4 m-md-0">
                                                    <div class="mb-2 pb-1">
                                                        <span
                                                            class="badge badge-pill bg-blue-1 text-white px-4 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1">Featured</span>
                                                        <span
                                                            class="badge badge-pill bg-pink-1 text-white px-3 py-1 font-size-14 font-weight-normal text-lh-1dot6 mb-1 ml-2">%25</span>
                                                        <span class="green-lighter ml-md-2 d-block d-md-inline">
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                            <small class="fas fa-star font-size-11"></small>
                                                        </span>
                                                    </div>

                                                    <div
                                                        class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block">
                                                        <button type="button" class="btn btn-sm btn-icon rounded-circle"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Save for later">
                                                            <span class="flaticon-heart-1 font-size-20"></span>
                                                        </button>
                                                    </div>
                                                    <a href="../tour/tour-single-v1.html">
                                                        <span
                                                            class="font-weight-bold font-size-17 text-dark d-flex mb-1">Bosphorus
                                                            Strait and Black Sea Half-Day Cruise from Istanbul</span>
                                                    </a>
                                                    <div class="card-body p-0">
                                                        <a href="../tour/tour-single-v1.html" class="d-block mb-3">
                                                            <div
                                                                class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                <i
                                                                    class="icon flaticon-placeholder mr-2 font-size-20"></i>
                                                                Greater London, United Kingdom
                                                                <small class="px-1 font-size-15"> - </small>
                                                                <span class="text-primary font-size-14">View on
                                                                    map</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-xl-3 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                <div class="border-xl-left border-color-7">
                                                    <div class="ml-md-4 ml-xl-0">
                                                        <div
                                                            class="text-center text-md-left text-xl-center d-flex flex-column mb-2 pb-1 ml-md-3 ml-xl-0">
                                                            <div class="d-flex flex-column mb-2">
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1 mb-2 pb-1 ml-md-2 ml-xl-0">Multi-day
                                                                    Tours</span>
                                                                <span
                                                                    class="font-weight-normal font-size-14 text-gray-1">3
                                                                    hours 45 minutes</span>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">From</span>
                                                                <span
                                                                    class="font-weight-bold font-size-22">£350.00</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-center justify-content-md-start justify-content-xl-center">
                                                            <a href="../tour/tour-single-v1.html"
                                                                class="btn btn-outline-primary d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">View
                                                                Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                            aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                            <div class="row">
                                @foreach ($list_tour as $item)
                                <div class="col-md-6 col-xl-4 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="{{ route('Tous.single',$item->ma_tour) }}"
                                                class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="min-height-230 bg-img-hero card-img-top"
                                                    src="{{ asset('Home/img/tour') }}/{{ $item->hinh_anh }}" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span
                                                    class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">{{ $item->ten_loai_tour }}</span>
                                                <span
                                                    class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">{{ $item->khuyen_mai }}</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart font-size-20"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small
                                                            class="mr-2">Giá</small>{{ number_format($item->gia_tour,0,'.','.')."  VNĐ" }}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="{{ route('Tous.single',$item->ma_tour) }}" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater
                                                    London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="{{ route('Tous.single',$item->ma_tour) }}"
                                                class="card-title font-size-17 font-weight-bold mb-0 text-dark">{{ $item->Tieu_de }}</a>
                                            <div class="my-2">
                                                <div
                                                    class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
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
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i>
                                                {{ $item->so_ngay}} Ngày {{ $item->so_dem }} Đêm
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
                        <ul
                            class="list-pagination-1 pagination border border-color-4 rounded-sm overflow-auto overflow-xl-visible justify-content-md-center align-items-center py-2 mb-0">
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
<script>
    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 1199.98,
            hideTimeOut: 0
        });

        // Page preloader
        setTimeout(function() {
          $('#jsPreloader').fadeOut(500)
        }, 800);
    });

    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of google map
        function initMap() {
            $.HSCore.components.HSGMap.init('.js-g-map');
        }

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of datepicker
        $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

        // initialization of forms
        $.HSCore.components.HSRangeSlider.init('.js-range-slider');

        // initialization of select
        $.HSCore.components.HSSelectPicker.init('.js-select');

        // initialization of quantity counter
        $.HSCore.components.HSQantityCounter.init('.js-quantity');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>
@endsection