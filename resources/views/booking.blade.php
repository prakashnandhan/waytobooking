 @extends('layout.guestmain')
 @section('content')  
 <section class="section-sub-banner bg-9">         
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">  
                    </div>
            </div>
        </section>
   <section class="section-restaurant-4 bg-white">
            <div class="container">
                <div class="reservation">
                    <h2>Booking details</h2>
                    <div class="reservation_form">
                        <div class="row">
                           
                            <form action="{{ url('booking') }}" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="hall_name" value="{{$name}}">
                                <input type="hidden" name="hall_address" value="{{$address}}">
                            <input type="hidden" name="hall_booking_agent_id" value="{{$hall_booking_agent_id}}">
                            
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
                                <input type="text" class="awe-calendar" placeholder="from_date" name="from_date" required>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <input type="text" class="awe-calendar" placeholder="to_date" name="to_date" required>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                 <select class="awe-select" name="no_guest"  required>
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
                                
                            </div>
                           
                            <div class="col-md-12 col-sm-12">
                                <textarea class="awe-teaxtarea" name="description" cols="50" rows="10" placeholder="Description"></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="awe-btn awe-btn-13" type="submit">Book</button>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        @endsection