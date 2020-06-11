@extends('layout.guestmain')
@section('content')
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
                        <form action="{{Route('guestsearch_step3')}}" method="post" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-lg-3"></div>
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
        
        <!-- END / FOOTER -->

    </div>
        <!-- END / ABOUT -->

        <!-- OUR BEST -->
     


@endsection