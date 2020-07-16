@include('Home.head')
<!-- ========== HERO ========== -->
@include('Home.navigation')

<!-- Hero Section -->
<div class="js-slick-carousel u-slick"
data-autoplay="true"
data-autoplay-speed="5000">
    <div class="bg-img-hero-bottom min-height-720 space-top-2 text-center space-top-lg-4" style="background-image: url(Home/img/1920x720/img1.jpg);"></div>
    <div class="bg-img-hero-bottom min-height-720 space-top-2 text-center space-top-lg-4" style="background-image: url(Home/img/1920x720/img1.jpg);"></div>
    <div class="bg-img-hero-bottom min-height-720 space-top-2 text-center space-top-lg-4" style="background-image: url(Home/img/1920x720/img1.jpg);"></div>
</div>
<div class="container" style="margin-top: -190px;">
    <div class="pt-3 pb-6">
        <div class="tab-content hero-tab-pane">
            <div class="tab-pane fade active show" id="pills-one-example2" role="tabpanel" aria-labelledby="pills-one-example2-tab">
                <!-- Search Jobs Form -->
                <div class="card border-0 tab-shadow">
                    <div class="card-body">
                        <form class="js-validate">
                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3">
                            <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                    data-style=""
                                    data-live-search="true"
                                    data-searchbox-classes="input-group-sm">
                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">London, United Kingdom</span>
                                        </span>'>
                                        London, United Kingdom
                                    </option>
                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New York, United States</span>
                                        </span>'>
                                        New York, United States
                                    </option>
                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New South Wales, Australia</span>
                                        </span>'>
                                        New South Wales, Australia
                                    </option>
                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Istanbul, Turkey</span>
                                        </span>'>
                                        Istanbul, Turkey
                                    </option>
                                    <option class="" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                        </span>'>
                                        Reykjavík, Iceland
                                    </option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                <div class="border-bottom border-width-2 border-color-1">
                                    <div id="datepickerWrapperFromOne" class="u-datepicker input-group">
                                        <div class="input-group-prepend">
                                            <span class="d-flex align-items-center mr-2">
                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                            </span>
                                        </div>
                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                             data-rp-wrapper="#datepickerWrapperFromOne"
                                             data-rp-type="range"
                                             data-rp-date-format="M d / Y"
                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                    </div>
                                     <!-- End Datepicker -->
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                <a id="basicDropdownClickInvoker" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                    aria-controls="basicDropdownClick"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-target="#basicDropdownClick"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                </a>
                                <div id="basicDropdownClick" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker">
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right py-1 pr-5">
                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-1dot8 align-self-lg-end text-md-right">
                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                            </div>
                          </div>
                          <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
            <div class="tab-pane fade" id="pills-two-example2" role="tabpanel" aria-labelledby="pills-two-example2-tab">
                <!-- Search Jobs Form -->
                <div class="card border-0 tab-shadow">
                    <div class="card-body">
                        <form class="js-validate">
                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3">
                            <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                    data-style=""
                                    data-live-search="true"
                                    data-searchbox-classes="input-group-sm">
                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">London, United Kingdom</span>
                                        </span>'>
                                        London, United Kingdom
                                    </option>
                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New York, United States</span>
                                        </span>'>
                                        New York, United States
                                    </option>
                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New South Wales, Australia</span>
                                        </span>'>
                                        New South Wales, Australia
                                    </option>
                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Istanbul, Turkey</span>
                                        </span>'>
                                        Istanbul, Turkey
                                    </option>
                                    <option class="" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                        </span>'>
                                        Reykjavík, Iceland
                                    </option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                <div class="border-bottom border-width-2 border-color-1">
                                    <div id="datepickerWrapperFromTwo" class="u-datepicker input-group">
                                        <div class="input-group-prepend">
                                            <span class="d-flex align-items-center mr-2">
                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                            </span>
                                        </div>
                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                             data-rp-wrapper="#datepickerWrapperFromTwo"
                                             data-rp-type="range"
                                             data-rp-date-format="M d / Y"
                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                    </div>
                                     <!-- End Datepicker -->
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                <a id="basicDropdownClickInvoker2" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                    aria-controls="basicDropdownClick2"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-target="#basicDropdownClick2"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                </a>
                                <div id="basicDropdownClick2" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker2">
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right py-1 pr-5">
                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-1dot8 align-self-lg-end text-md-right">
                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                            </div>
                          </div>
                          <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
            <div class="tab-pane fade" id="pills-three-example2" role="tabpanel" aria-labelledby="pills-three-example2-tab">
                <!-- Search Jobs Form -->
                <div class="card border-0 tab-shadow">
                    <div class="card-body">
                        <form class="js-validate">
                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3">
                            <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                    data-style=""
                                    data-live-search="true"
                                    data-searchbox-classes="input-group-sm">
                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">London, United Kingdom</span>
                                        </span>'>
                                        London, United Kingdom
                                    </option>
                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New York, United States</span>
                                        </span>'>
                                        New York, United States
                                    </option>
                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New South Wales, Australia</span>
                                        </span>'>
                                        New South Wales, Australia
                                    </option>
                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Istanbul, Turkey</span>
                                        </span>'>
                                        Istanbul, Turkey
                                    </option>
                                    <option class="" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                        </span>'>
                                        Reykjavík, Iceland
                                    </option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                <div class="border-bottom border-width-2 border-color-1">
                                    <div id="datepickerWrapperFromThree" class="u-datepicker input-group">
                                        <div class="input-group-prepend">
                                            <span class="d-flex align-items-center mr-2">
                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                            </span>
                                        </div>
                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                             data-rp-wrapper="#datepickerWrapperFromThree"
                                             data-rp-type="range"
                                             data-rp-date-format="M d / Y"
                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                    </div>
                                     <!-- End Datepicker -->
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                <a id="basicDropdownClickInvoker3" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                    aria-controls="basicDropdownClick3"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-target="#basicDropdownClick3"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                </a>
                                <div id="basicDropdownClick3" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker3">
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right py-1 pr-5">
                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-1dot8 align-self-lg-end text-md-right">
                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                            </div>
                          </div>
                          <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
            <div class="tab-pane fade" id="pills-four-example2" role="tabpanel" aria-labelledby="pills-four-example2-tab">
                <!-- Search Jobs Form -->
                <div class="card border-0 tab-shadow">
                    <div class="card-body">
                        <form class="js-validate">
                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3">
                            <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                    data-style=""
                                    data-live-search="true"
                                    data-searchbox-classes="input-group-sm">
                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">London, United Kingdom</span>
                                        </span>'>
                                        London, United Kingdom
                                    </option>
                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New York, United States</span>
                                        </span>'>
                                        New York, United States
                                    </option>
                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New South Wales, Australia</span>
                                        </span>'>
                                        New South Wales, Australia
                                    </option>
                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Istanbul, Turkey</span>
                                        </span>'>
                                        Istanbul, Turkey
                                    </option>
                                    <option class="" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                        </span>'>
                                        Reykjavík, Iceland
                                    </option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                <div class="border-bottom border-width-2 border-color-1">
                                    <div id="datepickerWrapperFromFour" class="u-datepicker input-group">
                                        <div class="input-group-prepend">
                                            <span class="d-flex align-items-center mr-2">
                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                            </span>
                                        </div>
                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                             data-rp-wrapper="#datepickerWrapperFromFour"
                                             data-rp-type="range"
                                             data-rp-date-format="M d / Y"
                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                    </div>
                                     <!-- End Datepicker -->
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                <a id="basicDropdownClickInvoker4" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                    aria-controls="basicDropdownClick4"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-target="#basicDropdownClick4"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                </a>
                                <div id="basicDropdownClick4" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker4">
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right py-1 pr-5">
                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-1dot8 align-self-lg-end text-md-right">
                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                            </div>
                          </div>
                          <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
            <div class="tab-pane fade" id="pills-five-example2" role="tabpanel" aria-labelledby="pills-five-example2-tab">
                <!-- Search Jobs Form -->
                <div class="card border-0 tab-shadow">
                    <div class="card-body">
                        <form class="js-validate">
                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3">
                            <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                    data-style=""
                                    data-live-search="true"
                                    data-searchbox-classes="input-group-sm">
                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">London, United Kingdom</span>
                                        </span>'>
                                        London, United Kingdom
                                    </option>
                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New York, United States</span>
                                        </span>'>
                                        New York, United States
                                    </option>
                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New South Wales, Australia</span>
                                        </span>'>
                                        New South Wales, Australia
                                    </option>
                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Istanbul, Turkey</span>
                                        </span>'>
                                        Istanbul, Turkey
                                    </option>
                                    <option class="" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                        </span>'>
                                        Reykjavík, Iceland
                                    </option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                <div class="border-bottom border-width-2 border-color-1">
                                    <div id="datepickerWrapperFromFive" class="u-datepicker input-group">
                                        <div class="input-group-prepend">
                                            <span class="d-flex align-items-center mr-2">
                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                            </span>
                                        </div>
                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                             data-rp-wrapper="#datepickerWrapperFromFive"
                                             data-rp-type="range"
                                             data-rp-date-format="M d / Y"
                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                    </div>
                                     <!-- End Datepicker -->
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                <a id="basicDropdownClickInvoker5" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                    aria-controls="basicDropdownClick5"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-target="#basicDropdownClick5"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                </a>
                                <div id="basicDropdownClick5" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker5">
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right py-1 pr-5">
                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-1dot8 align-self-lg-end text-md-right">
                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                            </div>
                          </div>
                          <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
            <div class="tab-pane fade" id="pills-six-example2" role="tabpanel" aria-labelledby="pills-six-example2-tab">
                <!-- Search Jobs Form -->
                <div class="card border-0 tab-shadow">
                    <div class="card-body">
                        <form class="js-validate">
                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3">
                            <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                    data-style=""
                                    data-live-search="true"
                                    data-searchbox-classes="input-group-sm">
                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">London, United Kingdom</span>
                                        </span>'>
                                        London, United Kingdom
                                    </option>
                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New York, United States</span>
                                        </span>'>
                                        New York, United States
                                    </option>
                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New South Wales, Australia</span>
                                        </span>'>
                                        New South Wales, Australia
                                    </option>
                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Istanbul, Turkey</span>
                                        </span>'>
                                        Istanbul, Turkey
                                    </option>
                                    <option class="" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                        </span>'>
                                        Reykjavík, Iceland
                                    </option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                <div class="border-bottom border-width-2 border-color-1">
                                    <div id="datepickerWrapperFromSix" class="u-datepicker input-group">
                                        <div class="input-group-prepend">
                                            <span class="d-flex align-items-center mr-2">
                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                            </span>
                                        </div>
                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                             data-rp-wrapper="#datepickerWrapperFromSix"
                                             data-rp-type="range"
                                             data-rp-date-format="M d / Y"
                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                    </div>
                                     <!-- End Datepicker -->
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                <a id="basicDropdownClickInvoker6" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                    aria-controls="basicDropdownClick6"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-target="#basicDropdownClick6"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                </a>
                                <div id="basicDropdownClick6" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker6">
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right py-1 pr-5">
                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-1dot8 align-self-lg-end text-md-right">
                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                            </div>
                          </div>
                          <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
            <div class="tab-pane fade" id="pills-seven-example2" role="tabpanel" aria-labelledby="pills-seven-example2-tab">
                <!-- Search Jobs Form -->
                <div class="card border-0 tab-shadow">
                    <div class="card-body">
                        <form class="js-validate">
                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3">
                            <div class="col-sm-12 col-lg-3dot6 col-xl-3dot7 mb-4 mb-lg-0 ">
                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                    data-style=""
                                    data-live-search="true"
                                    data-searchbox-classes="input-group-sm">
                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">London, United Kingdom</span>
                                        </span>'>
                                        London, United Kingdom
                                    </option>
                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New York, United States</span>
                                        </span>'>
                                        New York, United States
                                    </option>
                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">New South Wales, Australia</span>
                                        </span>'>
                                        New South Wales, Australia
                                    </option>
                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Istanbul, Turkey</span>
                                        </span>'>
                                        Istanbul, Turkey
                                    </option>
                                    <option class="" value="project4" data-content='
                                        <span class="d-flex align-items-center">
                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                        </span>'>
                                        Reykjavík, Iceland
                                    </option>
                                </select>
                                <!-- End Select -->
                            </div>

                            <div class="col-sm-12 col-lg-3dot7 col-xl-3dot6 mb-4 mb-lg-0 ">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                <div class="border-bottom border-width-2 border-color-1">
                                    <div id="datepickerWrapperFromSeven" class="u-datepicker input-group">
                                        <div class="input-group-prepend">
                                            <span class="d-flex align-items-center mr-2">
                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                            </span>
                                        </div>
                                         <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                             data-rp-wrapper="#datepickerWrapperFromSeven"
                                             data-rp-type="range"
                                             data-rp-date-format="M d / Y"
                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                    </div>
                                     <!-- End Datepicker -->
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-2dot8 mb-4 mb-lg-0 dropdown-custom">
                                <!-- Input -->
                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                <a id="basicDropdownClickInvoker7" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                    aria-controls="basicDropdownClick7"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-target="#basicDropdownClick7"
                                    data-unfold-type="css-animation"
                                    data-unfold-duration="300"
                                    data-unfold-delay="300"
                                    data-unfold-hide-on-scroll="true"
                                    data-unfold-animation-in="slideInUp"
                                    data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                </a>
                                <div id="basicDropdownClick7" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker7">
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3 mb-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 py-2 px-3">
                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                            <div class="d-flex">
                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right py-1 pr-5">
                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                    </div>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-12 col-lg-1dot8 align-self-lg-end text-md-right">
                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                            </div>
                          </div>
                          <!-- End Checkbox -->
                        </form>
                    </div>
                </div>
                <!-- End Search Jobs Form -->
            </div>
        </div>
    </div>
