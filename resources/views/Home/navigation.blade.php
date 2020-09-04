
<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header--dark-nav-links-xl u-header--nav-links-normal u-header--static-xl u-header--show-hide-xl" data-header-fix-moment="500" data-header-fix-effect="slide">
    <div class="u-header__section u-header__shadow-on-show-hide py-3 py-xl-0">
        <div id="logoAndNav" class="container-fluid">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space py-1">
                <!-- Logo -->
                <a class="navbar-brand u-header__navbar-brand-default u-header__navbar-brand-center u-header__navbar-brand-text-md u-header__navbar-brand-text-dark-xl u-header__divider-xl u-header__divider-right pr-xl-5" href="{{ route('Tous.Tous') }}" aria-label="TOUR NÈ !">
                    <img src="{{ asset('Admin/image/avatar/favi.png') }}" alt="" width="45px" height="43px">
                    <span class="u-header__navbar-brand-text font-weight-medium" style="color: #0d9cbf">TOUR NÈ</span>
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--primary order-2 ml-3" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                    <span id="hamburgerTrigger" class="u-hamburger__box">
                        <span class="u-hamburger__inner"></span>
                    </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div id="navBar" class="navbar-collapse u-header__navbar-collapse u-header-left-aligned-nav collapse order-2 order-xl-0 pt-4 pt-xl-0">
                    <ul class="navbar-nav u-header__navbar-nav">
                        <!-- Home -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link u-header__nav-link-border" href="{{ route('Tous.Tous') }}">Trang Chủ</a>
                        </li>
                        <!-- End Home -->

                        <!-- End Hotel -->

                        <!-- Tour -->
                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                            <a id="tourMenu" class="nav-link u-header__nav-link  u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="tourSubMenu">Du Lịch</a>
                            <!-- Tour Submenu -->
                            <ul id="tourSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" aria-labelledby="tourMenu" style="min-width: 230px;">
                                @foreach ($loai as $item)
                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="{{ route('Tous.danh-sanh_the_loai',$item->ma_loai_tour) }}">Du Lịch {{ $item->ten_loai_tour }}</a></li>
                                @endforeach
                            </ul>
                            <!-- End Tour Submenu -->
                        </li>
                        <!-- End Tour -->

                        <!-- Activicity -->
                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                            <a id="tourMenu" class="nav-link u-header__nav-link  u-header__nav-link-border" href="{{ route('Tous.khuyen_mai_tour') }}" aria-haspopup="true" aria-expanded="false" aria-labelledby="tourSubMenu">Khuyến Mãi</a>
                            <!-- Tour Submenu -->
                            {{-- <ul id="tourSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" aria-labelledby="tourMenu" style="min-width: 230px;">
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">List</a></li>
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Grid</a></li>
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Sidebar</a></li>
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Full Width</a></li>
                            </ul> --}}
                            <!-- End Tour Submenu -->
                        </li>
                        <!-- End Activicity -->

                        <!-- Rental -->
                        <li class="nav-item hs-has-sub-menu u-header__nav-item"   data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                            <a id="rentalMenu" class="nav-link u-header__nav-link  u-header__nav-link-border" href="#news" aria-haspopup="true" aria-expanded="false" aria-labelledby="rentalSubMenu">Tin Tức</a>
                            <!-- Rental Submenu -->
                            {{-- <ul id="rentalSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" aria-labelledby="rentalMenu" style="min-width: 230px;">
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">List</a></li>
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Grid</a></li>
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Sidebar</a></li>
                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Full Width</a></li>
                            </ul> --}}
                            <!-- End Rental Submenu -->
                        </li>
                        <!-- End Rental -->


                        <!-- Contact -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link u-header__nav-link-border" href="#">Liên Hệ</a>
                        </li>
                        <!-- End Contact -->

                    </ul>
                </div>
                <!-- End Navigation -->

                <!-- Shopping Cart -->

                <!-- End Shopping Cart -->

                <!-- My Account -->
                <div class="position-relative pl-4 pr-xl-4 u-header__divider-xl ml-auto ml-md-0">
                {{-- <a class="signin_member d-flex align-items-center text-primary" type="button" data-toggle="modal" data-target="#signin_member" >
                        <i class="flaticon-user mx-xl-2"></i>
                        <span class="d-none d-xl-inline-block mr-1">Đăng Nhập và Đăng kí</span>
                    </a> --}}

                </div>
                <!-- End My Account -->

                <!-- Button -->
                <!-- End Button -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
    
</header>
<!-- ========== END HEADER ========== -->
@include('Home.SignIn')







