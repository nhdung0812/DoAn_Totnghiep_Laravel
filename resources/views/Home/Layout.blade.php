        @include('Home.head')
        <!-- ========== HEADER ========== -->
        @include('Home.navigation')
        <!-- ========== END HEADER ========== -->
        <!-- Main Content -->
        @yield('content')
        <!-- ========== END Main Content ========== -->
        <!-- Go to Top -->
        <a class="js-go-to u-go-to-modern" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
            <span class="flaticon-arrow u-go-to-modern__inner"></span>
        </a>
        <!-- End Go to Top -->
        @include('Home.footer')

