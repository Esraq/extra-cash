
<!doctype html>
<html class="no-js" lang="en">

@include('layouts.header')

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('layouts.leftsidebar')
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{url('public/backend/img/logo/logo.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.header_nav')
    @yield('content')
{{--    <div class="footer-copyright-area">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="footer-copy-right">--}}
{{--                        <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @include('layouts.footer')--}}
</div>

<!-- jquery
    ============================================ -->
<script src="{{url('public/backend/js/vendor/jquery-1.11.3.min.js')}}"></script>
<script src="{{url('public/backend/js/bootstrap-datepicker.js')}}"></script>

<script>
      $(document).ready(function(){
           $('.date').datepicker({"format":"dd-mm-yyyy","autoclose":true,"todayHighlight":true});
      });
    </script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{url('public/backend/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{url('public/backend/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{url('public/backend/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{url('public/backend/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{url('public/backend/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{url('public/backend/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{url('public/backend/js/jquery.scrollUp.min.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{url('public/backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('public/backend/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{url('public/backend/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{url('public/backend/js/metisMenu/metisMenu-active.js')}}"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="{{url('public/backend/js/morrisjs/raphael-min.js')}}"></script>
<script src="{{url('public/backend/js/morrisjs/morris.js')}}"></script>
<script src="{{url('public/backend/js/morrisjs/morris-active.js')}}"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="{{url('public/backend/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{url('public/backend/js/sparkline/jquery.charts-sparkline.js')}}"></script>
<!-- calendar JS
    ============================================ -->
<script src="{{url('public/backend/js/calendar/moment.min.js')}}"></script>
<script src="{{url('public/backend/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{url('public/backend/js/calendar/fullcalendar-active.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{url('public/backend/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{url('public/backend/js/main.js')}}"></script>
@yield('js')
</body>

</html>
