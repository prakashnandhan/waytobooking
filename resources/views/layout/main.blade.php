<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Waytobooking</title>
    <link rel="shortcut icon" href="{{asset('images/logo.svg')}}" sizes="50x50">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <link href="https://fonts.googleapis.com/css?family=Amita:400,700|Kaushan+Script|Merienda:400,700&display=swap&subset=devanagari,latin-ext" rel="stylesheet">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/font-lotusicon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/jquery-ui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap-select.min.css')}}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v2">
            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_right float-right">
                        <span class="login-register">
                            <a href="{{url('userdashboard')}}" style="font-size:20px;"><i class="fa fa-user" aria-hidden="true"></i></i>
                            <?php
                            echo request()->session()->get('userdata');
                            ?>  
                            </a>
                            <a href="{{url('userlogin')}}" style="font-size:20px;"><i class="fa fa-sign-out" aria-hidden="true"></i>Signout</a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -20
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                          <img src="{{asset('images/logo.svg')}}" alt="User Image" style="width: 95px;height: 60px;"><span style="color: white;font-size:21px; font-family: 'Merienda', cursive;vertical-align: middle;font-family: sans-serif;
                            background: #222;
                            color: darkred;text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">AYTOBOOKING</span>
                    </div>
                    <!-- END / HEADER LOGO -->
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <a href="{{url('/')}}">Home <span ></span></a>
                            </li>
                            <!-- <li><a href="{{url('aboutway')}}">About</a></li> -->
                            
                            <li>
                                <a href="#">HALL TYPES <span class="fa fa-caret-down"></span></a>
                               <ul class="sub-menu">
                                    <li><a href="{{ url('Marriagenavbar')}}">Marriage HAll</a></li>
                                    <li><a href="{{ url('Partynavbar')}}">Party Hall</a></li>
                                    <li><a href="{{ url('Eventnavbar')}}">Event Hall</a></li>
                                    <li><a href="{{ url('Resortsnavbar')}}"">Resorts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Packages<span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                  <li><a href="{{ url('cateringnavbar')}}">Catering</a></li>
                                  <li><a href="{{ url('decorationnavbar')}}">Flower Decoration</a></li>
                                  <li><a href="{{ url('Bandsnavbar')}}">Wedding Bands </a></li>
                                  <li><a href="{{ url('Mehendinavbar')}}">Mehendi for Wedding </a></li>
                                  <li><a href="{{ url('MakeupArtistnavbar')}}">MakeupArtist</a></li>
                                  <li><a href="{{ url('BangleShastranavbar')}}">BangleShastra</a></li>
                                  <li><a href="{{ url('Ornamentsnavbar')}}">Ornaments</a></li>
                                  <li><a href="{{ url('Sangeetnavbar')}}">Sangeet(Orchestra)</a></li>
                                  <li><a href="{{ url('Purohitnavbar')}}">Purohit for Marriage</a></li>
                                  <li><a href="{{ url('Dancenavbar')}}">Dance For Wedding </a></li>
                                  <li><a href="{{ url('Photographynavbar')}}">Photography</a></li>
                                 </ul>
                            </li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->
                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                  <!-- END / MENU BAR -->
                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->
        </header>
        <!-- END / HEADER -->
        

        <!-- BANNER SLIDER -->
     <div style="background-color:white;" class="content-wrapper">
       <!-- Content Header (Page header) -->
      @yield('content')
      <!-- /.content -->
     </div>
        <!-- END / OUR BEST -->

        <!-- FOOTER -->
       <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <!-- WIDGET MAILCHIMP -->
                        <div class="col-lg-9">
                            <div class="mailchimp">
                           
                                <h4>News &amp; Offers</h4>
                                <div class="mailchimp-form">
                                    <form action="{{url('newsletter')}} " method="POST">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="text" name="email" placeholder="Your email address" class="input-text">
                                        <button class="awe-btn">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET MAILCHIMP -->
                        
                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3">
                            <div class="social">
                                <div class="social-content">
                                    <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                                    <a href="www.gmail.com"><i class="fa fa-google-plus"></i></a>
                                    <a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center" id="contact">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                     <h4 class="widget-title">Contact Us</h4>
                                    <div class="text">
                                       <a href="#"><img src="{{asset('images/logo.svg')}}" style="width: 78px;" alt=""></a><span style="color:white;font-size:18px; font-family: 'Merienda', cursive;vertical-align: middle;">AYTOBOOKING</span>
                                        <p><i class="lotus-icon-location"></i>Banglore</p>
                                        <p><i class="lotus-icon-phone"></i> +919880455020</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@Waytobooking.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget">
                                <h4 class="widget-title">Page site</h4>
                                 <ul>
                                    <li><a href="{{ url('Marriagenavbar')}}">Marriage HAll</a></li>
                                    <li><a href="{{ url('Partynavbar')}}">Party Hall</a></li>
                                    <li><a href="{{ url('Eventnavbar')}}">Event Hall</a></li>
                                    <li><a href="{{ url('Resortsnavbar')}}">Resorts</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2020 Waytobooking All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="{{ asset('js/lib/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/bootstrap-select.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="{{ asset('js/lib/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.appear.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js')}}"></script>

     <!-- GetButton.io widget -->
            <script type="text/javascript">
            (function () {
            var options = {
            whatsapp: "+919880455020", // WhatsApp number
            call_to_action: "", // Call to action
            position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
            </script>
<!-- /GetButton.io widget -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
/*var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e4d0a47298c395d1ce8b06b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();*/
</script>
<!--End of Tawk.to Script--
</body>
</html>

