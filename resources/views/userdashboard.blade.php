<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">   
    <!-- TITLE -->
    <title>Waytobooking</title>
    <link rel="shortcut icon" href="" sizes="32x32">
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
    
    <style type="text/css">
       
@import url(https://fonts.googleapis.com/css?family=Neucha);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
/*@import url(font-icomoon.css);*/
@import url(https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css);
@import url(https://fonts.googleapis.com/css?family=Oswald:400,300,700);
/** Custom field plugin **/
/* SELECT */
.selectCF{
    margin:0;
    padding:0;
    display:inline-block;
    position:relative;
    font-family: 'Neucha', cursive;
    font-size:17px;
    font-weight:bold;
}
.selectCF li{
    list-style:none;
    cursor: pointer;
    perspective: 900px;
    -webkit-perspective: 900px;
  text-align: left;
}
.selectCF > li{
    position:relative;
    font-size:0;
}
.selectCF span{
    display:inline-block;
    height:45px;
    line-height:45px;
    color:#FFF;
    z-index:1;
}
.selectCF .arrowCF{
    transition: .3s;
    -webkit-transition: .3s;
    width:45px;
    text-align:center;
    vertical-align: top;
    font-size:17px;
}
.selectCF .titleCF{
    padding: 0 10px 0 20px;
    border-left: dotted 1px rgba(244,244,244,.5);
    font-size:16px;
    font-family: 'Oswald', sans-serif;
    font-weight:400;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.selectCF .searchCF{
    padding: 0 10px 0 20px;
    border-left: dotted 1px rgba(244,244,244,.5);
    position: absolute;
    top:0;
    right:0;
    z-index:-1;
}
@keyframes searchActive {
    from{ transform: rotateY(180deg) }
    to{ transform: rotateY(0deg); }
}@-moz-keyframes searchActive {
    from{ transform: rotateY(180deg) }
    to{ transform: rotateY(0deg); }
}
@-webkit-keyframes searchActive {
    from{ -webkit-transform: rotateY(180deg) }
    to{ -webkit-transform: rotateY(0deg); }
}
.searchActive .searchCF{
    z-index:1;
    animation: searchActive 0.3s alternate 1;
    -moz-animation: searchActive 0.3s alternate 1;
    -webkit-animation: searchActive 0.3s alternate 1;
}
.searchActive .titleCF{
    opacity:0;
}
.selectCF .searchCF input{
    font-family: 'Neucha', cursive;
    line-height:45px;
    border:none;
    padding:0;
    margin:0;
    width:100%;
    height:100%;
    background:transparent;
    font-size:17px;
}
.selectCF .searchCF input:active, .selectCF .searchCF input:focus{
    box-shadow:none;
    border:none;
    outline: none;
}
.selectCF li ul{    
    display:none;
    position:absolute;
    top:100%;
    left:0;
    padding: 0 !important;
    width:100%;
    background: #FFF;
    max-height: 255px;
    overflow-y: auto;
    transition: .2s;
    -webkit-transition: .2s;
    z-index:2;
    background:rgba(253,253,253,.9);
  
}
.selectCF li ul li{
    padding:9px 0 9px 20px;
    border-bottom: 1px solid rgba(240,240,240,.9);
    font-weight:normal;
    font-size:14px;
    transition: .2s;
    -webkit-transition: .2s;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.selectCF li ul li:hover{
    background: #666;
    color:#FFF;
}
.selectCF .selected{
    background: #666;
    color:#FFF;
}
.selectCF li ul li:last-child{
    border-bottom: none;
}
.onCF .arrowCF{
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
}
@-moz-keyframes effect1 {
    from{ transform: translateY(15px); opacity:0; }
    to{ transform: translateY(0px); opacity:1; }
}
@-webkit-keyframes effect1 {
    from{ -webkit-transform: translateY(15px); opacity:0; }
    to{ -webkit-transform: translateY(0px); opacity:1; }
}
.onCF li ul{
    display:block;
    -moz-animation: effect1 0.3s alternate 1;
    -webkit-animation: effect1 0.3s alternate 1;
}

/**************************/
html{
  background: url('https://unsplash.com/photos/zJnpPhF4HyY/download');
  background-size: cover;
  text-align: center
}
h2, ul.info li, #event-change{
  font-family: 'Oswald', cursive;
  color: #FFF;
}
ul.info{
  padding: 0;
  margin: 0 0 20px 0;
}
ul.info li{
  display: inline-block;
  border: solid 1px #FFF;
  border-radius: 5px;
  padding: 0 5px;
}
#event-change{
  padding: 20px 0;
}
.custom-link{
  position: absolute;
  bottom: 30px;
  right: 30px;
  color: #FFF;
  font-size: 12px;
  text-decoration: none;
  transition: .3s;
  -webkit-transition: .3s;
  font-family: 'Oswald', sans-serif;
  font-size: 20px
}
a:hover{
  color: #E4432C;
} 

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
    </style>
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
        <span class="preloader-dot" ></span>
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
                        <a href="#"><img src="" style="width: 95px;" alt=""></a><span style="color:white;font-size:20px; font-family: 'Merienda', cursive;vertical-align: middle;">WAYTOBOOKING</span>
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
                        <form action="{{url('usersearch_step_2')}} " method="post" id="myform" >
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
                                  <button type="submit" class="btn btn-danger">SEARCH FOR BEST RATE</button>
                                </div>
                            </div>
                    
                    </form>
                    </div>
                </div>
            </div>
        </section>
        </section>
        <section class="section-accommo_1 bg-white">
        <div class="container">
          <h2 class="heading" style="text-align: center;">Packages</h2>
          <br></br>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/catering.jpg')}}" style="width:350px;height:200px;" alt="">
                  <h3>Catering</h3>
                  <div class="overlay">
                      <h2>Catering</h2>
                      <a class="info" href="{{ url('cateringnavbar')}}">Click here</a>
                  </div>
              </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/flowerdecoration.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Flower Decoration</h3>
                  <div class="overlay">
                      <h2>Flower Decoration</h2>
                      <a class="info" href="{{ url('decorationnavbar')}}">Click here</a>
                  </div>
              </div>
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
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/mehendi.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Mehendi for Wedding</h3>
                  <div class="overlay" >
                      <h2>Mehendi for Wedding</h2>
                      <a class="info" href="{{ url('Mehendinavbar')}}">Click here</a>
                  </div>
              </div>
          </div>
        </section>

        <section class="section-accommo_1 bg-white">
           <div class="container">
          <h2 class="heading" ></h2>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/makeupartist.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>MakeupArtist</h3>
                  <div class="overlay">
                      <h2>MakeupArtist</h2>
                      <a class="info" href="{{ url('MakeupArtistnavbar')}}">Click here</a>
                  </div>
              </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/bangleshastra.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>BangleShastra</h3>
                  <div class="overlay">
                      <h2>BangleShastra</h2>
                      <a class="info" href="{{ url('BangleShastranavbar')}}">Click here</a>
                  </div>
              </div>
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
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/orchestra.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Orchestra</h3>
                  
                  <div class="overlay">
                      <h2>Sangeet(Orchestra)</h2>
                      <a class="info" href="{{ url('Sangeetnavbar')}}">Click here</a>
                  </div>
              </div>
          </div>
        </section>
        <section class="section-accommo_1 bg-white">
           <div class="container">
          <h2 class="heading" ></h2>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/purohith.jpg')}}" alt="" style="width:350px;height:200px;">
                  <h3>Purohit for Marriage</h3>
                  <div class="overlay">
                      <h2>Purohit for Marriage</h2>
                      <a class="info" href="{{ url('Purohitnavbar')}}">Click here</a>
                  </div>
              </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="hovereffect">
                  <img class="img-responsive" src="{{asset('images/packages/dance.jpg')}}" alt="" style="width:350px;height:200px;">
                   <h3>Dance For Wedding</h3>
                  <div class="overlay">
                      <h2>Dance For Wedding</h2>
                      <a class="info" href="{{ url('Dancenavbar')}}">Click here</a>
                  </div>
              </div>
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
          </div>
        </section>





        <!-- END / BANNER SLIDER -->
        <!-- END / CHECK AVAILABILITY -->

        <!-- ACCOMMODATIONS -->
        
        <section class="section-accommo_1 bg-white">
            <div class="container">

                <div class="accomd-modations_1">

                    <h2 class="heading">Top  Search</h2>

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
                                <p>Waytobooking is the largest and most trusted global marketplace connecting engaged couples with local wedding professionals. Millions of couples around the world are able to search, Founded in 2020, Waytobooking's portfolio of sites help customer to search Halls and resorts according to their needs</p>
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
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@Waytobooking.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-lg-5" >
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
</body>
</html>
<script type="text/javascript">
    (function ( $ ) {
    var elActive = '';
    $.fn.selectCF = function( options ) {
 
        // option
        var settings = $.extend({
            color: "#FFF", // color
            backgroundColor: "#50C9AD", // background
            change: function( ){ }, // event change
        }, options );
 
        return this.each(function(){
            
            var selectParent = $(this);
                list = [],
                html = '';
                
            //parameter CSS
            var width = $(selectParent).width();
            
            $(selectParent).hide();
            if( $(selectParent).children('option').length == 0 ){ return; }
            $(selectParent).children('option').each(function(){
                if( $(this).is(':selected') ){ s = 1; title = $(this).text(); }else{ s = 0; }
                list.push({ 
                    value: $(this).attr('value'),
                    text: $(this).text(),
                    selected: s,
                })
            })
            
            // style
            var style = " background: "+settings.backgroundColor+"; color: "+settings.color+" ";
            
            html += "<ul class='selectCF'>";
            html +=     "<li>";
            html +=         "<span class='arrowCF ion-chevron-right' style='"+style+"'></span>";
            html +=         "<span class='titleCF' style='"+style+"; width:"+width+"px'>"+title+"</span>";
            html +=         "<span class='searchCF' style='"+style+"; width:"+width+"px'><input style='color:"+settings.color+"' /></span>";
            html +=         "<ul>";
            $.each(list, function(k, v){ s = (v.selected == 1)? "selected":"";
            html +=             "<li value="+v.value+" class='"+s+"'>"+v.text+"</li>";})        
            html +=         "</ul>";
            html +=     "</li>";
            html += "</ul>";
            $(selectParent).after(html);
            var customSelect = $(this).next('ul.selectCF'); // add Html
            var seachEl = $(this).next('ul.selectCF').children('li').children('.searchCF');
            var seachElOption = $(this).next('ul.selectCF').children('li').children('ul').children('li');
            var seachElInput = $(this).next('ul.selectCF').children('li').children('.searchCF').children('input');
            
            // handle active select
            $(customSelect).unbind('click').bind('click',function(e){
                e.stopPropagation();
                if($(this).hasClass('onCF')){ 
                    elActive = ''; 
                    $(this).removeClass('onCF');
                    $(this).removeClass('searchActive'); $(seachElInput).val(''); 
                    $(seachElOption).show();
                }else{
                    if(elActive != ''){ 
                        $(elActive).removeClass('onCF'); 
                        $(elActive).removeClass('searchActive'); $(seachElInput).val('');
                        $(seachElOption).show();
                    }
                    elActive = $(this);
                    $(this).addClass('onCF');
                    $(seachEl).children('input').focus();
                }
            })
            
            // handle choose option
            var optionSelect = $(customSelect).children('li').children('ul').children('li');
            $(optionSelect).bind('click', function(e){
                var value = $(this).attr('value');
                if( $(this).hasClass('selected') ){
                    //
                }else{
                    $(optionSelect).removeClass('selected');
                    $(this).addClass('selected');
                    $(customSelect).children('li').children('.titleCF').html($(this).html());
                    $(selectParent).val(value);
                    settings.change.call(selectParent); // call event change
                }
            })
                
            // handle search 
            $(seachEl).children('input').bind('keyup', function(e){
                var value = $(this).val();
                if( value ){
                    $(customSelect).addClass('searchActive');
                    $(seachElOption).each(function(){
                        if( $(this).text().search(new RegExp(value, "i")) < 0 ) {
                            // not item
                            $(this).fadeOut();
                        }else{
                            // have item
                            $(this).fadeIn();
                        }
                    })
                }else{
                    $(customSelect).removeClass('searchActive');
                    $(seachElOption).fadeIn();
                }
            })
            
        });
    };
    $(document).click(function(){
        if(elActive != ''){
            $(elActive).removeClass('onCF');
            $(elActive).removeClass('searchActive');
        }
    })
}( jQuery ));

$(function(){
  var event_change = $('#event-change');
  $( ".select" ).selectCF({
    change: function(){
      var value = $(this).val();
      var text = $(this).children('option:selected').html();
      console.log(value+' : '+text);
      event_change.html(value+' : '+text);
    }
  });
  $( ".test" ).selectCF({
    color: "#FFF",
    backgroundColor: "#663052",
  });
})
</script>