<nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="{{ route('Quantri.Admin') }}">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">Tous</span><span class="font-size-xl text-primary"> Nè</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="{{ asset('Admin/media/avatars/avatar15.jpg')}}" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        @if(isset($user_login))
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="{{route('Quantri.edit-profile',$user_login->ma_quan_tri)}}">
                                <img class="img-avatar" src= "{{asset('Admin/image/avatar/')}}/{{ $user_login->hinh_anh }}" alt="" >
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="be_pages_generic_profile.html">{{$user_login->ten_quan_tri}}</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="{{route('dang-xuat')}}">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a href="{{route('Quantri.Admin')}}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Bảng điều khiển</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Quản lý</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Quản trị viên</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Quản lý quản trị viên</span></a>
                                        <ul>
                                            <li>
                                                <a href="{{route('Quantri.danh_sach')}}"><span class="sidebar-mini-hide">Danh sách quản trị viên</span></a>
                                            </li>
                                            <li>
                                                <a href="{{route('Quantri.chuc_vu')}}"><span class="sidebar-mini-hide">Phân quyền truy cập</span></a>
                                            </li>
                                        </ul>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Tour Du Lịch</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Quản Lý Tour</span></a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('Quantri.Danh_sach_tour') }}"><span class="sidebar-mini-hide">Loại Tour</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('Quantri.danh_sach_chuong_trinh') }}"><span class="sidebar-mini-hide">Chương trình Tour</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                            </li>
                                        </ul>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Khách hàng</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Quản lý khách hàng</span></a>
                                        <ul>
                                            <li>
                                                <a href="{{route('Quantri.list_khach')}}"><span class="sidebar-mini-hide">Danh sách khách hàng</span></a>
                                            </li>
                                        </ul>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
