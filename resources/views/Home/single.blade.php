@extends('Home.Layout')
@section('content')
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content">
            <!-- Breadcrumb -->
            <div class="border-bottom mb-7">
                <div class="container">
                    <nav class="py-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter mb-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="#">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="#">Tous</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="#"> {{"Du lịch ".$singletour[0]->ten_loai_tour}}</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Park Avenue Baker Street London</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="d-block d-md-flex flex-center-between align-items-start mb-3">
                            <div class="mb-1">
                                <div class="mb-2 mb-md-0">
                                    <h4 class="font-size-23 font-weight-bold mb-1 mr-3">{{$singletour[0]->ten_tour}}</h4>
                                </div>
                                <div class="d-block d-xl-flex flex-horizontal-center">
                                    <div class="d-block d-md-flex flex-horizontal-center font-size-14 text-gray-1 mb-2 mb-xl-0">
                                        <i class="icon flaticon-placeholder mr-2 font-size-20"></i> Greater London, United Kingdom
                                        <a href="#" class="ml-1 d-block d-md-inline"> - View on map</a>
                                    </div>
                                    <div class="mr-4 mb-2 mb-md-0 flex-horizontal-center">
                                        <div class="ml-xl-3 font-size-10 letter-spacing-2">
                                            <span class="d-block green-lighter ml-1">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </span>
                                        </div>
                                        <span class="font-size-14 text-gray-1 ml-2">(1,186 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-borderless list-group-horizontal custom-social-share">
                                <li class="list-group-item px-1">
                                    <a href="#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                        <i class="flaticon-like font-size-18 text-dark"></i>
                                    </a>
                                </li>
                                <li class="list-group-item px-1">
                                    <a href="#" class="height-45 width-45 border rounded border-width-2 flex-content-center">
                                        <i class="flaticon-share font-size-18 text-dark"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="py-2 mb-4">
                            <ul class="mb-4 list-group list-group-borderless list-group-horizontal row">
                                <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                    <i class="flaticon-alarm text-primary font-size-22 mr-2 d-block"></i>
                                    <div class="ml-1 text-gray-1">{{ date('dd/mm/yy',$singletour[0]->so_ngay) ." Ngày"}}</div>
                                </li>
                                <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                    <i class="flaticon-social text-primary font-size-22 mr-2 d-block"></i>
                                    <div class="ml-1 text-gray-1">Số lượng : {{$singletour[0]->so_cho}}</div>
                                </li>
                                <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                    <i class="flaticon-wifi-signal text-primary font-size-22 mr-2 d-block"></i>
                                    <div class="ml-1 text-gray-1">Có wifi</div>
                                </li>
                                <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                    <i class="flaticon-month text-primary font-size-22 mr-2 d-block"></i>
                                    {{--  <div class="ml-1 text-gray-1">{{$singletour[0]->ngay_khoi_hanh}}</div>  --}}
                                </li>
                                <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                    <i class="flaticon-user-2 text-primary font-size-22 mr-2 d-block"></i>
                                    <div class="ml-1 text-gray-1">Không giới hạn</div>
                                </li>
                                <li class="col-md-4 flex-horizontal-center list-group-item text-lh-sm mb-2">
                                    <i class="flaticon-pin text-primary font-size-22 mr-2 d-block"></i>
                                    <div class="ml-1 text-gray-1"></div>
                                </li>
                            </ul>
                            <div class="position-relative">
                                <!-- Images Carousel -->
                                <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                                    data-infinite="true"
                                    data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                                    data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                                    data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                                    data-nav-for="#sliderSyncingThumb">
                                    @foreach ($hinh_anh as $item)
                                        <div class="js-slide">
                                            <img class="img-fluid border-radius-3" src="{{ asset('Home/img/diadiem/') }}/{{ $item->Hinh_anh_1}}" alt="Image Description">
                                        </div>
                                    @endforeach
                                </div>
                                {{--  <div class="position-absolute right-0 mr-3 mt-md-n11 mt-n9">
                                    <div class="flex-horizontal-center">
                                        <!-- Video -->
                                        <a class="js-fancybox btn btn-white transition-3d-hover py-2 px-md-5 px-3 shadow-6 mr-1" href="javascript:;"
                                            data-src="//www.youtube.com/watch?v=Vfk5VuUpJ-o"
                                            data-speed="700">
                                            <i class="flaticon-movie mr-md-2 font-size-18 text-primary"></i><span class="d-none d-md-inline">Video</span>
                                        </a>
                                        <!-- End Video -->

                                        <a class="js-fancybox btn btn-white transition-3d-hover ml-2 py-2 px-md-5 px-3 shadow-6" href="javascript:;"
                                            data-src="../../Home/img/960x490/img7.jpg"
                                            data-fancybox="fancyboxGallery6"
                                            data-caption="MyTravel in frames - image #01"
                                            data-speed="700">
                                            <i class="flaticon-gallery mr-md-2 font-size-18 text-primary"></i><span class="d-none d-md-inline">Gallery</span>
                                        </a>

                                        <img class="js-fancybox d-none" alt="Image Description"
                                        data-fancybox="fancyboxGallery6"
                                        data-src="../../Home/img/960x490/img6.jpg"
                                        data-caption="MyTravel in frames - image #02"
                                        data-speed="700">
                                        <img class="js-fancybox d-none" alt="Image Description"
                                        data-caption="MyTravel in frames - image #03"
                                        data-src="../../Home/img/960x490/img8.jpg"
                                        data-fancybox="fancyboxGallery6"
                                        data-speed="700">
                                        <img class="js-fancybox d-none" alt="Image Description"
                                        data-fancybox="fancyboxGallery6"
                                        data-src="../../Home/img/960x490/img9.jpg"
                                        data-caption="MyTravel in frames - image #04"
                                        data-speed="700">

                                    </div>
                                </div>  --}}

                                <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--gutters-4 u-slick--transform-off"
                                    data-infinite="true"
                                    data-slides-show="6"
                                    data-is-thumbs="true"
                                    data-nav-for="#sliderSyncingNav"
                                    data-responsive='[{
                                        "breakpoint": 992,
                                        "settings": {
                                            "slidesToShow": 4
                                        }
                                    }, {
                                        "breakpoint": 768,
                                        "settings": {
                                            "slidesToShow": 3
                                        }
                                    }, {
                                        "breakpoint": 554,
                                        "settings": {
                                            "slidesToShow": 2
                                        }
                                    }]'>
                                    @foreach ($hinh_anh as $item)
                                        <div class="js-slide" style="cursor: pointer;">
                                            <img class="img-fluid border-radius-3 height-110" src="{{ asset('Home/img/diadiem/') }}/{{ $item->Hinh_anh_1}}" alt="Image Description">
                                        </div>
                                    @endforeach
                                    
                                </div>
                                <!-- End Images Carousel -->
                            </div>
                        </div>
                        <div id="stickyBlockStartPoint" class="mb-4">
                            <div class="border rounded-pill js-sticky-block p-1 border-width-2 z-index-4 bg-white"
                                data-parent="#stickyBlockStartPoint"
                                data-offset-target="#logoAndNav"
                                data-sticky-view="lg"
                                data-start-point="#stickyBlockStartPoint"
                                data-end-point="#stickyBlockEndPoint"
                                data-offset-top="30"
                                data-offset-bottom="30">
                                <ul class="js-scroll-nav nav tab-nav-pill flex-nowrap tab-nav">
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-medium" href="#scroll-description">
                                            <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                                <span class="tabtext font-weight-semi-bold">Mô tả</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-medium" href="#scroll-itinerary">
                                            <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                                <span class="tabtext font-weight-semi-bold">Hành trình</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-medium" href="#scroll-location">
                                            <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                                <span class="tabtext font-weight-semi-bold">Bản đồ</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-medium" href="#scroll-reviews">
                                            <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                                <span class="tabtext font-weight-semi-bold">Đánh giá</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="border-bottom position-relative">
                            <h5 id="scroll-description" class="font-size-21 font-weight-bold text-dark mb-4">
                                Mô tả
                            </h5>

                            <p class="mb-4 mt-2" id="noidung" value=''>{{$singletour[0]->noi_dung}}</p>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="font-weight-bold text-dark mb-2">Highlights</div>
                                    <div class="text-gray-1">John F.K. International Airport (Google Map)</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="font-weight-bold text-dark mb-2">Số ngày</div>
                                    <div class="text-gray-1">{{$singletour[0]->so_ngay}}</div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <div class="font-weight-bold text-dark mb-2">Bathroom</div>
                                    <div class="text-gray-1">6 Bathrooms</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="font-weight-bold text-dark mb-2">Số Đêm</div>
                                    <div class="text-gray-1">{{$singletour[0]->so_dem}}</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="font-weight-bold text-dark mb-3">Price Includes</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>Air fares</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>3 Nights Hotel Accomodation</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>Tour Guide</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>Entrance Fees</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-tick mr-3 font-size-16 text-primary"></i>All transportation in destination location</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="font-weight-bold text-dark mb-3">Price Excludes</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Guide Service Fee</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Driver Service Fee</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Any Private Expenses</div>
                                    <div class="flex-horizontal-center mb-3 text-gray-1"><i class="flaticon-close mr-3 font-size-12 text-primary"></i>Room Service Fees</div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom py-4">
                            <h5 id="scroll-itinerary" class="font-size-21 font-weight-bold text-dark mb-4">
                                Itinerary
                            </h5>
                            <div id="basicsAccordion1">
                                <!-- Card -->
                                <div class="card border-0 mb-3">
                                    <div class="card-header border-bottom-0 p-0" id="basicsHeadingOne1">
                                        <h5 class="mb-0">
                                            <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                            data-toggle="collapse" data-target="#basicsCollapseOne1" aria-expanded="true" aria-controls="basicsCollapseOne1">
                                                <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                    <i class="far fa-circle"></i>
                                                </div>

                                                <div class="text-primary flex-shrink-0">Day 1 <span class="px-2">-</span> </div>
                                                <h6 class="font-weight-bold text-gray-3 text-left mb-0">Barcelona – Zaragoza – Madrid</h6>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseOne1" class="collapse show"
                                         aria-labelledby="basicsHeadingOne1"
                                         data-parent="#basicsAccordion1">
                                        <div class="card-body pl-6 pb-0 pt-0">
                                            <p class="mb-0">We’ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a “Welcome to Switzerland” meeting. Then we’ll take a meandering evening walk through Switzerland’s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="card border-0 mb-3">
                                    <div class="card-header border-bottom-0 p-0" id="basicsHeadingTwo2">
                                        <h5 class="mb-0">
                                            <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseTwo2" aria-expanded="false" aria-controls="basicsCollapseTwo2">
                                                <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                    <i class="far fa-circle"></i>
                                                </div>

                                                <div class="text-primary flex-shrink-0">Day 2 <span class="px-2">-</span> </div>
                                                <h6 class="font-weight-bold text-gray-3 text-left mb-0">Zürich–Biel/Bienne–Neuchâtel–Geneva</h6>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseTwo2" class="collapse"
                                         aria-labelledby="basicsHeadingTwo2"
                                         data-parent="#basicsAccordion1">
                                        <div class="card-body pl-6 pb-0 pt-0">
                                            <p class="mb-0">We’ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a “Welcome to Switzerland” meeting. Then we’ll take a meandering evening walk through Switzerland’s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="card border-0 mb-3">
                                    <div class="card-header border-bottom-0 p-0" id="basicsHeadingThree3">
                                        <h5 class="mb-0">
                                            <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseThree3" aria-expanded="false" aria-controls="basicsCollapseThree3">
                                                <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                    <i class="far fa-circle"></i>
                                                </div>

                                                <div class="text-primary flex-shrink-0">Day 3 <span class="px-2">-</span> </div>
                                                <h6 class="font-weight-bold text-gray-3 text-left mb-0">Enchanting Engelberg</h6>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseThree3" class="collapse"
                                         aria-labelledby="basicsHeadingThree3"
                                         data-parent="#basicsAccordion1">
                                        <div class="card-body pl-6 pb-0 pt-0">
                                            <p class="mb-0">We’ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a “Welcome to Switzerland” meeting. Then we’ll take a meandering evening walk through Switzerland’s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="card border-0 mb-3">
                                    <div class="card-header border-bottom-0 p-0" id="basicsHeadingFour4">
                                        <h5 class="mb-0">
                                            <button type="button" class="collapse-link btn btn-link btn-block d-flex align-items-md-center font-weight-bold p-0"
                                                data-toggle="collapse" data-target="#basicsCollapseFour4" aria-expanded="false" aria-controls="basicsCollapseFour4">
                                                <div class="text-primary font-size-22 mb-3 mb-md-0 mr-3">
                                                    <i class="far fa-circle"></i>
                                                </div>

                                                <div class="text-primary flex-shrink-0">Day 4 <span class="px-2">-</span> </div>
                                                <h6 class="font-weight-bold text-gray-3 text-left mb-0">Interlaken Area. Excursion to The Jungfrau Massif</h6>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="basicsCollapseFour4" class="collapse"
                                         aria-labelledby="basicsHeadingFour4"
                                         data-parent="#basicsAccordion1">
                                        <div class="card-body pl-6 pb-0 pt-0">
                                            <p class="mb-0">We’ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a “Welcome to Switzerland” meeting. Then we’ll take a meandering evening walk through Switzerland’s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                        </div>
                        <div class="border-bottom py-4">
                            <h5 id="scroll-location" class="font-size-21 font-weight-bold text-dark mb-4">
                                Location
                            </h5>
                            <iframe src="https://www.google.com/maps/place?key=AIzaSyAg-ZY6iL8dzXNTw5_sjAuWwuKS7q-grx8&q=việt nam" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="border-bottom py-4">
                            <h5 id="scroll-reviews" class="font-size-21 font-weight-bold text-dark mb-4">
                                Average Reviews
                            </h5>
                            <div class="row">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="border rounded flex-content-center py-5 border-width-2">
                                        <div class="text-center">
                                            <h2 class="font-size-50 font-weight-bold text-primary mb-0 text-lh-sm">
                                                4.2<span class="font-size-20">/5</span>
                                            </h2>
                                            <div class="font-size-25 text-dark mb-3">Very Good</div>
                                            <div class="text-gray-1">From 40 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <h6 class="font-weight-normal text-gray-1 mb-1">
                                                Cleanliness
                                            </h6>
                                            <div class="flex-horizontal-center mr-6">
                                                <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ml-3 text-primary font-weight-bold">
                                                    4.8
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <h6 class="font-weight-normal text-gray-1 mb-1">
                                                Facilities
                                            </h6>
                                            <div class="flex-horizontal-center mr-6">
                                                <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ml-3 text-primary font-weight-bold">
                                                    1.4
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <h6 class="font-weight-normal text-gray-1 mb-1">
                                                Value for money
                                            </h6>
                                            <div class="flex-horizontal-center mr-6">
                                                <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ml-3 text-primary font-weight-bold">
                                                    3.2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <h6 class="font-weight-normal text-gray-1 mb-1">
                                                Service
                                            </h6>
                                            <div class="flex-horizontal-center mr-6">
                                                <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ml-3 text-primary font-weight-bold">
                                                    5.0
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="font-weight-normal text-gray-1 mb-1">
                                                Location
                                            </h6>
                                            <div class="flex-horizontal-center mr-6">
                                                <div class="progress bg-gray-33 rounded-pill w-100" style="height: 7px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar" style="width: 86%;" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ml-3 text-primary font-weight-bold">
                                                    4.8
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="stickyBlockEndPoint"></div>
                        <div class="border-bottom py-4">
                            <h5 class="font-size-21 font-weight-bold text-dark mb-8">
                                Showing 16 verified guest comments
                            </h5>
                            <div class="media flex-column flex-md-row align-items-center align-items-md-start mb-4">
                                <div class="mr-md-5">
                                    <a class="d-block" href="#">
                                        <img class="img-fluid mb-3 mb-md-0 rounded-circle" src="../../Home/img/85x85/img1.jpg" alt="Image-Description">
                                    </a>
                                </div>
                                <div class="media-body text-center text-md-left">
                                    <div class="mb-4">
                                        <h6 class="font-weight-bold text-gray-3">
                                            <a href="#">Helena</a>
                                        </h6>
                                        <div class="font-weight-normal font-size-14 text-gray-9 mb-2">April 25, 2019 at 10:46 am</div>
                                        <div class="d-flex align-items-center flex-column flex-md-row mb-2">
                                            <button type="button" class="btn btn-xs btn-primary rounded-xs font-size-14 py-1 px-2 mr-2 mb-2 mb-md-0">4.6 /5 </button>
                                            <span class="font-weight-bold font-italic text-gray-3">The worst hotel ever ”</span>
                                        </div>
                                        <p class="text-lh-1dot6 mb-0 pr-lg-5">Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
                                    </div>
                                    <div class="review">
                                        <div class="row no-gutters justify-content-between align-items-center border border-color-8 border-width-2 rounded-xs p-3 px-md-3 py-md-2 pr-xl-5">
                                            <div class="col">
                                                <div class="font-weight-normal font-size-14 text-gray-1 mx-lg-1 my-lg-1 mb-3 mb-md-0">Was This Review...?</div>
                                            </div>
                                            <div class="col-md-6 col-lg-7 col-xl-4">
                                                <div class="d-flex justify-content-between my-lg-1">
                                                    <a class="text-indigo-light" href="#">
                                                        <i class="flaticon-like-1 font-size-15 mr-1"></i>
                                                        <span class="font-size-14 font-weight-normal">Like</span>
                                                    </a>
                                                    <a class="text-gray-7" href="#">
                                                        <i class="flaticon-dislike font-size-15 mr-1"></i>
                                                        <span class="font-size-14 font-weight-normal">Dislike</span>
                                                    </a>
                                                    <a class="text-red-light-2" href="#">
                                                        <i class="flaticon-like font-size-15 mr-1"></i>
                                                        <span class="font-size-14 font-weight-normal">Love</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media flex-column flex-md-row align-items-center align-items-md-start mb-0">
                                <div class="mr-md-5">
                                    <a class="d-block" href="#">
                                        <img class="img-fluid mb-3 mb-md-0 rounded-circle" src="../../Home/img/85x85/img2.jpg" alt="Image-Description">
                                    </a>
                                </div>
                                <div class="media-body text-center text-md-left">
                                    <div class="mb-4">
                                        <h6 class="font-weight-bold text-gray-3">
                                            <a href="#">Ashleigh</a>
                                        </h6>
                                        <div class="font-weight-normal font-size-14 text-gray-9 mb-2">April 25, 2019 at 10:46 am</div>
                                        <div class="d-flex align-items-center flex-column flex-md-row mb-2">
                                            <button type="button" class="btn btn-xs btn-primary rounded-xs font-size-14 py-1 px-2 mr-2 mb-2 mb-md-0">4.6 /5 </button>
                                            <span class="font-weight-bold font-italic text-gray-3">Was too noisy and not suitable for business meetings.”</span>
                                        </div>
                                        <p class="text-lh-1dot6 pr-lg-5 mb-0">Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
                                    </div>
                                    <div class="review">
                                        <div class="row no-gutters justify-content-between align-items-center border border-color-8 border-width-2 rounded-xs p-3 px-md-3 py-md-2 pr-xl-5">
                                            <div class="col">
                                                <div class="font-weight-normal font-size-14 text-gray-1 mx-lg-1 my-lg-1 mb-3 mb-md-0">Was This Review...?</div>
                                            </div>
                                            <div class="col-md-6 col-lg-7 col-xl-4">
                                                <div class="d-flex justify-content-between my-lg-1">
                                                    <a class="text-indigo-light" href="#">
                                                        <i class="flaticon-like-1 font-size-15 mr-1"></i>
                                                        <span class="font-size-14 font-weight-normal">Like</span>
                                                    </a>
                                                    <a class="text-gray-7" href="#">
                                                        <i class="flaticon-dislike font-size-15 mr-1"></i>
                                                        <span class="font-size-14 font-weight-normal">Dislike</span>
                                                    </a>
                                                    <a class="text-red-light-2" href="#">
                                                        <i class="flaticon-like font-size-15 mr-1"></i>
                                                        <span class="font-size-14 font-weight-normal">Love</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <h5 class="font-size-21 font-weight-bold text-dark mb-6">
                                Write a Review
                            </h5>
                            <div class="row">
                                <div class="col-md-4 mb-6">
                                    <h6 class="font-weight-bold text-dark mb-1">
                                        Cleanliness
                                    </h6>
                                    <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                                </div>
                                <div class="col-md-4 mb-6">
                                    <h6 class="font-weight-bold text-dark mb-1">
                                        Facilities
                                    </h6>
                                    <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                                </div>
                                <div class="col-md-4 mb-6">
                                    <h6 class="font-weight-bold text-dark mb-1">
                                        Value for money
                                    </h6>
                                    <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                    </span>
                                </div>
                                <div class="col-md-4 mb-6">
                                    <h6 class="font-weight-bold text-dark mb-1">
                                        Service
                                    </h6>
                                    <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                                </div>
                                <div class="col-md-4 mb-6">
                                    <h6 class="font-weight-bold text-dark mb-1">
                                        Location
                                    </h6>
                                    <span class="text-primary font-size-20 letter-spacing-3">
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile"></small>
                                        <small class="far fa-smile text-muted"></small>
                                        <small class="far fa-smile text-muted"></small>
                                    </span>
                                </div>
                            </div>
                            <form class="js-validate" novalidate="novalidate">
                                <div class="row mb-5 mb-lg-0">
                                    <!-- Input -->
                                    <div class="col-sm-6 mb-5">
                                        <div class="js-form-message">
                                            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="col-sm-6 mb-5">
                                        <div class="js-form-message">
                                            <input type="email" class="form-control" name="email" placeholder="Email" aria-label="jackwayley@gmail.com" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <!-- End Input -->
                                    <div class="col-sm-12 mb-5">
                                        <div class="js-form-message">
                                            <div class="input-group">
                                                <textarea class="form-control" rows="6" cols="77" name="text" placeholder="Comment" aria-label="Hi there, I would like to ..." required="" data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->
                                    <div class="col d-flex justify-content-center justify-content-lg-start">
                                        <button type="submit" class="btn rounded-xs bg-blue-dark-1 text-white p-2 height-51 width-190 transition-3d-hover">Submit Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="mb-4">
                            <div class="border border-color-7 rounded mb-5">
                                <div class="border-bottom">
                                    <div class="p-4">
                                        <span class="font-size-14">Giá: </span>
                                        <span class="font-size-24 text-gray-6 font-weight-bold ml-1">{{ number_format($singletour[0]->gia_tour)." VNĐ" }}</span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <!-- Input -->
                                    <span class="d-block text-gray-1 font-weight-normal mb-0 text-left">Ngày</span>
                                    <div class="mb-4">
                                        <div class="border-bottom border-width-2 border-color-1">
                                            <div id="datepickerWrapperPick" class="u-datepicker input-group">
                                                <input class="js-range-datepicker w-auto height-40 font-size-16 shadow-none font-weight-bold form-control hero-form bg-transparent border-0 flatpickr-input p-0" type="text" placeholder="July 7/2019" date("Y-m-d") aria-label="July 7/2019"
                                                data-rp-wrapper="#datepickerWrapperPick"
                                                data-rp-date-format="d-M-Y"
                                                data-rp-default-date='["Jul 7 / 2020"]'>
                                            </div>
                                            <!-- End Datepicker -->
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <span class="d-block text-gray-1 font-weight-normal mb-2 text-left">Người lớn</span>
                                    <div class="mb-4">
                                        <div class="border-bottom border-width-2 border-color-1 pb-1">
                                            <div class="js-quantity flex-center-between mb-1 text-dark font-weight-bold">
                                                <span class="d-block">Tuổi 18+</span>
                                                <div class="flex-horizontal-center">
                                                    <a class="js-plus font-size-10 text-dark" href="javascript:;">
                                                        <i class="fas fa-chevron-up"></i>
                                                    </a>
                                                    <input class="js-result form-control h-auto width-30 font-weight-bold font-size-16 shadow-none bg-tranparent border-0 rounded p-0 mx-1 text-center" type="text" value="0" min="1" max="100">
                                                    <a class="js-minus font-size-10 text-dark" href="javascript:;">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <span class="d-block text-gray-1 font-weight-normal mb-2 text-left">Trẻ em</span>
                                    <div class="mb-4">
                                        <div class="border-bottom border-width-2 border-color-1 pb-1">
                                            <div class="js-quantity flex-center-between mb-1 text-dark font-weight-bold">
                                                <span class="d-block">Tuổi 6-17</span>
                                                <div class="flex-horizontal-center">
                                                    <a class="js-plus font-size-10 text-dark" href="javascript:;">
                                                        <i class="fas fa-chevron-up"></i>
                                                    </a>
                                                    <input class="js-result form-control h-auto width-30 font-weight-bold font-size-16 shadow-none bg-tranparent border-0 rounded p-0 mx-1 text-center" type="text" value="0" min="1" max="100">
                                                    <a class="js-minus font-size-10 text-dark" href="javascript:;">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <span class="d-block text-gray-1 font-weight-normal mb-2 text-left">Trẻ sơ sinh</span>
                                    <div class="mb-4">
                                        <div class="border-bottom border-width-2 border-color-1 pb-1">
                                            <div class="js-quantity flex-center-between mb-1 text-dark font-weight-bold">
                                                <span class="d-block">Tuổi 0-5</span>
                                                <div class="flex-horizontal-center">
                                                    <a class="js-plus font-size-10 text-dark" href="javascript:;">
                                                        <i class="fas fa-chevron-up"></i>
                                                    </a>
                                                    <input class="js-result form-control h-auto width-30 font-weight-bold font-size-16 shadow-none bg-tranparent border-0 rounded p-0 mx-1 text-center" type="text" value="0" min="1" max="100">
                                                    <a class="js-minus font-size-10 text-dark" href="javascript:;">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <div class="text-center">
                                        <a href="../tour/tour-booking.html" class="btn btn-primary d-flex align-items-center justify-content-center  height-60 w-100 mb-xl-0 mb-lg-1 transition-3d-hover font-weight-bold">Đặt Ngay</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-color-7 rounded p-4 mb-5">
                                <h6 class="font-size-17 font-weight-bold text-gray-3 mx-1 mb-3 pb-1">Why Book With Us?</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="flaticon-star font-size-25 text-primary mr-3 pr-1"></i>
                                    <h6 class="mb-0 font-size-14 text-gray-1">
                                        <a href="#">No-hassle best price guarantee</a>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="flaticon-support font-size-25 text-primary mr-3 pr-1"></i>
                                    <h6 class="mb-0 font-size-14 text-gray-1">
                                        <a href="#">Customer care available 24/7</a>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="flaticon-favorites-button font-size-25 text-primary mr-3 pr-1"></i>
                                    <h6 class="mb-0 font-size-14 text-gray-1">
                                        <a href="#">Hand-picked Tours &amp; Activities</a>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center mb-0">
                                    <i class="flaticon-airplane font-size-25 text-primary mr-3 pr-1"></i>
                                    <h6 class="mb-0 font-size-14 text-gray-1">
                                        <a href="#">Free Travel Insureance</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Cards carousel -->
                <div class="product-card-carousel-block product-card-carousel-v5">
                    <div class="space-1">
                        <div class="w-md-80 w-lg-50 text-center mx-md-auto mt-3">
                            <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">You might also like...</h2>
                        </div>
                        <div class="js-slick-carousel u-slick u-slick--gutters-1"
                            data-slides-show="3"
                            data-slides-scroll="1"
                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                            data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                            data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                            data-responsive='[{
                            "breakpoint": 992,
                            "settings": {
                                "slidesToShow": 2
                            }
                            }, {
                            "breakpoint": 768,
                            "settings": {
                                "slidesToShow": 1
                            }
                            }, {
                            "breakpoint": 554,
                            "settings": {
                                "slidesToShow": 1
                            }
                            }]'>
                            @foreach ($tour as $item)
                            <div class="js-slide bg-img-hero-center" style="background-image: url();">
                                <div class="col-md-6 col-lg-12 col-xl-3mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="{{ route('Tous.single',$item->ma_tour) }}" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="{{ asset('Home/img/tour').'/'.$item->hinh_anh}}" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">{{ $item->ten_loai_tour }}</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>{{ number_format($item->gia_tour,0,'.','.')."    VNĐ" }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="{{ route('Tous.single',$item->ma_tour) }}" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="{{ route('Tous.single',$item->ma_tour) }}" class="card-title text-dark font-size-17 font-weight-bold">{{ $item->ten_tour }}</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="text-warning mr-2">
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
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- End Product Cards carousel -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->
@endsection

@section('js')
<script type="text/javascript" src="{{ asset ('Admin/js/action.js')}}"></script>
<script>
    var noidung = $('#noidung').text();
    var parser = new DOMParser();
    var doc = parser.parseFromString( noidung, 'text/html');
    document.getElementById('noidung').innerHTML = doc.body.innerHTML;
</script>
@endsection
