@extends('layout.guestmain')
@section('content')
        <!-- END / HEADER -->
        <!-- SUB BANNER -->
     
        <section class="section-sub-banner bg-9">
           
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">  
                    </div>
            </div>
        </section>
       
        <!-- END / SUB BANNER -->
        <!-- ROOM -->
        @if(session()->get('halltype')=="marriagehall")
          @if($marriagehall->isEmpty())
          <?php echo "<h3 align='center'>No results For this area....Please Choose Diffrent area</h3>"; ?>
         @endif
        <section class="section-room bg-white">
            <div class="container">
                <div class="room-wrap-2">
                    <!-- ITEM -->
                     @foreach($marriagehall as $mk=>$p)
                        <div class="room_item-2">
                        <input type="hidden" name="marriageid" id="marriageid" value="<?php echo $p->marriageid; ?>">
                        @if($p->user_type=='1')
                        <?php
                         $image=json_decode($p->img,true);
                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>">
                        </div>
                        @else
                        <?php
                         $image=json_decode($p->img,true);
                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0];?>" alt="" height="30px" width="30px"></a>
                        </div>
                        @endif
                        <div class="text">
                            <h3 class='text-uppercase' ><?php echo 'Hall Name :-'." ".$p->name;?></h3>
                            <h4><?php echo 'Address :-'. " ".$p->address;?></h4>
                            <h4><?php echo 'Description :-'. " ". $p->description;?></h4>
                            <button type="button" class="awe-btn awe-btn-13 model" data-toggle="modal" data-target="#myModal_<?php echo $mk ?>" data-target-id="1">
                           VIEW DETAILS
                            </button>
                         <form method="post" action="{{ url('savebookingdetails') }}">
                              <input type="hidden" name="hall_name" value="<?php echo $p->name ?> ">
                              <input type="hidden" name="hall_id" value="<?php echo $p->user_id ?> ">
                              <input type="hidden" name="hall_address" value="<?php echo $p->area ?>">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="awe-btn awe-btn-13"> Book</button>
                            </form>
                          
                        </div>
                        </div>
                     
                       
                    <!-- Modal -->

                       <!-- The Modal -->
                          <div class="modal fade" id="myModal_<?php echo $mk ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h2 class="text-uppercase" style="text-align: center;"><?php echo  $p->name;?></h2>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                            <section class="section-room-detail bg-white">
                            <div class="container">
                        <!-- DETAIL -->
                     <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- LAGER IMGAE -->
                            <div class="room-detail_img">
                                <div class="room_img-item">
                                     @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt=""
                                    style="width: 580px;height: 300px;">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                    @endif    
                                </div>
                                @if(isset($image[1]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                     @endif

                                </div>
                                @endif
                                @if(isset($image[2]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">  
                                     @endif  
                                </div>
                                @endif
                                  @if(isset($image[3]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                                 @if(isset($image[4]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                            </div>
                            <!-- END / LAGER IMGAE -->
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                 @endif

                                 @if(isset($image[1]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[2]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[3]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                @endif
                                @endif
                                @if(isset($image[4]))
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                @endif
                                @endif
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->
                        </div>
                    </div>
                </div>
            </div>
              <div class="room-detail_tab">
                 <div class="col-md-7">
                            <div class="room-detail_tab-content tab-content">
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade active in" id="Name_<?php echo $mk ?>">
                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->name ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="hallcapacity_<?php echo $mk ?>">
                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->hallcapacity ?></h5>
                                    </div>

                                </div>
                                <!-- END / OVERVIEW -->

                                <!-- AMENITIES -->
                                <div class="tab-pane fade" id="Area_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->area ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Address_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->address ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Description_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->description ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Roomtype_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->roomtype ?></h5>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="Roomcount_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->roomcount ?></h5>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="Parking_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->parking ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="DiningHall_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->dhallcapacity ?></h5>
                                    </div>

                                </div>
                                <!-- END / AMENITIES -->

                                <!-- PACKAGE -->
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="room-detail_tab-header">
                                <li class="active"><a href="#Name_<?php echo $mk ?>" data-toggle="tab">Name</a></li>
                                <li ><a href="#Area_<?php echo $mk ?>" data-toggle="tab">Area</a></li>
                                <li><a href="#Address_<?php echo $mk ?>" data-toggle="tab">Address</a></li>
                                <li><a href="#Description_<?php echo $mk ?>" data-toggle="tab">Description</a></li>
                                <li><a href="#Roomtype_<?php echo $mk ?>" data-toggle="tab">Roomtype</a></li>
                                <li><a href="#Roomcount_<?php echo $mk ?>" data-toggle="tab">Roomcount</a></li>
                                <li><a href="#hallcapacity_<?php echo $mk ?>" data-toggle="tab">Hall Capacity</a></li>
                                <li><a href="#DiningHall_<?php echo $mk ?>" data-toggle="tab">DiningHall Capacity</a></li>
                                <li><a href="#Parking_<?php echo $mk ?>" data-toggle="tab">Parking</a></li>
                            </ul>
                        </div>                                        
                   

                    </div>

                </div>
     
        </section>
                                 
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>

                          </div>
                      </div>
                  </div>
                    <!-- ITEM -->
                    <!-- ITEM -->
                     @endforeach
                    <!-- ITEM -->
                    <!-- ITEM -->      
                    <!-- ITEM -->
                </div>
            </div>
        </section>
        @endif

        @if(session()->get('halltype')=="partyhall")
         @if($partyhall->isEmpty())
        <?php echo "<h3 align='center'>No results For this area.Please Choose Diffrent area...</h3>";  ?>
        @endif
        <section class="section-room bg-white">
            <div class="container">
                <div class="room-wrap-2">
                    <!-- ITEM -->
                     @foreach($partyhall as $mk=>$p)
                        <div class="room_item-2">
                        <input type="hidden" name="partyid" id="partyid" value="<?php echo $p->partyid; ?>">
                                      @if($p->user_type=='1')
                        <?php
                         $image=json_decode($p->img,true);
                        /* dd($p);
                         exit();*/
                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>">
                        </div>
                        @else
                        <?php
                         $image=json_decode($p->img,true);
                         /*dd($image);
                         exit();
*/                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0];?>" alt="" height="30px" width="30px"></a>
                        </div>
                        @endif
                        <div class="text">
                            <h3 class='text-uppercase' ><?php echo 'Hall Name :-'." ".$p->name;?></h3>
                            <h4><?php echo 'Address :-'. " ".$p->address;?></h4>
                            <h4><?php echo 'Description :-'. " ". $p->description;?></h4>
                            <button type="button" class="awe-btn awe-btn-13 model" data-toggle="modal" data-target="#myModal_<?php echo $mk ?>" data-target-id="1">
                           VIEW DETAILS
                            </button>
                           <form method="post" action="{{ url('savebookingdetails') }}">
                              <input type="hidden" name="hall_name" value="<?php echo $p->name ?> ">
                              <input type="hidden" name="hall_id" value="<?php echo $p->user_id ?> ">
                              <input type="hidden" name="hall_address" value="<?php echo $p->area ?>">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="awe-btn awe-btn-13"> Book</button>
                            </form>
                           
                        </div>
                         
                        </div>

                    <!-- Modal -->

                       <!-- The Modal -->
                          <div class="modal fade" id="myModal_<?php echo $mk ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h2 class="text-uppercase" style="text-align: center;"><?php echo  $p->name;?></h2>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                            <section class="section-room-detail bg-white">
                            <div class="container">
                        <!-- DETAIL -->
                     <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- LAGER IMGAE -->
                            <div class="room-detail_img">
                                <div class="room_img-item">
                                     @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt=""
                                    style="width: 580px;height: 300px;">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                    @endif    
                                </div>
                                @if(isset($image[1]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                     @endif

                                </div>
                                @endif
                                @if(isset($image[2]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">  
                                     @endif  
                                </div>
                                @endif
                                 @if(isset($image[3]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                                 @if(isset($image[4]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                            </div>
                            <!-- END / LAGER IMGAE -->
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                 @endif

                                 @if(isset($image[1]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[2]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[3]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                @endif
                                @endif
                                @if(isset($image[4]))
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                @endif
                                @endif
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->
                        </div>
                    </div>
                </div>
            </div>
              <div class="room-detail_tab">
                 <div class="col-md-7">
                            <div class="room-detail_tab-content tab-content">
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade active in" id="Name_<?php echo $mk ?>">
                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->name ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="hallcapacity_<?php echo $mk ?>">
                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->hallcapacity ?></h5>
                                    </div>

                                </div>
                                <!-- END / OVERVIEW -->

                                <!-- AMENITIES -->
                                <div class="tab-pane fade" id="Area_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->area ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Address_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->address ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Description_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->description ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Roomtype_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->roomtype ?></h5>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="Roomcount_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->roomcount ?></h5>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="Parking_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->parking ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="DiningHall_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->dhallcapacity ?></h5>
                                    </div>

                                </div>
                                <!-- END / AMENITIES -->

                                <!-- PACKAGE -->
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="room-detail_tab-header">
                                <li class="active"><a href="#Name_<?php echo $mk ?>" data-toggle="tab">Name</a></li>
                                <li ><a href="#Area_<?php echo $mk ?>" data-toggle="tab">Area</a></li>
                                <li><a href="#Address_<?php echo $mk ?>" data-toggle="tab">Address</a></li>
                                <li><a href="#Description_<?php echo $mk ?>" data-toggle="tab">Description</a></li>
                                <li><a href="#Roomtype_<?php echo $mk ?>" data-toggle="tab">Roomtype</a></li>
                                <li><a href="#Roomcount_<?php echo $mk ?>" data-toggle="tab">Roomcount</a></li>
                                <li><a href="#hallcapacity_<?php echo $mk ?>" data-toggle="tab">Hall Capacity</a></li>
                                <li><a href="#DiningHall_<?php echo $mk ?>" data-toggle="tab">DiningHall Capacity</a></li>
                                <li><a href="#Parking_<?php echo $mk ?>" data-toggle="tab">Parking</a></li>
                            </ul>
                        </div>                                        
                   

                    </div>

                </div>
     
        </section>
                                 
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>

                          </div>
                      </div>
                  </div>
                    <!-- ITEM -->
                    <!-- ITEM -->
                     @endforeach
                    <!-- ITEM -->
                    <!-- ITEM -->      
                    <!-- ITEM -->
                </div>
            </div>
        </section>
        @endif
        @if(session()->get('halltype')=="eventhall")
          @if($eventhall->isEmpty())
        <?php echo "<h3 align='center'>No results For this area....Please Choose Diffrent area..</h3>";  ?>
        @endif
     
        <section class="section-room bg-white">
            <div class="container">
                <div class="room-wrap-2">
                    <!-- ITEM -->
                     @foreach($eventhall as $mk=>$p)
                        <div class="room_item-2">
                        <input type="hidden" name="eventid" id="eventid" value="<?php echo $p->eventid; ?>">
                        @if($p->user_type=='1')
                        <?php
                         $image=json_decode($p->img,true);
                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/public/app/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>">
                        </div>
                        @else
                        <?php
                         $image=json_decode($p->img,true);
                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/public/app/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0];?>" alt="" height="30px" width="30px"></a>
                        </div>
                        @endif
                        <div class="text">
                            <h3 class='text-uppercase' ><?php echo 'Hall Name :-'." ".$p->name;?></h3>
                            <h4><?php echo 'Address :-'. " ".$p->address;?></h4>
                            <h4><?php echo 'Description :-'. " ". $p->description;?></h4>
                            <button type="button" class="awe-btn awe-btn-13 model" data-toggle="modal" data-target="#myModal_<?php echo $mk ?>" data-target-id="1">
                           VIEW DETAILS
                            </button>
                            <form method="post" action="{{ url('savebookingdetails') }}">
                              <input type="hidden" name="hall_name" value="<?php echo $p->name ?> ">
                              <input type="hidden" name="hall_id" value="<?php echo $p->user_id ?> ">
                              <input type="hidden" name="hall_address" value="<?php echo $p->area ?>">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="awe-btn awe-btn-13"> Book</button>
                            </form>
                           
                        </div>
                         
                        </div>

                    <!-- Modal -->

                       <!-- The Modal -->
                          <div class="modal fade" id="myModal_<?php echo $mk ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h2 class="text-uppercase" style="text-align: center;"><?php echo  $p->name;?></h2>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                            <section class="section-room-detail bg-white">
                            <div class="container">
                        <!-- DETAIL -->
                     <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- LAGER IMGAE -->
                            <div class="room-detail_img">
                                <div class="room_img-item">
                                     @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt=""
                                    style="width: 580px;height: 300px;">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                    @endif    
                                </div>
                                @if(isset($image[1]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                     @endif

                                </div>
                                @endif
                                @if(isset($image[2]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">  
                                     @endif  
                                </div>
                                @endif
                                 @if(isset($image[3]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                                 @if(isset($image[4]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                            </div>
                            <!-- END / LAGER IMGAE -->
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                 @endif

                                 @if(isset($image[1]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[2]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[3]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                @endif
                                @endif
                                @if(isset($image[4]))
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                @endif
                                @endif
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->
                        </div>
                    </div>
                </div>
            </div>
              <div class="room-detail_tab">
                 <div class="col-md-7">
                            <div class="room-detail_tab-content tab-content">
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade" id="Name_<?php echo $mk ?>">
                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->name ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="hallcapacity_<?php echo $mk ?>">
                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->hallcapacity ?></h5>
                                    </div>

                                </div>
                                <!-- END / OVERVIEW -->

                                <!-- AMENITIES -->
                                <div class="tab-pane fade" id="Area_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->area ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Address_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->address ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Description_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->description ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Roomtype_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->roomtype ?></h5>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="Roomcount_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->roomcount ?></h5>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="Parking_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->parking ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="DiningHall_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->dhallcapacity ?></h5>
                                    </div>

                                </div>
                                <!-- END / AMENITIES -->
                                <!-- PACKAGE -->
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="room-detail_tab-header">
                                <li><a href="#Name_<?php echo $mk ?>" data-toggle="tab">Name</a></li>
                                <li><a href="#Area_<?php echo $mk ?>" data-toggle="tab">Area</a></li>
                                <li><a href="#Address_<?php echo $mk ?>" data-toggle="tab">Address</a></li>
                                <li><a href="#Description_<?php echo $mk ?>" data-toggle="tab">Description</a></li>
                                <li><a href="#Roomtype_<?php echo $mk ?>" data-toggle="tab">Roomtype</a></li>
                                <li><a href="#Roomcount_<?php echo $mk ?>" data-toggle="tab">Roomcount</a></li>
                                <li><a href="#hallcapacity_<?php echo $mk ?>" data-toggle="tab">Hall Capacity</a></li>
                                <li><a href="#DiningHall_<?php echo $mk ?>" data-toggle="tab">DiningHall Capacity</a></li>
                                <li><a href="#Parking_<?php echo $mk ?>" data-toggle="tab">Parking</a></li>
                            </ul>
                        </div>                                        
                   

                    </div>

                </div>
     
        </section>
                                 
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>

                          </div>
                      </div>
                  </div>
                    <!-- ITEM -->
                    <!-- ITEM -->
                     @endforeach
                    <!-- ITEM -->
                    <!-- ITEM -->      
                    <!-- ITEM -->
                </div>
            </div>
        </section>
        @endif
        @if(session()->get('halltype')=="resort")
        @if($Resort->isEmpty())
        <?php echo "<h3 align='center'>No results For this area....Please Choose Diffrent area..</h3>";  ?>
        @endif
        <section class="section-room bg-white">
            <div class="container">
                <div class="room-wrap-2">
                    <!-- ITEM -->
                     @foreach($Resort as $mk=>$p)
                        <div class="room_item-2">
                        <input type="hidden" name="resort_id" id="resort_id" value="<?php echo $p->resort_id; ?>">
                         @if($p->user_type=='1')
                        <?php
                         $image=json_decode($p->image,true);
                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>">
                        </div>
                        @else
                        <?php
                         $image=json_decode($p->image,true);
                        ?>
                        <div class="img">
                            <a href="#"><img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0];?>" alt="" height="30px" width="30px"></a>
                        </div>
                        @endif
                        <div class="text">
                            <h2><a href="#"><?php echo  $p->name; ?></a></h2>
                            <h4><?php echo 'Address :-'. " ".$p->address;?></h4>
                            <h4><?php echo 'Description :-'. " ". $p->description;?></h4>
                            <button type="button" class="awe-btn awe-btn-13 model" data-toggle="modal" data-target="#myModal_<?php echo $mk ?>" data-target-id="1">
                           VIEW DETAILS
                            </button>
                            <form method="post" action="{{ url('savebookingdetails') }}">
                              <input type="hidden" name="hall_name" value="<?php echo $p->name ?> ">
                              <input type="hidden" name="hall_id" value="<?php echo $p->user_id ?> ">
                              <input type="hidden" name="hall_address" value="<?php echo $p->area ?>">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="awe-btn awe-btn-13"> Book</button>
                            </form>
                        </div>
                         
                        </div>

                    <!-- Modal -->
                       <!-- The Modal -->
                          <div class="modal fade" id="myModal_<?php echo $mk ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h2 class="text-uppercase" style="text-align: center;"><?php echo  $p->name;?></h2>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body">
                            <section class="section-room-detail bg-white">
                            <div class="container">
                        <!-- DETAIL -->
                     <div class="room-detail">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- LAGER IMGAE -->
                            <div class="room-detail_img">
                                <div class="room_img-item">
                                     @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt=""
                                    style="width: 580px;height: 300px;">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                    @endif    
                                </div>
                                @if(isset($image[1]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                     @endif

                                </div>
                                @endif
                                @if(isset($image[2]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">  
                                     @endif  
                                </div>
                                @endif
                                 @if(isset($image[3]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                    @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                                 @if(isset($image[4]))
                                <div class="room_img-item">
                                    @if($p->user_type=='1')
                                    <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                       @else
                                    <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                     @endif    
                                </div>
                                @endif
                            </div>
                            <!-- END / LAGER IMGAE -->
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[0]?>" alt="">
                                 @endif

                                 @if(isset($image[1]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[1]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[2]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[2]?>" alt="">
                                @endif
                                @endif
                                 @if(isset($image[3]))
                                 @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[3]?>" alt="">
                                @endif
                                @endif
                                @if(isset($image[4]))
                                @if($p->user_type=='1')
                                <img src="storage/upload/admin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                 @else
                                 <img src="storage/upload/subadmin/<?php echo $p->name?>/<?php echo $image[4]?>" alt="">
                                @endif
                                @endif
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->
                        </div>
                    </div>
                </div>
            </div>
           <div class="room-detail_tab">
                 <div class="col-md-7">
                            <div class="room-detail_tab-content tab-content">
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade" id="Name_<?php echo $mk ?>">
                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->name ?></h5>
                                    </div>

                                </div>
                               
                                <!-- END / OVERVIEW -->
                                <!-- AMENITIES -->
                                <div class="tab-pane fade" id="Area_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->area ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Address_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->address ?></h5>
                                    </div>

                                </div>
                                 <div class="tab-pane fade" id="Description_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->description ?></h5>
                                    </div>

                                </div>
                                  <div class="tab-pane fade" id="Price_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->totalprice.".RS"."  "."Per person" ?></h5>
                                    </div>

                                </div>
                                   <div class="tab-pane fade" id="Swimming_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->swiming_pool ?></h5>
                                    </div>

                                </div>
                                   <div class="tab-pane fade" id="Food_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->food ?></h5>
                                    </div>

                                </div>
                                   <div class="tab-pane fade" id="Outdoor_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->outdoor_games ?></h5>
                                    </div>

                                </div>
                                   <div class="tab-pane fade" id="Indoor_<?php echo $mk ?>">
                                   
                                 <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '><?php echo $p->indoor_games ?></h5>
                                    </div>

                                </div>
                             
                                <!-- END / AMENITIES -->
                                <!-- PACKAGE -->
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="room-detail_tab-header">
                                <li><a href="#Name_<?php echo $mk ?>" data-toggle="tab">Name</a></li>
                                <li><a href="#Area_<?php echo $mk ?>" data-toggle="tab">Area</a></li>
                                <li><a href="#Address_<?php echo $mk ?>" data-toggle="tab">Address</a></li>
                                <li><a href="#Description_<?php echo $mk ?>" data-toggle="tab">Description</a></li>
                                <li><a href="#Indoor_<?php echo $mk ?>" data-toggle="tab">Indoor games</a></li>
                                <li><a href="#Outdoor_<?php echo $mk ?>" data-toggle="tab">Outdoor games</a></li>
                                <li><a href="#Food_<?php echo $mk ?>" data-toggle="tab">Food</a></li>
                                <li><a href="#Swimming_<?php echo $mk ?>" data-toggle="tab">Swimming Pool</a></li>
                            </ul>
                        </div>                                        
                   

                    </div>

                </div>
     
        </section>
                                 
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>

                          </div>
                      </div>
                  </div>
                    <!-- ITEM -->
                    <!-- ITEM -->
                     @endforeach
                    <!-- ITEM -->
                    <!-- ITEM -->      
                    <!-- ITEM -->
                </div>
            </div>
        </section>
        @endif
        @endsection
        <!-- END / ROOM -->
       
        <!-- FOOTER -->
<script type="text/javascript">
           
   $(".model").click(function(){
    alert("ksdfjd");
  });



        </script>