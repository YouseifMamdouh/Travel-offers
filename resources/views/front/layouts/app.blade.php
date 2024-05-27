<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="" type="image/x-icon" />
    <title>Ral Travel</title>
    <link rel="shortcut icon" href="{{asset('front/assets/images/logo-ral.png')}}"/>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vampiro+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/font-awesome.css') }}">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/animate.css') }}">

    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/datepicker.min.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/slick-theme.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/magnific-popup.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/bootstrap.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/themify-icons.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/color1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/sweetalert2.min.css') }}">

    @if(!Request::is('/') || !Request::is('/hotels'))
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/custom-nav.css') }}">
    @endif

    <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/pretty-checkbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/override.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/locale_'.app()->getLocale().'.css')}}">
    @yield('style')
    @stack('user.css')
<!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4050682475145440');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=4050682475145440&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->


    <!-- Snap Pixel Code -->
    <script type='text/javascript'>
        (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
        {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
            a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
            r.src=n;var u=t.getElementsByTagName(s)[0];
            u.parentNode.insertBefore(r,u);})(window,document,
            'https://sc-static.net/scevent.min.js');

        snaptr('init', '6d785bdc-d1f0-4610-b608-ba27f1c19c16', {
            'user_email': '_INSERT_USER_EMAIL_'
        });

        snaptr('track', 'PAGE_VIEW');

    </script>
    <!-- End Snap Pixel Code -->
</head>

<body>

    <!-- pre-loader start -->
    <div class="loader-wrapper img-gif">
        <img src="{{ asset('front/assets/images/loader.gif') }}" alt="">
    </div>
    <!-- pre-loader end -->

    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fas fa-angle-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

    <div class="whats_app_quick" style="display: none;position: fixed;bottom: 107px;width: 45px;right: 23px;z-index: 10000;">
        <a target="_blank" href="https://wa.me/+966549416068">
            <img src="{{asset('front/assets/images/icon/whatsapp.png')}}" alt="" style="width: 100%;">
        </a>
    </div>

    <!-- setting start -->
    {{-- <div class="theme-setting">
        <div class="dark">
            <input class="tgl tgl-skewed" id="dark" type="checkbox">
            <label class="tgl-btn" data-tg-off="Dark" data-tg-on="Light" for="dark"></label>
        </div>
        <div class="rtl">
            <input class="tgl tgl-skewed" id="rtl" type="checkbox">
            <label class="tgl-btn" data-tg-off="RTL" data-tg-on="LTR" for="rtl"></label>
        </div>
    </div> --}}
    <!-- setting end -->


    <!-- latest jquery-->
    <script src="{{ asset('front/assets/js/jquery-3.5.1.min.js') }}"></script>

    <!-- date-time picker js -->
    <script src="{{ asset('front/assets/js/date-picker.js') }}"></script>

    <!-- wow js-->
    <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('front/assets/js/slick.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('front/assets/js/lazysizes.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('front/assets/js/script.js') }}"></script>
    <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>


    <script>
        new WOW().init();
        $('.datepicker').each(function() {
            $(this).datepicker({
                uiLibrary: 'bootstrap4'
            });
        });
    </script>
    <script src="{{asset('front/assets/js/sweetalert2.all.min.js')}}"></script>


    @if(Session::has('error-auth'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'error',
                    text: "{{Session::get('error-auth')}}",
                    dangerMode: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Fine!',
                    showCloseButton: true,
                });
            });

        </script>
    @endif
    @if(Session::has('error'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'error',
                    text: "{{Session::get('error')}}",
                    dangerMode: true,
                    confirmButtonColor: '#3085d6',
                    // cancelButtonColor: '#d33',
                    confirmButtonText: 'Fine!',
                    showCloseButton: true,
                });
            });

        </script>
    @endif
    @if($errors->has('subscription_email'))
        <script>
            ToastyError();
        </script>
    @endif
    @if(Session::has('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    text: "{{Session::get('success')}}",
                    dangerMode: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Fine!',
                    showCloseButton: true,
                });
            });
        </script>
    @endif
    @yield('script')
    @stack('user.js')
    <script>
        $(document).ready(function () {
            // Make All Ad Cards Same Height
            let special_box = $('div.special-content');
            let cardMaxHeight = Math.max.apply(null, special_box.map(function () {
                return $(this).height();
            }).get());
            special_box.height(cardMaxHeight);
        });
    </script>
</body>

</html>
