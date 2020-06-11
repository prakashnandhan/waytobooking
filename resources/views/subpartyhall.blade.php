@extends('layout.subadmin')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content= "width=device-width, user-scalable=no">

<style type="text/css">
    #table1_filter{
      margin-left: 0px;
      margin-right: 500px;
      }
      #table1_previous{
        border-right-width: 9px;
        margin-right: 200px;
      }
      #table1_next{
        border-right-width: 9px;
        margin-right: 200px;
      }

</style>

<form action="{{ url('subsavepartydetails')}}" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="id" id="id">
   @if(session()->has('message'))
    <div class="alert alert-success" id="successMessage">
        {{ session()->get('message') }}
       
    </div>
    @endif
  <div class="container-fluid" style="background-color:white;">
    <h3 style="text-align: center;">PARTY HALL DEATILS</h3>
   <div class="row">
    <div class="col-md-6 form-group">
    <label><b>NAME OF THE HALL</b></label>
    <input type="text" class="form-control"  placeholder="name" name="name" id="name" required>
    </div>

    <div class="col-md-6 form-group">
    <label>AREA</label>
    <input type="text" class="form-control"  placeholder="area" name="area" id="area" required>
    </div>

    <div class="col-md-6 form-group">
    <label><b>ADDRESS</b></label>
    <input style="font-size: 13pt; height: 100px; width:350px;" type="text" class="form-control"  placeholder="address" name="address" id="address" required>
    </div>
     
    <div class="col-md-6 form-group">
    <label><b>HALL DESCRIPTION</b></label>
    <input style="font-size: 13pt; height: 100px; width:350px;" type="text" class="form-control"  placeholder="description" name="description" id="description" required>
    </div>

    <div class="col-md-6 form-group">
    <label><b>PHONE NUMBER</b></label>
    <input type="number"  class="form-control"  placeholder="phonenumber" name="phonenumber" id="phonenumber" required>
    </div>

    <div class="col-md-6 form-group">
    <label><b>EMAIL ID</b></label>
    <input type="email"" class="form-control"  placeholder="email" name="email" id="email" required>
    </div>

    <div class="col-md-6 form-group">
    <label><b>TOTAL BOOKING PRICE</b></label>
    <input type="number" class="form-control"  placeholder="totalprice" name="totalprice" id="totalprice" required>
    </div>

    <div class="col-md-6 form-group">
    <label><b>ADVANCE BOOKING PRICE</b></label>
    <input type="number" class="form-control"  placeholder="advanceprice" name="advanceprice" id="advanceprice" required>
    </div>

     <div class="col-md-6 form-group" >
     <label><b>IMAGES</b></label>
     <input type="file" name="img[]"  id="img" multiple required>
     </div>
     <div class="col-md-6 form-group" >
     <label><b>AC OR NONAC</b></label><br>
     <input type="radio" name="roomtype" id="AC" value="AC" CHECKED ><b>AC</b><br>
     <input type="radio" name="roomtype" id="NONAC" value="NONAC"><b>NONAC</b>
     </div>

      <div class="col-md-6 form-group" >
      <label><b>HALL CAPACITY</b></label><br>
      <input type="number" class="form-control"  placeholder="Hall Capacity" name="hallcapacity" id="hallcapacity" required>
     </div>

      <div class="col-md-6 form-group" >
      <label><b>DINING HALL CAPACITY</b></label><br>
      <input type="number" class="form-control"  placeholder="Dining Hall Capacity" name="dhallcapacity" id="dhallcapacity" required>
      </div>
      <div class="col-md-6 form-group" >
      <label><b>ROOM COUNT</b></label><br>
      <input type="number" class="form-control"  placeholder="ROOM COUNT" name="roomcount" id="roomcount" required>
      </div>
      <div class="col-md-6 form-group" >
      <label><b>PARKING AVILABLE OR NOT</b></label><br>
      <input type="radio" name="parking" id="YES" value="YES" CHECKED ><b>YES</b><br>
      <input type="radio" name="parking" id="NO" value="NO"><b>NO</b>
      </div>
      <div  class="col-md-12 form-group"style="background-color:white;">
     <button type="submit" style="text-align: center;" name="submit" class="btn btn-success" value="submit" id="submit">SAVE</button>
  </div>
