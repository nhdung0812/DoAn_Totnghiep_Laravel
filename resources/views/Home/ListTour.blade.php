@extends('Home.Layout')
@section('content')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="container pt-5 pt-xl-8">

        <div class="row mb-5 mb-md-8 mt-xl-1 pb-md-1">
            <div class="col-lg-4 col-xl-3 order-lg-1 width-md-50">
                <div class="navbar-expand-lg navbar-expand-lg-collapse-block">
                    <button class="btn d-lg-none mb-5 p-0 collapsed" type="button" data-toggle="collapse"
                        data-target="#sidebar" aria-controls="sidebar" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="far fa-caret-square-down text-primary font-size-20 card-btn-arrow ml-0"></i>
                        <span class="text-primary ml-2">Sidebar</span>
                    </button>
                    <div id="sidebar" class="collapse navbar-collapse">
                        <div class="mb-6 w-100">
                            <div class="pb-4 mb-2">
                                <div class="sidebar border border-color-1 rounded-xs">
                                    <div class="p-4 mb-1">
                                        <!-- Input -->
                                        <span class="d-block text-gray-1  font-weight-normal mb-0 text-left">Destination
                                            or Hotel Name</span>
                                        <div class="mb-4">
                                            <div class="input-group border-bottom border-width-2 border-color-1">
                                                <i
                                                    class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold font-size-22"></i>
                                                <input type="text"
                                                    class="form-control font-weight-medium font-size-15 shadow-none hero-form border-0 p-0"
                                                    placeholder="Where are you going?" aria-label="Keyword or title"
                                                    aria-describedby="keywordInputAddon">
                                            </div>
                                        </div>
                                        <!-- End Input -->
                                        <!-- Input -->
                                        <span class="d-block text-gray-1 font-weight-normal mb-0 text-left">Check In -
                                            Out</span>
                                        <div class="mb-4">
                                            <div class="border-bottom border-width-2 border-color-1">
                                                <div id="datepickerWrapperPick" class="u-datepicker input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="d-flex align-items-center mr-2 font-size-21">
                                                            <i
                                                                class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                        </span>
                                                    </div>
                                                    <input
                                                        class="js-range-datepicker font-weight-medium font-size-15 ml-1 shadow-none form-control hero-form bg-transparent border-0 flatpickr-input p-0"
                                                        type="text" placeholder="July 7/2019" aria-label="July 7/2019"
                                                        data-rp-wrapper="#datepickerWrapperPick" data-rp-type="range"
                                                        data-rp-date-format="M d / Y"
                                                        data-rp-default-date="[&quot;Jul 7 / 2020&quot;, &quot;Aug 25 / 2020&quot;]"
                                                        readonly="readonly" style="width: 217.5px;">
                                                    <div class="flatpickr-calendar rangeMode animate showTimeInput"
                                                        tabindex="-1">
                                                        <div class="flatpickr-months"><span
                                                                class="flatpickr-prev-month"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    viewBox="0 0 17 17">
                                                                    <g></g>
                                                                    <path
                                                                        d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z">
                                                                    </path>
                                                                </svg></span>
                                                            <div class="flatpickr-month">
                                                                <div class="flatpickr-current-month"><span
                                                                        class="cur-month">July </span>
                                                                    <div class="numInputWrapper"><input
                                                                            class="numInput cur-year" type="text"
                                                                            pattern="\d*" tabindex="-1"
                                                                            aria-label="Year"><span
                                                                            class="arrowUp"></span><span
                                                                            class="arrowDown"></span></div>
                                                                </div>
                                                            </div><span class="flatpickr-next-month"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    viewBox="0 0 17 17">
                                                                    <g></g>
                                                                    <path
                                                                        d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                                                                    </path>
                                                                </svg></span>
                                                        </div>
                                                        <div class="flatpickr-innerContainer">
                                                            <div class="flatpickr-rContainer">
                                                                <div class="flatpickr-weekdays">
                                                                    <div class="flatpickr-weekdaycontainer">
                                                                        <span class="flatpickr-weekday">
                                                                            Mo</span><span
                                                                            class="flatpickr-weekday">Tu</span><span
                                                                            class="flatpickr-weekday">We</span><span
                                                                            class="flatpickr-weekday">Th</span><span
                                                                            class="flatpickr-weekday">Fr</span><span
                                                                            class="flatpickr-weekday">Sa</span><span
                                                                            class="flatpickr-weekday">Su
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="flatpickr-days" tabindex="-1">
                                                                    <div class="dayContainer"><span
                                                                            class="flatpickr-day prevMonthDay"
                                                                            aria-label="June 29, 2020"
                                                                            tabindex="-1">29</span><span
                                                                            class="flatpickr-day prevMonthDay"
                                                                            aria-label="June 30, 2020"
                                                                            tabindex="-1">30</span><span
                                                                            class="flatpickr-day "
                                                                            aria-label="July 1, 2020"
                                                                            tabindex="-1">1</span><span
                                                                            class="flatpickr-day "
                                                                            aria-label="July 2, 2020"
                                                                            tabindex="-1">2</span><span
                                                                            class="flatpickr-day "
                                                                            aria-label="July 3, 2020"
                                                                            tabindex="-1">3</span><span
                                                                            class="flatpickr-day "
                                                                            aria-label="July 4, 2020"
                                                                            tabindex="-1">4</span><span
                                                                            class="flatpickr-day "
                                                                            aria-label="July 5, 2020"
                                                                            tabindex="-1">5</span><span
                                                                            class="flatpickr-day "
                                                                            aria-label="July 6, 2020"
                                                                            tabindex="-1">6</span><span
                                                                            class="flatpickr-day selected startRange"
                                                                            aria-label="July 7, 2020"
                                                                            tabindex="-1">7</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 8, 2020"
                                                                            tabindex="-1">8</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 9, 2020"
                                                                            tabindex="-1">9</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 10, 2020"
                                                                            tabindex="-1">10</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 11, 2020"
                                                                            tabindex="-1">11</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 12, 2020"
                                                                            tabindex="-1">12</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 13, 2020"
                                                                            tabindex="-1">13</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 14, 2020"
                                                                            tabindex="-1">14</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 15, 2020"
                                                                            tabindex="-1">15</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 16, 2020"
                                                                            tabindex="-1">16</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 17, 2020"
                                                                            tabindex="-1">17</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 18, 2020"
                                                                            tabindex="-1">18</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 19, 2020"
                                                                            tabindex="-1">19</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 20, 2020"
                                                                            tabindex="-1">20</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 21, 2020"
                                                                            tabindex="-1">21</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 22, 2020"
                                                                            tabindex="-1">22</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 23, 2020"
                                                                            tabindex="-1">23</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 24, 2020"
                                                                            tabindex="-1">24</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 25, 2020"
                                                                            tabindex="-1">25</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 26, 2020"
                                                                            tabindex="-1">26</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 27, 2020"
                                                                            tabindex="-1">27</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 28, 2020"
                                                                            tabindex="-1">28</span><span
                                                                            class="flatpickr-day today inRange"
                                                                            aria-label="July 29, 2020"
                                                                            aria-current="date"
                                                                            tabindex="-1">29</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 30, 2020"
                                                                            tabindex="-1">30</span><span
                                                                            class="flatpickr-day inRange"
                                                                            aria-label="July 31, 2020"
                                                                            tabindex="-1">31</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 1, 2020"
                                                                            tabindex="-1">1</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 2, 2020"
                                                                            tabindex="-1">2</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 3, 2020"
                                                                            tabindex="-1">3</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 4, 2020"
                                                                            tabindex="-1">4</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 5, 2020"
                                                                            tabindex="-1">5</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 6, 2020"
                                                                            tabindex="-1">6</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 7, 2020"
                                                                            tabindex="-1">7</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 8, 2020"
                                                                            tabindex="-1">8</span><span
                                                                            class="flatpickr-day nextMonthDay inRange"
                                                                            aria-label="August 9, 2020"
                                                                            tabindex="-1">9</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Datepicker -->
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Input -->
                                        <span class="d-block text-gray-1 font-weight-normal mb-0 text-left">Rooms and
                                            Guests</span>
                                        <div class="mb-4 position-relative">
                                            <div class="border-bottom border-width-2 border-color-1">
                                                <a id="basicDropdownClickInvoker"
                                                    class="dropdown-nav-link dropdown-toggle flex-horizontal-center pt-3 pb-2"
                                                    href="javascript:;" role="button" aria-controls="basicDropdownClick"
                                                    aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                                                    data-unfold-target="#basicDropdownClick"
                                                    data-unfold-type="css-animation" data-unfold-duration="300"
                                                    data-unfold-delay="300" data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <i
                                                        class="flaticon-add-group d-flex align-items-center mr-3 font-size-20 text-primary font-weight-semi-bold"></i>
                                                    <span class="text-black font-weight-medium font-size-15 mr-auto">2
                                                        Rooms - 3 Guests</span>
                                                </a>
                                                <div id="basicDropdownClick"
                                                    class="dropdown-menu dropdown-unfold col m-0 u-unfold--css-animation u-unfold--hidden fadeOut"
                                                    aria-labelledby="basicDropdownClickInvoker"
                                                    style="animation-duration: 300ms;">
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div
                                                            class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span
                                                                class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle"
                                                                    href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input
                                                                    class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center"
                                                                    type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle"
                                                                    href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div
                                                            class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span
                                                                class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle"
                                                                    href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input
                                                                    class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center"
                                                                    type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle"
                                                                    href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3">
                                                        <div
                                                            class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span
                                                                class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle"
                                                                    href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input
                                                                    class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center"
                                                                    type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle"
                                                                    href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 text-right py-1 pr-5">
                                                        <a class="text-primary font-weight-semi-bold font-size-16"
                                                            href="#">Done</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary height-60 w-100 font-weight-bold mb-xl-0 mb-lg-1 transition-3d-hover"><i
                                                    class="flaticon-magnifying-glass mr-2 font-size-17"></i>Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-4 mb-2">
                                <a href="#ontargetModal" class="d-block border rounded"
                                    data-modal-target="#ontargetModal" data-modal-effect="fadein">
                                    <img src="../../assets/img/map-markers/map.jpg" alt="" width="100%">
                                </a>
                                <!-- On Target Modal -->
                                <div id="ontargetModal"
                                    class="js-modal-window u-modal-window max-height-100vh width-100vw overflow-hidden"
                                    data-modal-type="ontarget" data-open-effect="zoomIn" data-close-effect="zoomOut"
                                    data-speed="500">
                                    <div class="bg-white">
                                        <div class="border-bottom py-xl-2">
                                            <div class="row d-block d-md-flex flex-horizontal-center mx-0">
                                                <div class="col-xl">
                                                    <!-- Nav Links -->
                                                    <ul class="row nav align-items-center py-xl-1 px-0 mb-3 mb-xl-0 border-bottom border-xl-bottom-0"
                                                        role="tablist">
                                                        <li
                                                            class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1">
                                                            <div
                                                                class="dropdown bootstrap-select js-select dropdown-select bootstrap-select__custom-nav w-xl-auto">
                                                                <select
                                                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                    data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    tabindex="-98">
                                                                    <option value="one" selected="">City</option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    data-toggle="dropdown" role="button" title="City">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">City
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                            <div
                                                                class="dropdown bootstrap-select js-select dropdown-select bootstrap-select__custom-nav w-xl-auto">
                                                                <select
                                                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                    data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    tabindex="-98">
                                                                    <option value="one" selected="">Price</option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    data-toggle="dropdown" role="button" title="Price">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">Price
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                            <div
                                                                class="dropdown bootstrap-select js-select dropdown-select bootstrap-select__custom-nav w-xl-auto">
                                                                <select
                                                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                    data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    tabindex="-98">
                                                                    <option value="one" selected="">Stars</option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    data-toggle="dropdown" role="button" title="Stars">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">Stars
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                            <div
                                                                class="dropdown bootstrap-select js-select dropdown-select bootstrap-select__custom-nav w-xl-auto">
                                                                <select
                                                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                    data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    tabindex="-98">
                                                                    <option value="one" selected="">Guest Rating
                                                                    </option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    data-toggle="dropdown" role="button"
                                                                    title="Guest Rating">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">Guest
                                                                                Rating</div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                            <div
                                                                class="dropdown bootstrap-select js-select dropdown-select bootstrap-select__custom-nav w-xl-auto">
                                                                <select
                                                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                    data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    tabindex="-98">
                                                                    <option value="one" selected="">Meals</option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    data-toggle="dropdown" role="button" title="Meals">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">Meals
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                            <div
                                                                class="dropdown bootstrap-select js-select dropdown-select bootstrap-select__custom-nav w-xl-auto">
                                                                <select
                                                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                    data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    tabindex="-98">
                                                                    <option value="one" selected="">Facilities</option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    data-toggle="dropdown" role="button"
                                                                    title="Facilities">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">
                                                                                Facilities</div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="col-6 col-md-3 col-lg-auto border-bottom border-xl-bottom-0 mx-0 col-xl-auto nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                                            <div
                                                                class="dropdown bootstrap-select js-select dropdown-select bootstrap-select__custom-nav w-xl-auto">
                                                                <select
                                                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-xl-auto"
                                                                    data-style="btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    tabindex="-98">
                                                                    <option value="one" selected="">Property Type
                                                                    </option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle btn-sm py-2 px-3 px-xl-3 px-wd-4 font-size-16 text-dark d-flex align-items-center"
                                                                    data-toggle="dropdown" role="button"
                                                                    title="Property Type">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">
                                                                                Property Type</div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- End Nav Links -->
                                                </div>
                                                <div class="col-xl-auto">
                                                    <div class="d-flex justify-content-center justify-content-xl-start">
                                                        <button type="button"
                                                            class="btn btn-wide btn-blue-1 font-weight-normal font-size-14 rounded-xs mb-3 mb-xl-0"
                                                            aria-label="Close" onclick="Custombox.modal.close();">
                                                            <span aria-hidden="true">Back to hotel list</span>
                                                            <i class="fas fa-times font-size-15 ml-3"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="height-100vh-72">
                                            <div class="row no-gutters">
                                                <div class="col-lg-5 col-xl-4 col-wd-3gdot5 order-1 order-lg-0">
                                                    <div class="pt-4 px-4 px-xl-5">
                                                        <div class="mb-4">
                                                            <div class="mb-2 text-gray-1">
                                                                50 of 3771 hotels shown
                                                            </div>
                                                            <div
                                                                class="dropdown bootstrap-select form-control js-select dropdown-select">
                                                                <select
                                                                    class="form-control js-select selectpicker dropdown-select"
                                                                    required="" data-msg="Please select option."
                                                                    data-error-class="u-has-error"
                                                                    data-success-class="u-has-success"
                                                                    data-style="form-control font-size-14 border-width-2 border-gray font-weight-normal"
                                                                    tabindex="-98">
                                                                    <option value="One" selected="">Recommended</option>
                                                                    <option value="Two">Low to High</option>
                                                                    <option value="Three">High to Low</option>
                                                                    <option value="Four">Popular</option>
                                                                </select><button type="button"
                                                                    class="btn dropdown-toggle form-control font-size-14 border-width-2 border-gray font-weight-normal"
                                                                    data-toggle="dropdown" role="button"
                                                                    title="Recommended">
                                                                    <div class="filter-option">
                                                                        <div class="filter-option-inner">
                                                                            <div class="filter-option-inner-inner">
                                                                                Recommended</div>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                                <div class="dropdown-menu " role="combobox">
                                                                    <div class="inner show" role="listbox"
                                                                        aria-expanded="false" tabindex="-1">
                                                                        <ul class="dropdown-menu inner show"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="js-scrollbar height-100vh-72 mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
                                                            style="position: relative; overflow: visible;">
                                                            <div id="mCSB_1"
                                                                class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                                                                style="max-height: 996px;" tabindex="0">
                                                                <div id="mCSB_1_container"
                                                                    class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                                    style="position:relative; top:0; left:0;" dir="ltr">
                                                                    <ul class="d-block list-unstyled">
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img58.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img59.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img60.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img3.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img61.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img62.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img63.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img9.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="card mb-4 overflow-hidden">
                                                                            <div class="product-item__outer w-100">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div
                                                                                            class="product-item__header">
                                                                                            <div
                                                                                                class="position-relative">
                                                                                                <a href="#"
                                                                                                    class="d-block gradient-overlay-half-bg-gradient-v5"><img
                                                                                                        class="img-fluid min-height-150 card-img-top mCS_img_loaded"
                                                                                                        src="../../assets/img/300x230/img10.jpg"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute top-0 left-0 pt-3 pl-4">
                                                                                                <button type="button"
                                                                                                    class="btn btn-sm btn-icon text-white rounded-circle"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title=""
                                                                                                    data-original-title="Save for later">
                                                                                                    <span
                                                                                                        class="flaticon-valentine-heart"></span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div
                                                                                                class="position-absolute bottom-0 left-0 right-0">
                                                                                                <div class="px-4 pb-3">
                                                                                                    <a href="#"
                                                                                                        class="d-block">
                                                                                                        <div
                                                                                                            class="d-flex align-items-center font-size-14 text-white">
                                                                                                            <i
                                                                                                                class="icon flaticon-pin-1 mr-2 font-size-20"></i>
                                                                                                            Greater
                                                                                                            London
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 flex-horizontal-center">
                                                                                        <div
                                                                                            class="w-100 position-relative m-4 m-md-0">
                                                                                            <div class="mb-1 pb-1">
                                                                                                <span
                                                                                                    class="green-lighter ml-2">
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                    <small
                                                                                                        class="fas fa-star font-size-10"></small>
                                                                                                </span>
                                                                                            </div>
                                                                                            <a href="#">
                                                                                                <span
                                                                                                    class="font-weight-bold font-size-17 text-dark d-flex mb-1">Empire
                                                                                                    Prestige Causeway
                                                                                                    Bay </span>
                                                                                            </a>
                                                                                            <div class="card-body p-0">
                                                                                                <div class="my-2">
                                                                                                    <span
                                                                                                        class="badge badge-pill badge-primary py-1 px-2 font-size-14 border-radius-3 font-weight-normal">4.6/5</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1 ml-2">(166
                                                                                                        reviews)</span>
                                                                                                </div>
                                                                                                <div class="mb-0">
                                                                                                    <span
                                                                                                        class="mr-1 font-size-14 text-gray-1">From</span>
                                                                                                    <span
                                                                                                        class="font-weight-bold">£350.00</span>
                                                                                                    <span
                                                                                                        class="font-size-14 text-gray-1">
                                                                                                        / night</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="mCSB_1_scrollbar_vertical"
                                                                class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical"
                                                                style="display: none;">
                                                                <div class="mCSB_draggerContainer">
                                                                    <div id="mCSB_1_dragger_vertical"
                                                                        class="mCSB_dragger"
                                                                        style="position: absolute; min-height: 50px; top: 0px;">
                                                                        <div class="mCSB_dragger_bar"
                                                                            style="line-height: 50px;"></div>
                                                                    </div>
                                                                    <div class="mCSB_draggerRail"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-xl-8 col-wd-8gdot5">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.315136188916!2d80.28787859999998!3d13.09419335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f6b00bf787831af!2sApollo%20City%20Centre%20Hospital%20Sowcarpet!5e0!3m2!1sen!2sin!4v1580992215999!5m2!1sen!2sin"
                                                        width="100%" height="100%" frameborder="0" style="border:0;"
                                                        allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End On Target Modal -->
                            </div>

                            <div class="sidenav border border-color-8 rounded-xs">
                                <!-- Accordiaon -->
                                <div id="RatingAccordion" class="accordion rounded shadow-none border-bottom">
                                    <div class="card-collapse" id="shopRatingHeadingOne">
                                        <h3 class="mb-0">
                                            <button type="button"
                                                class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed"
                                                data-toggle="collapse" data-target="#shopRatingOne"
                                                aria-expanded="false" aria-controls="shopRatingOne">
                                                <span class="row align-items-center">
                                                    <span class="col-9">
                                                        <span class="font-weight-bold font-size-17 text-dark mb-3">Star
                                                            Rating</span>
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
                                    <div id="shopRatingOne" class="collapse show" aria-labelledby="shopRatingHeadingOne"
                                        data-parent="#RatingAccordion">
                                        <div class="card-body pt-0 mt-1 px-5">
                                            <!-- Checkboxes -->
                                            <div class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="brandAdidas">
                                                    <label class="custom-control-label text-lh-inherit text-color-1"
                                                        for="brandAdidas">
                                                        <div
                                                            class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
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
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="brandNewBalance">
                                                    <label class="custom-control-label text-lh-inherit text-color-1"
                                                        for="brandNewBalance">
                                                        <div
                                                            class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
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
                                                    <label class="custom-control-label text-lh-inherit text-color-1"
                                                        for="brandNike">
                                                        <div
                                                            class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
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
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="brandFredPerry">
                                                    <label class="custom-control-label text-lh-inherit text-color-1"
                                                        for="brandFredPerry">
                                                        <div
                                                            class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
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
                                <div id="shopCartAccordion" class="accordion rounded shadow-none">
                                    <div class="border-0">
                                        <div class="card-collapse" id="shopCardHeadingOne">
                                            <h3 class="mb-0">
                                                <button type="button"
                                                    class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed"
                                                    data-toggle="collapse" data-target="#shopCardOne"
                                                    aria-expanded="false" aria-controls="shopCardOne">
                                                    <span class="row align-items-center">
                                                        <span class="col-9">
                                                            <span
                                                                class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark">Price
                                                                Range ($)</span>
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
                                        <div id="shopCardOne" class="collapse show" aria-labelledby="shopCardHeadingOne"
                                            data-parent="#shopCartAccordion">
                                            <div class="card-body pt-0 px-5">
                                                <div class="pb-3 mb-1 d-flex text-lh-1">
                                                    <span>£</span>
                                                    <span id="rangeSliderExample3MinResult" class="">200</span>
                                                    <span class="mx-0dot5"> — </span>
                                                    <span>£</span>
                                                    <span id="rangeSliderExample3MaxResult" class="">3456</span>
                                                </div>
                                                <span class="irs js-irs-0 u-range-slider height-35"><span
                                                        class="irs"><span class="irs-line" tabindex="0"><span
                                                                class="irs-line-left"></span><span
                                                                class="irs-line-mid"></span><span
                                                                class="irs-line-right"></span></span><span
                                                            class="irs-min" style="display: none;">0</span><span
                                                            class="irs-max" style="display: none;">1</span><span
                                                            class="irs-from"
                                                            style="display: none; left: 0%;">0</span><span
                                                            class="irs-to"
                                                            style="display: none; left: 0%;">0</span><span
                                                            class="irs-single"
                                                            style="display: none; left: 0%;">0</span></span><span
                                                        class="irs-grid"></span><span class="irs-bar"
                                                        style="left: 10.3217%; width: 84.5501%;"></span><span
                                                        class="irs-shadow shadow-from"
                                                        style="display: none;"></span><span class="irs-shadow shadow-to"
                                                        style="display: none;"></span><span
                                                        class="irs-slider from type_last"
                                                        style="left: 5.19349%;"></span><span class="irs-slider to"
                                                        style="left: 89.7436%;"></span></span><input
                                                    class="js-range-slider irs-hidden-input" type="text"
                                                    data-extra-classes="u-range-slider height-35" data-type="double"
                                                    data-grid="false" data-hide-from-to="true" data-min="0"
                                                    data-max="3456" data-from="200" data-to="3456" data-prefix="$"
                                                    data-result-min="#rangeSliderExample3MinResult"
                                                    data-result-max="#rangeSliderExample3MaxResult" tabindex="-1"
                                                    readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="shopCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                    <div class="border-0">
                                        <div class="card-collapse" id="shopCategoryHeadingOne">
                                            <h3 class="mb-0">
                                                <button type="button"
                                                    class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed"
                                                    data-toggle="collapse" data-target="#shopCategoryOne"
                                                    aria-expanded="false" aria-controls="shopCategoryOne">
                                                    <span class="row align-items-center">
                                                        <span class="col-9">
                                                            <span
                                                                class="font-weight-bold font-size-17 text-dark mb-3">Meals</span>
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
                                        <div id="shopCategoryOne" class="collapse show"
                                            aria-labelledby="shopCategoryHeadingOne"
                                            data-parent="#shopCategoryAccordion">
                                            <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                <!-- Checkboxes -->
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="1">
                                                        <label class="custom-control-label" for="1">Breakfast
                                                            Included</label>
                                                    </div>
                                                    <span>749</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="2">
                                                        <label class="custom-control-label"
                                                            for="2">All-inclusive</label>
                                                    </div>
                                                    <span>630</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="3">
                                                        <label class="custom-control-label" for="3">Breakfast &amp;
                                                            dinner included</label>
                                                    </div>
                                                    <span>58</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="4">
                                                        <label class="custom-control-label" for="4">Kitchen
                                                            facilities</label>
                                                    </div>
                                                    <span>29</span>
                                                </div>
                                                <!-- End Checkboxes -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="facilityCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                    <div class="border-0">
                                        <div class="card-collapse" id="facilityCategoryHeadingOne">
                                            <h3 class="mb-0">
                                                <button type="button"
                                                    class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed"
                                                    data-toggle="collapse" data-target="#facilityCategoryOne"
                                                    aria-expanded="false" aria-controls="facilityCategoryOne">
                                                    <span class="row align-items-center">
                                                        <span class="col-9">
                                                            <span
                                                                class="font-weight-bold font-size-17 text-dark mb-3">Facilities</span>
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
                                        <div id="facilityCategoryOne" class="collapse show"
                                            aria-labelledby="facilityCategoryHeadingOne"
                                            data-parent="#facilityCategoryAccordion">
                                            <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Adidas">
                                                        <label class="custom-control-label" for="Adidas">Parking</label>
                                                    </div>
                                                    <span>749</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="NewBalance">
                                                        <label class="custom-control-label"
                                                            for="NewBalance">Restaurant</label>
                                                    </div>
                                                    <span>630</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="Nike">
                                                        <label class="custom-control-label" for="Nike">Pet
                                                            friendly</label>
                                                    </div>
                                                    <span>58</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="FredPerry">
                                                        <label class="custom-control-label" for="FredPerry">Room
                                                            service</label>
                                                    </div>
                                                    <span>29</span>
                                                </div>
                                                <!-- End Checkboxes -->

                                                <!-- View More - Collapse -->
                                                <div class="collapse" id="collapseBrand1">
                                                    <div
                                                        class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="brandGucci">
                                                            <label class="custom-control-label"
                                                                for="brandGucci">Gucci</label>
                                                        </div>
                                                        <span>5</span>
                                                    </div>
                                                    <div
                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="brandMango">
                                                            <label class="custom-control-label"
                                                                for="brandMango">Mango</label>
                                                        </div>
                                                        <span>1</span>
                                                    </div>
                                                </div>
                                                <!-- End View More - Collapse -->

                                                <!-- Link -->
                                                <a class="link link-collapse small font-size-1" data-toggle="collapse"
                                                    href="#collapseBrand1" role="button" aria-expanded="false"
                                                    aria-controls="collapseBrand1">
                                                    <span class="link-collapse__default font-size-14">Show all 13</span>
                                                    <span class="link-collapse__active font-size-14">Show less</span>
                                                </a>
                                                <!-- End Link -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="propertyCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                    <div class="border-0">
                                        <div class="card-collapse" id="propertyCategoryHeadingOne">
                                            <h3 class="mb-0">
                                                <button type="button"
                                                    class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed"
                                                    data-toggle="collapse" data-target="#propertyCategoryOne"
                                                    aria-expanded="false" aria-controls="propertyCategoryOne">
                                                    <span class="row align-items-center">
                                                        <span class="col-9">
                                                            <span
                                                                class="font-weight-bold font-size-17 text-dark mb-3">Property
                                                                Type</span>
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
                                        <div id="propertyCategoryOne" class="collapse show"
                                            aria-labelledby="propertyCategoryHeadingOne"
                                            data-parent="#propertyCategoryAccordion">
                                            <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandhotel">
                                                        <label class="custom-control-label"
                                                            for="brandhotel">Hotels</label>
                                                    </div>
                                                    <span>749</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandapartmet">
                                                        <label class="custom-control-label"
                                                            for="brandapartmet">Apartments</label>
                                                    </div>
                                                    <span>630</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandbed">
                                                        <label class="custom-control-label" for="brandbed">Bed and
                                                            Breakfasts</label>
                                                    </div>
                                                    <span>58</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandresorts">
                                                        <label class="custom-control-label"
                                                            for="brandresorts">Resorts</label>
                                                    </div>
                                                    <span>29</span>
                                                </div>
                                                <!-- End Checkboxes -->

                                                <!-- View More - Collapse -->
                                                <div class="collapse" id="collapseBrand2">
                                                    <div
                                                        class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="Gucci">
                                                            <label class="custom-control-label"
                                                                for="Gucci">Gucci</label>
                                                        </div>
                                                        <span>5</span>
                                                    </div>
                                                    <div
                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="Mango">
                                                            <label class="custom-control-label"
                                                                for="Mango">Mango</label>
                                                        </div>
                                                        <span>1</span>
                                                    </div>
                                                </div>
                                                <!-- End View More - Collapse -->

                                                <!-- Link -->
                                                <a class="link link-collapse small font-size-1" data-toggle="collapse"
                                                    href="#collapseBrand2" role="button" aria-expanded="false"
                                                    aria-controls="collapseBrand2">
                                                    <span class="link-collapse__default font-size-14">Show all 39</span>
                                                    <span class="link-collapse__active font-size-14">Show less</span>
                                                </a>
                                                <!-- End Link -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="cityCategoryAccordion" class="accordion rounded-0 shadow-none border-top">
                                    <div class="border-0">
                                        <div class="card-collapse" id="cityCategoryHeadingOne">
                                            <h3 class="mb-0">
                                                <button type="button"
                                                    class="btn btn-link btn-block card-btn py-2 px-5 text-lh-3 collapsed"
                                                    data-toggle="collapse" data-target="#cityCategoryOne"
                                                    aria-expanded="false" aria-controls="cityCategoryOne">
                                                    <span class="row align-items-center">
                                                        <span class="col-9">
                                                            <span
                                                                class="font-weight-bold font-size-17 text-dark mb-3">City</span>
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
                                        <div id="cityCategoryOne" class="collapse show"
                                            aria-labelledby="cityCategoryHeadingOne"
                                            data-parent="#cityCategoryAccordion">
                                            <div class="card-body pt-0 mt-1 px-5 pb-4">
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandamsterdam">
                                                        <label class="custom-control-label"
                                                            for="brandamsterdam">Amsterdam</label>
                                                    </div>
                                                    <span>749</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandrotterdam">
                                                        <label class="custom-control-label"
                                                            for="brandrotterdam">Rotterdam</label>
                                                    </div>
                                                    <span>630</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandvalkenburg">
                                                        <label class="custom-control-label"
                                                            for="brandvalkenburg">Valkenburg</label>
                                                    </div>
                                                    <span>58</span>
                                                </div>
                                                <div
                                                    class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="brandeindhoven">
                                                        <label class="custom-control-label"
                                                            for="brandeindhoven">Eindhoven</label>
                                                    </div>
                                                    <span>29</span>
                                                </div>
                                                <!-- End Checkboxes -->

                                                <!-- View More - Collapse -->
                                                <div class="collapse" id="collapseBrand3">
                                                    <div
                                                        class="form-group font-size-14 text-lh-md text-secondary mb-3 flex-center-between">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="gucci">
                                                            <label class="custom-control-label"
                                                                for="gucci">Gucci</label>
                                                        </div>
                                                        <span>5</span>
                                                    </div>
                                                    <div
                                                        class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="mango">
                                                            <label class="custom-control-label"
                                                                for="mango">Mango</label>
                                                        </div>
                                                        <span>1</span>
                                                    </div>
                                                </div>
                                                <!-- End View More - Collapse -->

                                                <!-- Link -->
                                                <a class="link link-collapse small font-size-1" data-toggle="collapse"
                                                    href="#collapseBrand3" role="button" aria-expanded="false"
                                                    aria-controls="collapseBrand3">
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
                    <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1">London: 3292 tours found</h3> 

                </div>
                <!-- End shop-control-bar Title -->

                <!-- Slick Tab carousel -->
                <div class="u-slick__tab">
                    <!-- Nav Links -->
                    <div class="mb-5">
                        <ul class="nav flex-nowrap border border-radius-3 tab-nav align-items-center py-2 px-0"
                            role="tablist">
                            <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1">
                                <a href="#"
                                    class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Recommended
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                <select
                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-auto"
                                    data-style="btn-sm py-1 px-4 px-wd-5 font-weight-normal font-size-15  text-gray-1 d-flex align-items-center">
                                    <option value="one" selected>Giá</option>
                                    <option value="two">Two</option>
                                    <option value="three">Three</option>
                                    <option value="four">Four</option>
                                </select>
                            </li>
                            <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                <select
                                    class="js-select selectpicker dropdown-select bootstrap-select__custom-nav w-auto"
                                    data-style="btn-sm py-1 px-4 px-wd-5 font-weight-normal font-size-15  text-gray-1 d-flex align-items-center">
                                    <option value="one" selected>Đánh giá</option>
                                    <option value="two">Two</option>
                                    <option value="three">Three</option>
                                    <option value="four">Four</option>
                                </select>
                            </li>
                            <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                <a href="#"
                                    class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Guest
                                    Rating
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                <a href="#"
                                    class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Distance
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center flex-shrink-0 flex-xl-shrink-1 border-left">
                                <a href="#"
                                    class="nav-link font-weight-normal text-gray-1 text-lh-1dot6 py-1 px-4 px-wd-5 font-weight-normal font-size-15 ">Top
                                    Reviewed
                                </a>
                            </li>
                        </ul>
                    </div>
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
                                                class="card-title font-size-17 font-weight-bold mb-0 text-dark">{{ $item->ten_tour }}</a>
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