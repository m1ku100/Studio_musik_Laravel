<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SISTUM &mdash; Sistem Informasi Studio Musik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/bootstrap-social-gh-pages/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-social-gh-pages/assets/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/rs-plugin/css/settings.css')}}" media="screen"/>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('jquery-ui-1.12.1/jquery-ui.css/')}}">
    <script src="{{asset('jquery-ui-1.12.1/external/jquery/jquery.js')}}"></script>
    <script src="{{asset('jquery-ui-1.12.1/jquery-ui.js')}}"></script>
    <script src="{{asset('jquery-ui-1.12.1/datepicker-id.js')}}"></script>
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <style>
        .markholiday .ui-state-default {
            color: blue;
        }

        #daftar select {
            height: 35px;
        }

        .btn-common2 {
            color: #ffffff;
            border: 2px solid #000000;
            background-color: #000000;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-common2:hover {
            color: #000000;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #000000;
            transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }

        #form_xpro .btn {
            margin: 0;
        }

        .progress {
            display: block;
            width: 100%;
            height: 12px;
            position: relative;
            z-index: 5;
            padding-right: 8px;
            padding-top: 2px;
        }

        @media all and (min--moz-device-pixel-ratio: 0) and (min-resolution: 30dpcm) {
            .progress {
                height: 10px;
            }
        }

        .progress[value] {
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0;
        }

        .progress[value]::-ms-fill {
            background-color: #0074d9;
            border: 0;
        }

        .progress[value]::-moz-progress-bar {
            background-color: #0074d9;
            margin-right: 8px;
        }

        .progress[value]::-webkit-progress-inner-element {
            background-color: #eee;
        }

        .progress[value]::-webkit-progress-value {
            background-color: #0074d9;
        }

        .progress[value]::-webkit-progress-bar {
            background-color: #eee;
        }

        .progress-circle {
            width: 24px;
            height: 24px;
            position: absolute;
            right: 3px;
            top: -5px;
            z-index: 5;
            border-radius: 50%;
        }

        .progress-circle:before {
            content: "";
            width: 6px;
            height: 6px;
            background: white;
            border-radius: 50%;
            display: block;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
        }

        .progress-group {
            margin-top: 36px;
        }

        @media (max-width: 991px) {
            .progress-group {
                margin-left: -18px;
                margin-right: -18px;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                padding: 18px;
            }
        }

        @media (max-width: 768px) {
            .progress-group {
                padding: 18px 18px 0;
                margin-bottom: 12px;
            }
        }

        .progress-group .title {
            margin-bottom: 18px;
        }

        .progress-group .wrapper {
            background: white;
            border: 1px solid #eee;
            border-radius: 12px;
            height: 14px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.3));
            filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.3));
        }

        .progress-group .step {
            width: 20%;
            position: relative;
        }

        .progress-group .step:after {
            content: "";
            height: 30px;
            width: 30px;
            background: white;
            border-radius: 50%;
            display: block;
            position: absolute;
            right: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .progress-group .step:first-of-type .progress {
            padding-left: 4px;
        }

        .progress-group .step:first-of-type .progress[value]::-moz-progress-bar {
            border-radius: 5px 0 0 5px;
        }

        .progress-group .step:first-of-type .progress[value]::-webkit-progress-value {
            border-radius: 5px 0 0 5px;
        }

        .progress-group .step:not(:first-of-type) .progress[value]::-moz-progress-bar {
            border-radius: 0;
        }

        .progress-group .step:not(:first-of-type) .progress[value]::-webkit-progress-value {
            border-radius: 0;
        }

        .progress-group .step .progress[value] + .progress-circle {
            background: #eee;
        }

        .progress-group .step.step01 .progress[value]::-moz-progress-bar {
            background-color: #23607d;
        }

        .progress-group .step.step01 .progress[value]::-webkit-progress-value {
            background-color: #23607d;
        }

        .progress-group .step.step01 .progress[value="100"] + .progress-circle {
            background-color: #23607d;
        }

        .progress-group .step.step02 .progress[value]::-moz-progress-bar {
            background-color: #2686a4;
        }

        .progress-group .step.step02 .progress[value]::-webkit-progress-value {
            background-color: #2686a4;
        }

        .progress-group .step.step02 .progress[value="100"] + .progress-circle {
            background-color: #2686a4;
        }

        .progress-group .step.step03 .progress[value]::-moz-progress-bar {
            background-color: #30a6cd;
        }

        .progress-group .step.step03 .progress[value]::-webkit-progress-value {
            background-color: #30a6cd;
        }

        .progress-group .step.step03 .progress[value="100"] + .progress-circle {
            background-color: #30a6cd;
        }

        .progress-group .step.step04 .progress[value]::-moz-progress-bar {
            background-color: #26c4c3;
        }

        .progress-group .step.step04 .progress[value]::-webkit-progress-value {
            background-color: #26c4c3;
        }

        .progress-group .step.step04 .progress[value="100"] + .progress-circle {
            background-color: #26c4c3;
        }

        .progress-group .step.step05 .progress[value]::-moz-progress-bar {
            background-color: #10C895;
        }

        .progress-group .step.step05 .progress[value]::-webkit-progress-value {
            background-color: #10C895;
        }

        .progress-group .step.step05 .progress[value="100"] + .progress-circle {
            background-color: #10C895;
        }

        .progress-labels {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .progress-labels .label {
            text-align: center;
            text-transform: uppercase;
            margin: 12px 0;
            width: 20%;
            font-size: 11px;
            padding-right: 24px;
            font-weight: 600;
            opacity: 0.7;
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body class="home-4">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
@if(session('contact'))
    <script>alert('{{session('contact')}}')</script>
@endif
<!-- header start -->
<header>
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-2 col-lg-3">
                    <div class="logo">
                        <a href="{{route('dashboard')}}"><img src="{{asset('img/logo/logo.png')}}" alt=""/></a>
                    </div>
                </div>
                <!-- logo end -->
                <!-- mainmenu start -->
                <div class="col-md-10 col-lg-9">

                    <div class="mainmenu">
                        <nav>
                            <ul id="nav">
                                <li><a href="{{route('dashboard')}}">Home</a></li>
                                @if(Auth::guest())
                                    <li><a href="{{route('login')}}">Register/Login</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#top" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">{{Auth::user()->email}} <span
                                                    class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/member/'.Auth::user()->id.'/history')}}">Order
                                                    History</a></li>
                                            <li><a href="{{url('/member/'.Auth::user()->id.'/settings')}}">Account
                                                    Settings</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-sign-out"></i> Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="{{route('dashboard')}}"><img src="{{asset('img/logo/logo.png')}}" alt=""/></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{route('dashboard')}}">Home</a></li>
                                @if(Auth::guest())
                                    <li><a href="{{route('login')}}">Register/Login</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#top" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">{{Auth::user()->email}} <span
                                                    class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/member/'.Auth::user()->id.'/history')}}">Order
                                                    History</a></li>
                                            <li><a href="{{url('/member/'.Auth::user()->id.'/settings')}}">Account
                                                    Settings</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-sign-out"></i> Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
<!-- header end -->

@yield('content')

<!-- footer start -->
<footer>
    <!-- footer-top-area start -->
    <div class="footer-top-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>CONTACT</strong> US</h1>
                        </div>
                        <p>Feel free to critics, suggests, or maybe asks to us. <br>Because your feedback make us growth
                            to be a better company.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <h1>Company Address</h1>
                    <p style="color:#111;">Gubeng Kertajaya XI No. 7, Airlangga, Gubeng</p>
                    <p style="color:#111;">Surabaya 60132 - East Java - Indonesia</p>
                    <p style="color:#111;"><a href="tel:+6282264371888">+62-822-6437-1888</a></p>
                </div>
                <div class="col-xs-4">
                    <div class="newsletter">
                        <h1>Contact Form</h1>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('submit_contact') }}">
                            {{ csrf_field() }}
                            @if(Auth::user())
                                <input name="email" value="{{Auth::user()->email}}" type="text"
                                       placeholder="Email Address"/>
                                <input name="name" value="{{Auth::user()->name}}" type="text" placeholder="Name"/>
                            @else
                                <input name="email" type="text" placeholder="Email Address"/>
                                <input name="name" type="text" placeholder="Name"/>
                            @endif
                            <textarea name="message" placeholder="Message" class="form-control"
                                      style="border:0;padding-left:20px;"></textarea>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="footer-contact">
                        <h1>Email and Social</h1>
                        <ul>
                            <li class="cc-space">
                                <span>Email:</span>
                                <span><a href="mailto:bhinnekastudiomusik@gmail.com">bhinnekastudiomusik@gmail
                                        .com</a> <br/>
									<a href="mailto:rm.rabbitmedia@gmail.com#">rm.rabbitmedia@gmail.com</a></span>
                                <div class="su-spacer"></div>
                            </li>
                            <li>
                                <span>Follow Us</span>
                                <span>
										<a href="https://facebook.com/Bhinneka-Studio-Musik-Indonesia-306170929430227/"><i
                                                    class="fa fa-facebook"></i></a>
										<a href="https://instagram.com/bhinnekastudiomusik/"><i
                                                    class="fa fa-instagram"></i></a>
										<a href="https://soundcloud.com/bhinnekastudiomusik"><i
                                                    class="fa fa-soundcloud"></i></a>
									</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top-area end -->
    <!-- footer-bottom-area start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="copyright">
                        <p>COPYRIGHT © 2017 BY <a href="http://rabbit-media.net">RABBIT MEDIA</a> ALL RIGHT RESERVED</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="footer-menu">
                        <nav>
                            <ul>
                                <li><a href="https://www.facebook.com/RabbitMedia/"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://twitter.com/rabbitmedia"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com/rabbit.media/"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a href="https://www.youtube.com/channel/UCjKrYWn5JL6dR48nvXKUibw"><i
                                                class="fa fa-youtube"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom-area end -->
</footer>
<!-- footer end -->

<!-- JS -->

<!-- jquery js -->
<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>

<!-- bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- owl.carousel.min js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<!-- meanmenu js -->
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>

<!-- jquery.countdown js -->
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>

<!-- parallax js -->
<script src="{{asset('js/parallax.js')}}"></script>

<!-- jquery.collapse js -->
<script src="{{asset('js/jquery.collapse.js')}}"></script>

<!-- jquery.easing js -->
<script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>

<!-- jquery.scrollUp js -->
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>

<!-- knob circle js -->
<script src="{{asset('js/jquery.knob.js')}}"></script>

<!-- jquery.appear js -->
<script src="{{asset('js/jquery.appear.js')}}"></script>

<!-- jquery.mixitup js -->
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>

<!-- fancybox js -->
<script src="{{asset('js/fancybox/jquery.fancybox.pack.js')}}"></script>

<!-- jquery.counterup js -->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>

<!-- rs-plugin js -->
<script type="text/javascript" src="{{asset('lib/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('lib/rs-plugin/rs.home.js')}}"></script>

<!-- wow js -->
<script src="{{asset('js/wow.js')}}"></script>
<script>
    new WOW().init();
</script>
<script>
    var vid = document.getElementById("bg");
    vid.loop = true;
    vid.muted = true
</script>

<!-- plugins js -->
<script src="{{asset('js/plugins.js')}}"></script>

<!-- main js -->
@yield('script')
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript">

    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    function hanyaAngka(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }
</script>

</body>
</html>
