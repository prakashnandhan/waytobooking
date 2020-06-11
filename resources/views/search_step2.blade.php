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
                                <a href="{{url('userdashboard')}}">Home <span class="fa fa-caret-down"></span></a>
                            </li>
                            <li><a href="{{url('aboutway')}}">About</a></li>
                            
                            <li>
                                <a href="#">HALL TYPES <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="room-1.html">Marriage HAll</a></li>
                                    <li><a href="room-2.html">Party Hall</a></li>
                                    <li><a href="room-3.html">Event Hall</a></li>
                                    <li><a href="room-4.html">Resorts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Packages<span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                  <li><a href="{{ url('Catering')}}">Catering</a></li>
                                  <li><a href="{{ url('flowerdecoration')}}">Flower Decoration</a></li>
                                  <li><a href="{{ url('weddingbands')}}">Wedding Bands </a></li>
                                  <li><a href="{{ url('mehendi')}}">Mehendi for Wedding </a></li>
                                  <li><a href="{{ url('makeup')}}">MakeupArtist</a></li>
                                  <li><a href="{{ url('bangle')}}">BangleShastra</a></li>
                                  <li><a href="{{ url('ornaments')}}">Ornaments</a></li>
                                  <li><a href="{{ url('Sangeet')}}">Sangeet(Orchestra)</a></li>
                                  <li><a href="{{ url('purohit')}}">Purohit for Marriage</a></li>
                                  <li><a href="{{ url('dance')}}">Dance For Wedding </a></li>
                                  <li><a href="{{ url('Photography')}}">Photography</a></li>
                                 </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
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
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade">
                        <img src="{{asset('images/slider/marriagehall.jpg')}}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
                        
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         <img src="{{asset('images/slider/marriagehall.jpg')}}" alt="icons">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         WELCOME TO
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE WAYTOBOOKING</div>
                        
                        <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                    </li> 

                    <li data-transition="fade">
                        <img src="{{asset('images/slider/marriagehall.jpg')}}" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300" data-easing="easeOutBack">
                          <img src="{{asset('images/slider/marriagehall.jpg')}}" alt="">
                        </div>
            
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                           EACH HOTEL IS
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            UNIQUE 60%
                        </div>
                        
                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">JUST LIKE YOU</div>

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img src="{{asset('images/slider/marriagehall.jpg')}}" alt=""></div>
                    </li> 

                </ul>
            </div>
         <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <form action="{{Route('search_step3')}}" method="post" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-lg-9">
                        <input type="text" name="name"   style="width:200px;" placeholder='Name' required />
                        <input type="number" name="phone"  style="width:200px;"  placeholder='Phone' required />
                        <input type="email" name="email"  style="width:200px;" placeholder='Email'  required/>
                        <button type="submit" class="btn btn-danger" style="width:130px;">Send</button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>

        </section>

        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
       
         <!-- <section class="section-check-availability">
            <div class="container">
                  <div class="check-availability">
                   <div class="row">
                        <form>  
                        <div>
                            <div id="wapper">
                              <div class="style1">
                                <select class="test">
                                 <option value="1">HALL TYPES.......</option>
                                 <option value="2">Marriage Hall</option>
                                 <option value="3">Party Hall</option>
                                 <option value="3">Event Hall</option>
                                 <option value="4">Resorts</option>
                                </select>
                                <select class="test">
                                  <option value="0">AREA</option>
                                  <option value="2">Google</option>
                                  <option value="3">Yahoo!</option>
                                  <option value="4">Twitter</option>
                                  <option value="5">Princess</option>
                                  <option value="6">Youtube</option>
                                  <option value="8">Instagram</option>
                                </select>
                                <select class="test">
                                  <option value="0">No of GUESTS........</option>
                                  <option value="2">Chrome</option>
                                  <option value="3">Safari</option>
                                  <option value="4">Internet Explorer</option>
                                </select>
                                 <button type="button" class="btn btn-danger btn-lg" style="
                                        border-bottom-width: 5px;
                                        border-top-width:5px;
                                        margin-top: 5px;
                                        margin-bottom: 39px;
                                      width: 124px;
                                    ">Search</button>
                                <div id="event-change"></div>
                              </div>
                               
                            </div>

                        </div>
                    </form>

                    </div>  
                </div>
            </div>
        </section> -->
       
        <!-- END / CHECK AVAILABILITY -->
        <!-- ACCOMMODATIONS -->
        
        <section class="section-accommo_1 bg-white">
            <div class="container">

                <div class="accomd-modations_1">

                    <h2 class="heading"></h2>

                    <div class="accomd-modations-content_1" >

                        <div class="accomd-modations-slide_1" >

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                            
                                <div class="img">
                                    <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                </div>
                            
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- END / ITEM -->
                            
                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            
                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
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
                                        <img src="images/avatar/img-5.jpg" alt="">
                                        <span><strong>Seelentag</strong>From Los Angeles, California</span>
                                    </div>
                                
                                    <div class="text">
                                        <p>Both the outstanding staff and the beautiful room made our first visit to Catalina Island such a success! We enjoyed the appetizers during "wine time", the turndown service, the fresh flowers in our room and the breakfast delivered to our room in a wicker basket.. An attendant set it out for us in a charming fashion. We would not consider another property when we return to Catalina!</p>
                                    </div> 
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="guestbook-item_1">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                        <span><strong>Seelentag</strong>From Los Angeles, California</span>
                                    </div>
                                
                                    <div class="text">
                                        <p>Both the outstanding staff and the beautiful room made our first visit to Catalina Island such a success! We enjoyed the appetizers during "wine time", the turndown service, the fresh flowers in our room and the breakfast delivered to our room in a wicker basket.. An attendant set it out for us in a charming fashion. We would not consider another property when we return to Catalina!</p>
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
                                            <img src="images/home/eventdeal/img-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="images/home/eventdeal/img-1.jpg" alt="">
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
        <section class="section-home-about bg-white">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#"><img src="images/home/about/img-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <span>Lorem Ipsum is simply dummy text</span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
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
                                <img src="images/home/ourbest/img-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading">Our Best</h2>
                                <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p>
                                <ul>
                                    <li><img src="images/home/ourbest/icon-3.png" alt="icon">250 Best Rooms  5 Star</li>
                                    <li><img src="images/home/ourbest/icon-2.png" alt="icon">Wet Bar with Refrigerator</li>
                                    <li><img src="images/home/ourbest/icon-4.png" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                                    <li><img src="images/home/ourbest/icon-5.png" alt="icon">Luxurious High Thread Count </li>
                                    <li><img src="images/home/ourbest/icon-1.png" alt="icon">Breakfast each morning</li>
                                    <li><img src="images/home/ourbest/icon-6.png" alt="icon">Ocean Views to lotus Hotel</li>
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
                                    <form action="#" method="POST">
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
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                        <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@thelotushotel.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Page site</h4>
                                <ul>
                                    <li><a href="#">Guest Book</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Event</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">ABOUT</h4>
                                <ul>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Comming Soon</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-3">
                            <div class="widget widget_tripadvisor">
                                <h4 class="widget-title">Tripadvisor</h4>
                                <div class="tripadvisor">
                                    <p>Now with hotel reviews by</p>
                                    <img src="images/tripadvisor.png" alt="">
                                    <span class="tripadvisor-circle">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i class="part"></i>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2016 Lotus Hotel All rights reserved.</p>
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