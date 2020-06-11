@extends('layout.guestmain')
@section('content')
 <section class="section-sub-banner bg-9">
           
            <div class="sub-banner">
                <div class="container">

                    <div class="text text-center"> 

                    </div>
            </div>
 </section>
  
  
        <!-- END / SUB BANNER -->
        
        <!-- RESTAURANTS -->
        @if(isset($catering))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                    	   	@if (session('message'))
                   			<div class="alert alert-success" id="dangerMessage">
                   			{{ session('message') }}
     						</div>
							@endif
                    	<h1 style="text-align: center;">Catering</h1>

                        <div class="icon-restaurant text-center"><i class="lotus-icon-cooker-hood"></i></div>

                        <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul>

                        <div id="tabs-1">
                            <div class="restaurant_content">
                                <div class="row">
                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/southmealsveg.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">South indian veg Meals</a></h2>
                                        
                                                <!-- <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                                
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/southnonveg.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">South indian non-veg Meals</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                                
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/northveg1.png')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">North indian veg meals</a></h2>
                                        
                                                <!-- <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/northnon.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">North indian Non-veg meals</a></h2>
                                        
                                                <!-- <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                             
                                            </div>
                                        
                                        </div>
                                    </div>
                                  

                                </div>

                            </div>

                        </div>

                        <div id="tabs-2">

                            <div class="restaurant_content">
                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/dosaa.jpg')}}" alt=""></a>
                                                <span class="sales">-20%</span>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Dosa Items</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                               
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/biryani.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Rice and Biryani Items</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
           
                   
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/roti.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Rottis and Parathas</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                               
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/snackss.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Snacks</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                              
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                   
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>

                        <div id="tabs-3">
                            
                            <div class="restaurant_content">
                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                          <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/southmealsveg.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">South indian veg Meals</a></h2>
                                        
                                                <!-- <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                                
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/southnonveg.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">South indian non-veg Meals</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                                
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/northveg1.png')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">North indian veg meals</a></h2>
                                        
                                              <!--   <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/northnon.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">North indian Non-veg meals</a></h2>
                                        
                                              <!--   <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                             
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>

                        <div id="tabs-4">
                            
                            <div class="restaurant_content">
                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/cofee.jpeg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Coffee And Tea</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                             
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/col.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Cool drinks</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                              
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/juice.webp')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Fruit Juice</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                                
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-6">
                                        <div class="restaurant_item small-thumbs">
                                        
                                            <div class="img">
                                                <a href="#"><img src="{{asset('images/catering/ice.jpg')}}" alt=""></a>
                                            </div>
                                        
                                            <div class="text">
                                                <h2><a href="#">Ice-creams and Salads</a></h2>
                                        
                                               <!--  <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
                                        
                                               
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2> Caterer Booking</h2>
                    <div class="reservation_form">
                        <div class="row">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        	<form action="{{ url('savecateringdetails') }}" method="post" enctype="multipart/form-data" >
                        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($catering['0']->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $catering['0']->user_id}}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="noguests" placeholder="No of Guests" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <select class="awe-select" required="required" name="food_type">
                                    <option value="">Food Type</option>
                                    <option value="Veg">Veg</option>
                                    <option value="Non-veg">Non-veg</option>
                                    
                                </select>
                            </div>

                             <div class="col-md-3 col-sm-6">
                                <select class="awe-select" required="required" name="service_for">
                                    <option value="">Service For</option>
                                    <option value="Breakfast">Breakfast</option>
                                    <option value="Lunch">Lunch</option>
                                    <option value="Dinner">Dinner</option>
                                    
                                </select>
                            </div>

                             <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address"  placeholder="Address" required="required"></textarea>
                            </div>


                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
         <section class="section-gallery-restaurant bg-white">
            <div class="container">
                <div class="gallery">

                    <h2 class="heading text-center">GALLERY Restaurant</h2>
                    
                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".ground">DINNER</a></li>
                            <li><a href="#" data-filter=".suite">LUNCH</a></li>
                            <li><a href="#" data-filter=".bathroom">DINER</a></li>
                            <li><a href="#" data-filter=".dining">DRINK</a></li>
                        </ul>
                    </div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">

                        <div class="row">
                            <div class="gallery-isotope">
                                
                                <!-- ITEM SIZE -->
                                <div class="item-size col-xs-6 col-sm-6 col-md-4 col-lg-3"></div>
                                <!-- END / ITEM SIZE -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/snackss.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/snackss.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground bathroom suite col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/northnon.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/northnon.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground bathroom dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/juice.webp')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/juice.webp')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/ice.jpg.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/col.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/col.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/cofee.jpeg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/roti.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/roti.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/biryani.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/biryani.jg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/dosaa.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/dosaa.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/southveg.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/southveg.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom suite col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/northnon1.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/northnon1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/northveg.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/northveg.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </div>
        </section>
        @endif
        @if(isset($decoration))
        <section class="section-restaurant-4 bg-white">
            <div class="container">
            	 <section class="section-gallery-restaurant bg-white">
            <div class="container">
                <div class="gallery">

                    <h2 class="heading text-center">Flower Decoration</h2>
                        @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                    <!-- FILTER -->
                   
                        <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*">Stage Backdrop</a></li>
                            <li><a href="#" data-filter=".ground">Fresh Floral Backdrop </a></li>
                            <li><a href="#" data-filter=".suite">Fabric Drapes/Curtain</a></li>
                            <li><a href="#" data-filter=".bathroom">Paper Floral Backdrop</a></li>
                            <li><a href="#" data-filter=".dining">Wedding Mandap/Altar</a></li>
                        </ul>
                    </div>
                   
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">

                        <div class="row">
                            <div class="gallery-isotope">
                                
                                <!-- ITEM SIZE -->
                                <div class="item-size col-xs-6 col-sm-6 col-md-4 col-lg-3"></div>
                                <!-- END / ITEM SIZE -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f6.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground bathroom suite col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f7.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f7.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground bathroom dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f8.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f8.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/flo.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/flo.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/floer.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/floer.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/flower.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/flower.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/flowerback.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/flowerback.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom suite col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f4.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f4.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/f5.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/f5.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </div>
        </section>

                
        <!-- END / RESTAURANTS -->

        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2> Flower Decoration Booking</h2>
                    <div class="reservation_form">
                        <div class="row">
		                   
                        	<form action="{{ url('saveflowerdetails') }}" method="post" enctype="multipart/form-data" >
                        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($decoration['0']->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $decoration['0']->user_id}}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END / RESERVATION -->
        <!-- GALLERY RESTAURANT -->
        @endif
        @if(isset($Bands))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                    	   	@if (session('message'))
                   			<div class="alert alert-success" id="dangerMessage">
                   			{{ session('message') }}
     						</div>
							@endif
                    	<h1 style="text-align: center;">Wedding Bands</h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/band.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/band.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/band1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/band1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/band3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/band3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/band2.png')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/band2.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2> wedding band Booking</h2>
                    <div class="reservation_form">
                        <div class="row">
                        	   <form action="{{ url('saveweddingbanddetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($Bands['0']->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $Bands['0']->user_id }}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address"  placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
         <section class="hidden">
            <div class="container">
                <div class="gallery">

                    <h2 class="heading text-center"> Restaurant</h2>
                    
                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".ground">DINNER</a></li>
                            <li><a href="#" data-filter=".suite">LUNCH</a></li>
                            <li><a href="#" data-filter=".bathroom">DINER</a></li>
                            <li><a href="#" data-filter=".dining">DRINK</a></li>
                        </ul>
                    </div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">

                        <div class="row">
                            <div class="gallery-isotope">
                                
                                <!-- ITEM SIZE -->
                                <div class="item-size col-xs-6 col-sm-6 col-md-4 col-lg-3"></div>
                                <!-- END / ITEM SIZE -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground bathroom suite col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground bathroom dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom suite col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/cofee.jpeg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ice.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </div>
        </section>
        @endif
        @if(isset($Mehendi))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;">Mehendi for Wedding</h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/mehindi.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/mehindi.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/mehindi1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/mehindi1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/mehindi2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/mehindi2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/mehindi3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/mehindi3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2> Mehendi for Wedding</h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('savemehendidetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($Mehendi['0']->user_id))
                                 <input type="hidden" name="subadmin_id" value="{{ $Mehendi['0']->user_id }}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address" cols="50" rows="10" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for Quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
       
        @endif
        @if(isset($MakeupArtist))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;">Makeup Artist</h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/makeup1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/makeup1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/makeup2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/makeup2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/makeup3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/makeup3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/makeup.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/makeup.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2>Makeup Artist</h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('savemakeupadetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($MakeupArtist[0]->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $MakeupArtist[0]->user_id }}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div> 
                            <div class="col-md-8 col-sm-8">
                            <textarea class="awe-teaxtarea" name="address"  placeholder="Address"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for Quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
         
        @endif
        @if(isset($Ornaments))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;"> Ornaments for Wedding </h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/ornament.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ornament.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/ornament1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ornament1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/ornament2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ornament2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/ornament3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/ornament3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2>  Ornaments for Wedding</h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('saveornamentdetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($Ornaments[0]->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $Ornaments[0]->user_id }}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address" cols="50" rows="10" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for Quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
        
        @endif
        @if(isset($BangleShastra))
       <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;">BangleShastra for Wedding</h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/bangle.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/bangle.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/bangle1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/bangle1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/bangle2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/bangle2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/bangle3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/bangle3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2> BangleShastra for Wedding</h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('savebangledetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($BangleShastra[0]->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $BangleShastra[0]->user_id }}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address" cols="50" rows="10" placeholder="Address"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
         
        @endif
        @if(isset($Sangeet))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;">Sangeet(orchestra)</h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/orchestra.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/orchestra.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/orchestra1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/orchestra1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/orchestra2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/orchestra2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/orchestra3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/orchestra3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2> Sangeet(orchestra)</h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('savesangeetdetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($Sangeet[0]->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $Sangeet[0]->user_id}}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <textarea class="awe-teaxtarea" name="address" cols="50" rows="10" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
         
        @endif
        @if(isset($Purohit))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;">Purohit for Wedding </h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/purohith.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/purohith.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/purohith1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/purohith1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/purohith2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/purohith2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/purohith3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/purohith3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2>Purohit for Wedding</h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('savepurohithdetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($Purohit[0]->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $Purohit[0]->user_id }}">
                                @endif

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address" cols="50" rows="10" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        
    
        <!-- END / RESERVATION -->

        <!-- GALLERY RESTAURANT -->
         
        @endif
        @if(isset($Dance))
        <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;">Dance for Wedding </h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/dance.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/dance.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/dance1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/dance1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/dance2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/dance2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/dance3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/dance3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2>Dance for Wedding </h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('savedancedetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($Dance[0]->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $Dance[0]->user_id}}">
                                @endif
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address" cols="50" rows="10" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        
       
        @endif
          @if(isset($Photography))
          <section class="section-restaurant-4 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">
                            @if (session('message'))
                            <div class="alert alert-success" id="dangerMessage">
                            {{ session('message') }}
                            </div>
                            @endif
                        <h1 style="text-align: center;">Photography for Wedding </h1>
                            <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/photography1.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/photography1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/photography.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/photography.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/photography2.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/photography2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                    <div class="item-isotope col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="gallery_item">
                                        <a href="{{asset('images/catering/photography3.jpg')}}" class="gallery-popup mfp-image">
                                            <img src="{{asset('images/catering/photography3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>

                       

                        <!-- <ul>
                            <li><a href="#tabs-1">LUNCH </a></li>
                            <li><a href="#tabs-2">BREAKFAST </a></li>
                            <li><a href="#tabs-3">DINNER </a></li>
                            <li><a href="#tabs-4">Beverages and Ice-creams </a></li>
                        </ul> -->

                

                                    <!-- ITEM -->
                            
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                             
                                    <!-- END / ITEM -->

                               
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                         
                                    <!-- END / ITEM -->

                                    
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->
        <!-- RESERVATION -->
        <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2>Photography for Wedding</h2>
                    <div class="reservation_form">
                        <div class="row">
                               <form action="{{ url('savephotodetails') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if(isset($Photography[0]->user_id))
                                <input type="hidden" name="subadmin_id" value="{{ $Photography[0]->user_id }}">
                                @endif

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" name="name" placeholder="name" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-input" placeholder="phonenumber" name="phonenumber" required>
                            </div>
                             <div class="col-md-3 col-sm-6">
                                <input type="email" class="awe-input" placeholder="email" name="email" required>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="date of service" name="date_of_service" required>
                            </div>
                             <div class="col-md-8 col-sm-8">
                                <textarea class="awe-teaxtarea" name="address" cols="50" rows="10" placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Request for quote</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        @endif





      
<script type="text/javascript">       	
setTimeout(function() {
$('#dangerMessage').fadeOut('fast');
}, 7000);
</script>

        <!-- EVENT DEAL RESTAURANT -->      
@endsection