<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Waytobooking</title>
    <link rel="icon" href="{{asset('images/logo.svg')}}" sizes="50x50">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="{{asset('images/logo.svg')}}"/>

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
    <style type="text/css">

        
        .btn-danger
{

  background-color: hsl(351, 68%, 11%) !important;
  background-repeat: repeat-x;
  background-image: -o-linear-gradient(top, #d12741, #2f080e);
  background-image: linear-gradient(#d12741, #2f080e);
  border-color: #2f080e #2f080e hsl(351, 68%, 1.5%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.62);
}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger {

  background-color: hsl(360, 68%, 60%) !important;
  background-repeat: repeat-x;
  background-image: linear-gradient(#fbeded, #de5353);
  border-color: #de5353 #de5353 hsl(360, 68%, 51%);
  color: #333 !important;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.59);
 }
</style><style>
.btn-danger
{

  background-color: hsl(351, 68%, 11%) !important;
  background-repeat: repeat-x;
  background-image: -o-linear-gradient(top, #d12741, #2f080e);
  background-image: linear-gradient(#d12741, #2f080e);
  border-color: #2f080e #2f080e hsl(351, 68%, 1.5%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.62);
}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger {

  background-color: hsl(360, 68%, 60%) !important;
  background-repeat: repeat-x;
  background-image: linear-gradient(#fbeded, #de5353);
  border-color: #de5353 #de5353 hsl(360, 68%, 51%);
  color: #333 !important;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.59);
 }

 .hovereffect {
  width: 70%;
  height: 60%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate(460px, -100px) rotate(180deg);
  -ms-transform: translate(460px, -100px) rotate(180deg);
  transform: translate(460px, -100px) rotate(180deg);
  -webkit-transition: all 0.2s 0.4s ease-in-out;
  transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.hovereffect:hover a.info {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
.check-availability .availability-form  .awe-calendar-wrapper
{
  margin-top: 20px;
}
.awe-select
{
  margin-top: 20px;
}
.vailability-submit
{
  margin-top: 20px;
}

    </style>
</head>
<body> <!--<![endif]-->
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
                            <a href="{{url('userlogin')}}" style="font-size:20px;">Login</a>
                            <a href="{{url('usersignup')}}" style="font-size:20px;">register</a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                          <img src="{{asset('images/logo.svg')}}" alt="User Image" style="width: 95px;height: 60px;"><span style="color: white;font-size:19px; font-family: 'Merienda', cursive;vertical-align: middle;
                            background: ;
                            color:darkred;text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">AYTOBOOKING</span>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <a href="{{url('/')}}">Home <span></span></a>
                            </li>
                            <li><a href="#about">About</a></li>
                            
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
           @if (session('message'))
            <div class="alert alert-success" id="dangerMessage">
            {{ session('message') }}
            </div>
           @endif
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade">
                        <img src="{{asset('images/slider/partyhall1.jpg')}}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
                        
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         <img src="{{asset('images/slider/event1.jpg')}}" alt="icons">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         WELCOME TO
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE WAYTOBOOKING</div>
                        
                        <!-- <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a> -->
                    </li> 

                    <li data-transition="fade">
                        <img src="{{asset('images/slider/marriage2.jpg')}}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300" data-easing="easeOutBack">
                          <img src="{{asset('images/slider/marriagehall.jpg')}}" alt="">
                        </div>
            
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                           EACH HALL IS
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            UNIQUE 60%
                        </div>
                        
                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">JUST LIKE YOU</div>

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img src="{{asset('images/slider/resort.jpg')}}" alt=""></div>
                    </li> 

                </ul>
            </div>
            <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <form action="{{url('guestsearch_step_2')}} " method="post" id="myform" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                                <div class="availability-form">
                                <select class="awe-select" name="halltype" id="halltype" required>
                                 <option value="">Hall Type</option>
                                 <option value="marriagehall">Marriage Hall</option>
                                 <option value="partyhall">Party Hall</option>
                                 <option value="eventhall">Event Hall</option>
                                 <option value="resort">Resorts</option>
                                </select>
                                
                                <select class="awe-select" name="area" id="area" required>
                                  <option value="">Area</option>
                                  @foreach($data as $mk=>$p)
                                  <option value="<?php echo $p->area_name ?>"><?php echo $p->area_name ?></option>
                                  @endforeach
                                </select>
                                <select class="awe-select" name="No_Guest" id="Guest" required>
                                  <option value="">No.of Guests</option>
                                  <option value="<10"> < 10 </option>
                                  <option value="<50"> < 50 </option>
                                  <option value="<100"> < 100 </option>
                                  <option value="<250"> < 250 </option>
                                  <option value="250-500">250-500</option>
                                  <option value="500-750">500-750</option>
                                  <option value="750-1000">750-1000</option>
                                  <option value="Above 1000">Above 1000</option>
                                </select>
                                <input type="text" name="fromdate" class="awe-calendar from" placeholder="From Date" required>
                                <input type="text" name="todate" class="awe-calendar from" placeholder="To Date" required>
                                <div class="vailability-submit">
                                  <button type="submit" class="btn btn-danger">SEARCH FOR BEST PRICE</button>
                                </div>
                            </div>
                    
                    </form>
                    </div>
                </div>
            </div>
        </section>
        </section>
         
         <section class="section-accommo_1 bg-white" style="padding-left:60px;">
        <div class="container">
          <h2 class="heading" style="text-align:center;padding-left: 0px;padding-right: 60px;">PACKAGES</h2>
          <br>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/catering.jpg')}}" style="width:350px;height:200px;" alt="">
                  <h3>Catering</h3>
                  <div class="overlay">
                      <h2>Catering</h2>
                      <a class="info" href="{{ url('cateringnavbar')}}">Click here</a>
                  </div>

              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('cateringnavbar')}}"><B>View<B></a>
              </button>         
          </div>
         


           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/flowerdecoration.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Flower Decorations And Lightings,</h3><h3>Sounds</h3>
                  <div class="overlay">
                      <h2>Flower Decoration</h2>
                      <a class="info" href="{{ url('decorationnavbar')}}">Click here</a>
                  </div>
              </div>
                 <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('decorationnavbar')}}"><B>View<B></a>
              </button>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/weddingbands.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Wedding Bands</h3>
                  <div class="overlay">
                      <h2>Wedding Bands</h2>
                      <a class="info" href="{{ url('Bandsnavbar')}}">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('Bandsnavbar')}}"><B>View<B></a>
              </button>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/mehendi.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Mehendi</h3>
                  <div class="overlay" >
                      <h2>Mehendi</h2>
                      <a class="info" href="{{ url('Mehendinavbar')}}">Click here</a>
                  </div>
              </div>
                <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('Mehendinavbar')}}"><B>View<B></a>
              </button>
          </div>
        </section>

        <section class="section-accommo_1 bg-white" style="padding-left: 60px;">
           <div class="container">
          <h2 class="heading" ></h2>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/makeupartist.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Makeup Artist</h3>
                  <div class="overlay">
                      <h2>Makeup Artist</h2>
                      <a class="info" href="{{ url('MakeupArtistnavbar')}}">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('MakeupArtistnavbar')}}"><B>View<B></a>
              </button>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/bangleshastra.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Bangle Shastra</h3>
                  <div class="overlay">
                      <h2>BangleShastra</h2>
                      <a class="info" href="{{ url('BangleShastranavbar')}}">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('BangleShastranavbar')}}"><B>View<B></a>
              </button>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/ornaments.jpg')}}" alt="" style="width:350px;height:200px;">
                   <h3>Ornaments</h3>
                  <div class="overlay">
                      <h2>Ornaments</h2>

                      <a class="info" href="{{ url('Ornamentsnavbar')}}#">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('Ornamentsnavbar')}}"><B>View<B></a>
              </button>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/orchestra.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Sangeet(Orchestra)</h3>
                  
                  <div class="overlay">
                      <h2>Sangeet(Orchestra)</h2>
                      <a class="info" href="{{ url('Sangeetnavbar')}}">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('Sangeetnavbar')}}"><B>View<B></a>
              </button>
          </div>
        </section>
        <section class="section-accommo_1 bg-white" style="padding-left:60px;">
           <div class="container">
          <h2 class="heading" ></h2>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/purohith.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Purohit</h3>
                  <div class="overlay">
                      <h2>Purohit for Marriage</h2>
                      <a class="info" href="{{ url('Purohitnavbar')}}">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('Purohitnavbar')}}"><B>View<B></a>
              </button>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/dance.jpg')}}" alt="" style="width:350px;height:200px;">
                   <h3>Dance</h3>
                  <div class="overlay">
                      <h2>Dance</h2>
                      <a class="info" href="{{ url('Dancenavbar')}}">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('Dancenavbar')}}"><B>View<B></a>
              </button>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/Photography.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Photography</h3>
                  <div class="overlay">
                      <h2>Photography</h2>
                      <a class="info" href="{{ url('Photographynavbar')}}#">Click here</a>
                  </div>
              </div>
               <button type="button" class="btn btn-info" style="padding-right: 10px;
    							padding-left: 10px;">
              <a href="{{ url('Photographynavbar')}}"><B>View<B></a>
              </button>
          </div>

        </section>
        <!-- END / BANNER SLIDER -->
        <!-- END / CHECK AVAILABILITY -->

        <!-- ACCOMMODATIONS -->
        
        <section class="section-accommo_1 bg-white">
            <div class="container">

                <div class="accomd-modations_1">

                    <h2 class="heading" style="text-align: center;">Top  Search</h2>

                    <div class="accomd-modations-content_1" >

                        <div class="accomd-modations-slide_1" >

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                            
                                <div class="img">
                                    <a href="{{ url('Marriagenavbar')}}"><img src="{{asset('images/slider/laxury1.jpg')}}" alt=""></a>
                                </div>
                            
                                <div class="text">
                                    <h2><a href="{{ url('Marriagenavbar')}}">Marriage Hall</a></h2>
                                    <p class="desc">A good venue will serve as the best decision in making the whole ceremony more comfortable and enjoyable.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                           <!--  <span class="amout">$320</span> /days -->
                                        </p>
                                      <a href="{{ url('Marriagenavbar')}}" class="awe-btn awe-btn-default">VIEW </a>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- END / ITEM -->
                            
                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="{{ url('Partynavbar')}}"><img src="{{asset('images/slider/laxury2.png')}}" alt="" style="width:360px;height:240px;"></a>
                                </div>
                                <div class="text">
                                    <h2><a href="{{ url('Partynavbar')}}">Party Hall</a></h2>
                                    <p class="desc">Waytobooking serves best party hall for enjoying  a moment with loved ones,making the whole party more comfortable and enjoyable.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <!-- <span class="amout">$320</span> /days -->
                                        </p>
                                        <a href="{{ url('Partynavbar')}}" class="awe-btn awe-btn-default">VIEW</a>
                                    </div>
                                </div>
                            </div>
                              <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="{{ url('Resortsnavbar')}}"><img src="{{asset('images/slider/resort.jpg')}}" alt="" style="width:360px;height:240px;"></a>
                                </div>
                                <div class="text">
                                    <h2><a href="{{ url('Resortsnavbar')}}">Resorts</a></h2>
                                    <p class="desc">Waytobooking serves best Resorts for Staying
                                      and making more comfortable and enjoyable..
                                      with loved ones...
                                    </p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <!-- <span class="amout">$320</span> /days -->
                                        </p>
                                       <a href="{{ url('Resortsnavbar')}}" class="awe-btn awe-btn-default">VIEW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                             <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="{{ url('Eventnavbar')}}"><img src="{{asset('images/slider/event.jpg')}}" alt="" style="width:360px;height:240px;"></a>
                                </div>
                                <div class="text">
                                    <h2><a href="{{ url('Eventnavbar')}}">Event Hall</a></h2>
                                    <p class="desc">Waytobooking serves best event hall for celebrating a events and making the whole event more comfortable and enjoyable.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <!-- <span class="amout">$320</span> /days -->
                                        </p>
                                       <a href="{{ url('Eventnavbar')}}" class="awe-btn awe-btn-default">VIEW</a>
                                    </div>
                                </div>
                            </div>
                           

                            <!-- ITEM -->
                            
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                         
                            <!-- END / ITEM -->
                            
                        </div>

                    </div>

                </div>

            </div>
        </section>
        
        <!-- ACCOMMODATIONS -->
        
        <!-- SECTION GUESTBOOK - EVENT DEAD -->
        <section class="section-guestbook-event bg-white">
            <div class="container">

                <div class="guestbook-event">
                    <div class="row">

                        <div class="col-md-6">

                            <h2 class="heading">GUEST BOOK</h2>

                            <div class="guestbook-content_1 owl-single">

                                <!-- ITEM -->
                                <div class="guestbook-item_1">
                                    <div class="img">
                                        <img src="{{asset('images/slider/laxury5.webp')}}" alt="">
                                        <span><strong>Top Hall</strong>From Banglore</span>
                                    </div>
                                
                                    <div class="text">
                                        <p>Both the outstanding staff and the beautiful halls are available through our website  </p>
                                    </div> 
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="guestbook-item_1">
                                    <div class="img">
                                        <img src="{{asset('images/slider/event.jpg')}}" alt="">
                                        <span><strong>Top Hall</strong>From Banglore</span>
                                    </div>
                                
                                    <div class="text">
                                       <p>Both the outstanding staff and the beautiful halls are available through our website  </p>
                                    </div> 
                                </div>
                                <!-- END / ITEM -->

                            </div>

                        </div>

                        <div class="col-md-6">
                            <h2 class="heading">GUEST BOOK</h2>

                            <div class="event-slide owl-single">
                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="{{asset('images/slider/laxury5.webp')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="{{asset('images/slider/event.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- END / SECTION GUESTBOOK - EVENT DEAD -->
        
        <!-- ABOUT -->
        <section class="section-home-about bg-white" id="about">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                  <img src="{{asset('images/logo.svg')}}"><span style="color: white;font-size:21px; font-family: 'Merienda', cursive;vertical-align: middle;">AYTOBOOKING</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <span><h3>Waytobooking</h3></span>
                                <p>Waytobooking is the largest and most trusted global marketplace connecting engaged couples with local wedding professionals. Millions of couples around the world are able to search, Founded in 2020, Waytobooking's portfolio of sites help customer to search Halls Resorts and Packages according to their needs</p>
                             <!--    <a href="{{url('aboutway')}}" class="awe-btn awe-btn-default">READ MORE</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->

        <!-- OUR BEST -->
        <section class="section-our-best bg-white">
            <div class="container">

                <div class="our-best">
                    <div class="row">

                        <div class="col-md-6 col-md-push-6">
                            <div class="img">
                                <img src="{{asset('images/slider/partyhall1.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading">Our Best</h2>
                              <!--   <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p> -->
                                <ul>
                                    <li><img src="images/home/ourbest/icon-3.png" alt="icon">Top Marriage Hall Booking</li>
                                    <li><img src="images/home/ourbest/icon-2.png" alt="icon">Top Party Hall Booking</li>
                                    <li><img src="images/home/ourbest/icon-4.png" alt="icon">Top Event Hall Booking</li>
                                    <li><img src="images/home/ourbest/icon-5.png" alt="icon">Top Resort Booking</li>
                                    <li><img src="images/home/ourbest/icon-3.png" alt="icon">Top Packages Booking</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
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
                                    <a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.twitter.com" target="blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.gmail.com" target="blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="https://www.instagram.com" target="blank"><i class="fa fa-instagram"></i></a>
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
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:Waytobooking@gmail.com">Waytobooking@gmail.com</a></p>
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
            <!--Start of Tawk.to Script-->
<script type="text/javascript">

</script>
<!--End of Tawk.to Script-->

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

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
       $('#halltype').change(function(){

           if ($(this).val() == 'resort') {
            $('#Guest').hide();
                        
           }
           else{
            $('#Guest').Show();
              
           }
        });
  });


setTimeout(function() {
$('#dangerMessage').fadeOut('fast');
}, 7000);



</script>