</div>

<!-- ========== END HERO ========== -->
<main id="content">
    <!-- Destinantion v1 -->
    <div class="destinantion-block destinantion-v1 border-bottom border-color-8">
        <div class="container space-bottom-1 space-top-lg-3">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mt-4">
                <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">TOUR NỔI BẬT</h2>
            </div>
            <div class="row mb-1">
                <!-- Card Block -->
                <div class="col-md-6 col-xl-6 mb-3 mb-md-6 pb-1">
                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                        <div class="position-relative mb-2">
                            <a href="" class="d-block gradient-overlay-half-bg-gradient-v5">
                                <img class="min-height-230 bg-img-hero card-img-top" src="Home/img/630x350/img1.jpg" alt="img">
                            </a>
                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                <span class="flaticon-valentine-heart font-size-20"></span>
                              </button>
                            </div>
                            <div class="position-absolute bottom-0 left-0 right-0">
                                <div class="px-3 pb-2">
                                    <span class="text-gray-10 font-weight-normal font-size-14">Attraction Tickets</span>
                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-4 py-2">
                            <a href="" class="d-block">
                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                </div>
                            </a>
                            <a href="" class="card-title text-dark font-size-17 font-weight-bold">Two Capitals Tour of 7 days and 6 nights From Moscow</a>
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
                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Block -->
                <!-- Card Block -->
                <div class="col-md-6 col-xl-6 mb-3 mb-md-6 pb-1">
                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                        <div class="position-relative mb-2">
                            <a href="" class="d-block gradient-overlay-half-bg-gradient-v5">
                                <img class="min-height-230 bg-img-hero card-img-top" src="Home/img/630x350/img1.jpg" alt="img">
                            </a>
                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                <span class="flaticon-valentine-heart font-size-20"></span>
                              </button>
                            </div>
                            <div class="position-absolute bottom-0 left-0 right-0">
                                <div class="px-3 pb-2">
                                    <span class="text-gray-10 font-weight-normal font-size-14">Attraction Tickets</span>
                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-4 py-2">
                            <a href="" class="d-block">
                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                </div>
                            </a>
                            <a href="" class="card-title text-dark font-size-17 font-weight-bold">Two Capitals Tour of 7 days and 6 nights From Moscow</a>
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
                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Block -->

                {{-- <!-- Card Block -->
                @foreach ($tour as $item)
                <div class="col-md-6 col-xl-4 mb-3 mb-md-4 pb-1">
                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                        <div class="position-relative mb-2">
                            <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                <img class="min-height-230 bg-img-hero card-img-top" src="Home/img/tour/dalat.png" alt="img">
                            </a>
                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                    <span class="flaticon-valentine-heart font-size-20"></span>
                                  </button>
                            </div>
                            <div class="position-absolute bottom-0 left-0 right-0">
                                <div class="px-3 pb-2">
                                    <span class="text-gray-10 font-weight-normal font-size-14">Culturals Tours</span>
                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">Giá: </small> {{ number_format($item->gia_tour)." VNĐ" }}   </h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-4 py-2">
                            <a href="../tour/tour-single-v1.html" class="d-block">
                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                </div>
                            </a>
                            <a href="../tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">{{ $item->ten_tour }}</a>
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
                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach --}}

                <!-- End Card Block -->
            </div>
        </div>
    </div>
    <!-- End Destinantion v1 -->

    <!-- Tabs v1 -->
    <div class="tabs-block tab-v1">
        <div class="container space-1">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
                <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">TOUR TRONG NƯỚC</h2>
            </div>
            <!-- Nav Classic -->
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
                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>{{ $item->gia_tour }}</h2>
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
                                    <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- End Nav Classic -->

        </div>
    </div>
    <!-- End Tabs v1 -->

     <!-- Tabs v1 -->
     <div class="tabs-block tab-v1">
        <div class="container space-1">
            <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
                <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">TOUR NƯỚC NGOÀI</h2>
            </div>
            <!-- Nav Classic -->
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
                <div class="js-slide bg-img-hero-center" style="background-image: url(../assets/img/img35.jpg);">
                    <div class="col-md-6 col-lg-12 col-xl-3mb-3 mb-md-4 pb-1">
                        <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                            <div class="position-relative mb-2">
                                <a href="../tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                    <img class="card-img-top" src="Home/img/300x230/img8.jpg" alt="img">
                                </a>
                                <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                    <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                        <span class="flaticon-valentine-heart"></span>
                                    </button>
                                </div>
                                <div class="position-absolute bottom-0 left-0 right-0">
                                    <div class="px-3 pb-2">
                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>{{ $item->	gia_tour }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-4 py-2">
                                <a href="../tour/tour-single-v1.html" class="d-block">
                                    <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                        <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                    </div>
                                </a>
                                <a href="../tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">{{ $item->	ten_tour }}</a>
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
                                    <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- End Nav Classic -->

        </div>
    </div>
    <!-- End Tabs v1 -->
    <!-- Banner v1-->
    <div class="banner-block banner-v1 bg-img-hero space-3" id="news" style="background-image: url(Home/img/1920x500/img1.jpg);">
        <div class="max-width-650 mx-auto text-center mt-xl-5 mb-xl-2 px-3 px-md-0">
            <h6 class="text-white font-size-40 font-weight-bold mb-1">Tin Tức Du Lịch</h6>
            <p class="text-white font-size-18 font-weight-normal mb-4 pb-1 px-md-3 px-lg-0">Tin tức Du lịch - Tin tức Du lịch 2020 cung cấp các thông tin Du lịch Việt Nam, Thông tin Du lịch Thế Giới, các Sự kiện Du lịch diễn ra trong ngày. Thông qua các bài viết được cập nhật liên tục, du khách có thể nắm bắt thêm được nhiều thông tin hữu ích về du lịch.</p>
            <a class="btn btn-outline-white border-width-2 rounded-xs min-width-200 font-weight-normal transition-3d-hover" href="../blog/blog-list.html">Xem ngay !</a>
        </div>
    </div>
    <!-- End Banner v1-->

    <!-- Icon Block v1 -->
    <div class="icon-block-center icon-center-v1 border-bottom border-color-8">
        <div class="container text-center space-1">
            <!-- Title -->
            <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-1 mt-3">
                <h2 class="section-title text-black font-size-30 font-weight-bold">Tại sao bạn chọn ?</h2>
            </div>
            <!-- End Title -->

            <!-- Features -->
            <div class="mb-2">
                <div class="row">
                    <!-- Icon Block -->
                    <div class="col-md-4">
                        <i class="flaticon-price text-primary font-size-80 mb-3"></i>
                        <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Giá cả cạnh tranh</a></h5>
                        <p class="text-gray-1 px-xl-2 px-uw-7">Với hơn 500 nhà cung cấp và sức mua của 300 triệu thành viên, mytravel.com có ​​thể giúp bạn tiết kiệm nhiều hơn</p>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="col-md-4">
                        <i class="flaticon-medal text-primary font-size-80 mb-3"></i>
                        <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Dịch vụ dành giải thưởng</a></h5>
                        <p class="text-gray-1 px-xl-2 px-uw-7">Đi du lịch miễn phí khi biết rằng chúng tôi ở đây nếu bạn cần, 24 giờ một ngày</p>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="col-md-4">
                        <i class="flaticon-global-1 text-primary font-size-80 mb-3"></i>
                        <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Bảo hiểm toàn cầu</a></h5>
                        <p class="text-gray-1 px-xl-2 px-uw-7">Hơn 1.200.000 khách sạn tại hơn 200 quốc gia và khu vực & chuyến bay đến hơn 5.000 thành phố</p>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
            <!-- End Features -->
        </div>
    </div>
    <!-- End Icon Block v1 -->

    <!-- Deal Carousel v1 -->
    <div class="deals-carousel-block deals-carousel-v1 border-bottom border-color-8" id="bouns">
        <div class="container space-1" >
            <h2 class="section-title text-center mb-5 mt-3">TOUR KHUYẾN MÃI</h2>
            <div class="js-slick-carousel u-slick u-slick--gutters-3" data-slides-show="3" data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-classic--v2 u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-xl-n8" data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-xl-n8"
            data-pagi-classes="d-lg-none text-center u-slick__pagination mt-4" data-responsive='[ { "breakpoint": 1025, "settings": { "slidesToShow": 3 } }, { "breakpoint": 992, "settings": { "slidesToShow": 2 } }, { "breakpoint": 768, "settings": { "slidesToShow": 1 } }, { "breakpoint": 554, "settings": { "slidesToShow": 1 } } ]'>
                <div class="js-slide mb-4">
                    <a class="d-block rounded-xs overflow-hidden mb-3" href="../blog/blog-single.html">
                        <img class="img-fluid w-100" src="Home/img/410x300/img1.jpg" alt="Image-Description">
                    </a>
                    <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                        <a href="../blog/blog-single.html">Earning Asiana Club Miles Just Got Easier!</a>
                    </h6>
                    <a class="text-gray-1" href="../blog/blog-single.html">
                        <span>Book Hotels and Earn Asiana Club Miles!</span>
                    </a>
                </div>
                <div class="js-slide mb-4">
                    <a class="d-block rounded-xs overflow-hidden mb-3" href="../blog/blog-single.html">
                        <img class="img-fluid w-100" src="Home/img/410x300/img2.jpg" alt="Image-Description">
                    </a>
                    <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                        <a href="../blog/blog-single.html">Save big on hotels!</a>
                    </h6>
                    <a class="text-gray-1" href="../blog/blog-single.html">
                        <span>Book and save with Trip.com on your next stay</span>
                    </a>
                </div>
                <div class="js-slide mb-4">
                    <a class="d-block rounded-xs overflow-hidden mb-3" href="../blog/blog-single.html">
                        <img class="img-fluid w-100" src="Home/img/410x300/img3.jpg" alt="Image-Description">
                    </a>
                    <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                        <a href="../blog/blog-single.html">Experience Europe Your Way</a>
                    </h6>
                    <a class="text-gray-1" href="../blog/blog-single.html">
                        <span>With up to 30% Off, experience Europe your way!</span>
                    </a>
                </div>
                <div class="js-slide mb-4">
                    <a class="d-block rounded-xs overflow-hidden mb-3" href="../blog/blog-single.html">
                        <img class="img-fluid w-100" src="Home/img/410x300/img1.jpg" alt="Image-Description">
                    </a>
                    <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                        <a href="../blog/blog-single.html">Earning Asiana Club Miles Just Got Easier!</a>
                    </h6>
                    <a class="text-gray-1" href="../blog/blog-single.html">
                        <span>Book Hotels and Earn Asiana Club Miles!</span>
                    </a>
                </div>
                <div class="js-slide mb-4">
                    <a class="d-block rounded-xs overflow-hidden mb-3" href="../blog/blog-single.html">
                        <img class="img-fluid w-100" src="Home/img/410x300/img2.jpg" alt="Image-Description">
                    </a>
                    <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                        <a href="../blog/blog-single.html">Save big on hotels!</a>
                    </h6>
                    <a class="text-gray-1" href="../blog/blog-single.html">
                        <span>Book and save with Trip.com on your next stay</span>
                    </a>
                </div>

                <div class="js-slide mb-4">
                    <a class="d-block rounded-xs overflow-hidden mb-3" href="../blog/blog-single.html">
                        <img class="img-fluid w-100" src="Home/img/410x300/img3.jpg" alt="Image-Description">
                    </a>
                    <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                        <a href="../blog/blog-single.html">Experience Europe Your Way</a>
                    </h6>
                    <a class="text-gray-1" href="../blog/blog-single.html">
                        <span>With up to 30% Off, experience Europe your way!</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Deal Carousel v1 -->
</main>
@include('Home.footer')
