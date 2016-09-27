<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Paradox Coming-Soon Page ">
    <meta name="keywords" content="coming-soon,bootstrap,youtube background,slideshow background">
    <meta name="author" content="">
    <title>Scoresheets System</title>    
    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/lib/font-awesome-4.3.0/css/font-awesome.min.css') }}">
    <!-- plugin stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/vegas.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.mb.YTPlayer.min.css') }}">
    <!-- default css files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/lib/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/lib/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/structure.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">

</head>
<body class="single-image video-bg">
    <!-- main section -->
    <div id="main-wrapper">
        <!-- page section -->
        <main id="main" class="background vd-bg" data-image="{{ asset('frontend/images/main-bg.jpg') }}">
            <!-- Overlay -->  
            <div class="overlay">
                <div class="gradient-overlay background-blue-dark opacity-60">
                </div>
            </div>
            <!-- image overlay -->
            <div class="overlay" style="background-color: rgba(0,0,0,0.6)"></div>
            <!-- end images overlay -->
            <div class="nc-content-section index nc-active vhm">
                <!-- particles effects -->
                <div id="particles"></div>
                <!-- home page -->
                <div id="home-page" class="page-wrapper vhm-item active-home anim s01">
                    <div class="container">
                        <!-- tagline -->
                        <div class="tagline ac anim fadeInUp s01 delay-0-6s">
                            <!-- text animation -->
                            <div class="carousel-widget text-carousel" data-itemrange="false" data-in="zoomIn" data-out="slideOutDown" data-autoplay="true" data-loop="true" data-items="1" data-mouseDrag="false" data-touchDrag="false">
                                <div class="carousel">                                  
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <h1>SCORESHEETS<font color="red">SYSTEM</font></h1>
                                        </div>
                                        <div class="item">
                                            <h1>BEST<font color="red">CS</font></h1>
                                        </div>
                                    </div>                        
                                </div>
                            </div>
                            <!-- Counter -->
                            <div class="counter-container">
                                <img src="{{ asset('frontend/images/logo.png') }}">
                            </div>                 
                        </div>
                        <!-- end tagline -->
                        <!-- subscribe -->
                        <div class="subscribe ac anim fadeInUp s01 delay-0-8s">
                            <form class="subscription-form clear form-field-wrapper" role="form" method="POST" action="{{ url('/checking') }}">
                                {{ csrf_field() }}
                                <input type="text" class="form-control error" name="nik" required="required" placeholder="Enter your NIK">
                                @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong><font color="red">{{ $errors->first('nik') }}</font></strong>
                                    </span>
                                @endif
                                <br>
                                <input type="text" class="form-control error" name="email" required="required" placeholder="Enter your E-Mail">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong><font color="red">{{ $errors->first('email') }}</font></strong>
                                    </span>
                                @endif<br>
                                @if (session('status'))
								    <center><h4> {{ session('status') }} </h4></center>
								@endif 		
                                <br><br>
                                <center><a href="{{ url('bestcs/login') }}" class="pull-right"><font color="white"><h4>Login</h4></font></a></center>
                                <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check vhm-item"></i> Check</button>
                            </form>
                            <br>
                            
                        </div>
                        <!-- end subscribe -->

                        <!-- copyright -->
                        <div class="copyrights ac anim fadeInUp s01 delay-1s">
                            THE BEST CUSTOMER SERVICE AWARD 2016
                        </div>
                        <!-- end copyright -->
                    </div>
                </div>
                <!-- home-page end -->
                <!-- ajax page -->
                <div id="ajax-page" class="page-wrapper vhm-item">                    
                </div>
                <!-- end ajax page -->
            </div>
            <!-- click overlay -->
            <div class="nc-overlay"></div>
            <!-- end click overlay -->
        </main>
        <!-- end page section -->
    </div>
    <!-- end main section -->

    <!-- Javascript files -->
    <script src="{{ asset('frontend/js/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/plugins.min.js') }}"></script>
    <!-- plugin scripts -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/vegas.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/video-bg.js') }}"></script>        
    <!-- Particles effects -->
    <script type='text/javascript' src="{{ asset('frontend/js/jquery.particleground.js') }}"></script> 
    <!-- common script -->
    <script src="{{ asset('frontend/js/common.js') }}"></script>
    </body>

</html>