</div>
</div> 
</form>
<div style="overflow-x:auto; ">
  <h2>Party hall List</h2>            
  <table class=" table table-bordered table-hover"  id='table1'>
    <thead>
      <tr>
        <th style="display:none;">id</th>
        <th>name</th>
        <th>area</th>
        <th>address</th>
        <th>description</th>
        <th>phonenumber</th>
        <th>email</th>
        <th>totalprice</th>
        <th>advanceprice</th>
        <th>RoomType</th> 
        <th>Hall Capacity</th> 
        <th>Dining Hall Capacity</th>
        <th>No of Rooms</th>
        <th>Parking</th>  
        <th>action</th> 
      </tr>
    </thead>
    <tbody>
       <?php foreach($report as $value){
      ?>
      <tr>
        <td style="display: none;"><?php echo $value->partyid ?></td>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->area ?></td>
        <td><?php echo $value->address  ?></td>
        <td><?php echo $value->description ?></td>
        <td><?php echo $value->phonenumber ?></td>   
        <td><?php echo $value->email ?></td>     
        <td><?php echo $value->totalprice ?></td>
        <td><?php echo $value->advanceprice ?></td> 
        <td><?php echo $value->roomtype ?></td>
        <td><?php echo $value->hallcapacity ?></td>
        <td><?php echo $value->dhallcapacity ?></td>
        <td><?php echo $value->roomcount ?></td>
        <td><?php echo $value->parking ?></td>
         <td>
          <a><button type="button"  class="btn btn-success edit" 
             marriageid="<?php echo $value->partyid; ?>"
             name="<?php echo $value->name ;?>"
             area="<?php echo $value->area ;?>"
             address="<?php echo $value->address;?>"
             description="<?php echo $value->description;?>"
             phone="<?php echo $value->phonenumber;?>"
             email="<?php echo $value->email;?>"
             total="<?php echo $value->totalprice;?>"
             advance="<?php echo $value->advanceprice;?>"
             image="<?php echo $value->img;?>"
             roomtype="<?php echo $value->roomtype;?>"
             hallcapacity="<?php echo $value->hallcapacity;?>"
             dhallcapacity="<?php echo $value->dhallcapacity;?>"
             roomcount="<?php echo $value->roomcount;?>"
             parking="<?php echo $value->parking;?>"
            >Edit</button></a> 
         </td>     
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script  src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.js')}}"></script>
<script  src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script  src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.js')}}"></script>
<script  src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<script type="text/javascript">

  $(".edit").click(function(){
  $("#id").val($(this).attr('marriageid'));
  $("#name").val($(this).attr("name"));
  $("#area").val($(this).attr("area"));
  $("#address").val($(this).attr("address"));
  $("#description").val($(this).attr("description"));
  $("#phonenumber").val($(this).attr("phone"));
  $("#email").val($(this).attr("email"));
  $("#totalprice").val($(this).attr("total"));
  $("#advanceprice").val($(this).attr("advance"));
  if($(this).attr('roomtype')=="AC")
  {
    $("#AC").prop("checked", true);
  }
  if($(this).attr('roomtype')=="NONAC")
  {
    $("#NONAC").prop("checked", true);
  }

  if($(this).attr('parking')=="YES")
  {
    $("#YES").prop("checked", true);
  }
  if($(this).attr('parking')=="NO")
  {
     $("#NO").prop("checked", true);
  }
   $("#hallcapacity").val($(this).attr('hallcapacity'));
   $("#dhallcapacity").val($(this).attr('dhallcapacity'));
   $("#roomcount").val($(this).attr('roomcount'));

  $("#submit").html('Update');
});
  setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 3000); 
  $('#table1').DataTable();

  $(".del").click(function(){
var id=($(this).attr('partyid'));
$.ajax({
        type:'GET',
        url:"partydel/"+id,
        success:function(data) {
        location.reload();
        }
      });
});
</script>

@endsection
