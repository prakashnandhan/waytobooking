@extends('layout.admin')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 50%;
        width: 70%;

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 25%;
        margin: 0;
        padding: 0;
      }

   #table1_filter{
      margin-left: 0px;
      margin-right: 500px;
      }
   #table1_previous{
      border-right-width: 9px;
      margin-right: 200px;
      }


</style>

<form action="{{ url('saveresortdetails') }}" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="id" id="id">

  @if(session()->has('message'))
    <div class="alert alert-success" id="successMessage">
        {{ session()->get('message') }}
       
    </div>
  @endif
  <div class="container-fluid" style="background-color:white;">
    <h3 style="text-align: center;">RESORT DEATILS</h3>
   <div class="row">

    <div class="col-md-6 form-group">
    <label><b>NAME</b></label>
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
     <label><b>Indoor Games</b></label>
     <select name="igames" id="igames" class="form-control" required> 
      <option value="">Select</option>
      <option value="Avilable">Avilable</option>
      <option value="Not-Avilable">Not Avilable</option>
     </select>

     </div>
      <div class="col-md-6 form-group" >
     <label><b>Outdoor Games</b></label>
      <select name="ogames" id="ogames" class="form-control" required> 
      <option value="">Select</option>
      <option value="Avilable">Avilable</option>
      <option value="Not-Avilable">Not Avilable</option>
     </select>

     </div>
      <div class="col-md-6 form-group" >
     <label><b>Food</b></label>
      <select name="food" id="food" class="form-control" required>
      <option value="">Select</option> 
      <option value="Avilable">Avilable</option>
      <option value="Not-Avilable">Not Avilable</option>
     </select>

     </div>
     <div class="col-md-6 form-group" >
     <label><b>Swmming Pool</b></label>
     <select name="pool" id="pool" class="form-control" required> 
      <option value="">Select</option>
      <option value="Avilable">Avilable</option>
      <option value="Not-Avilable">Not Avilable</option>
     </select>
     </div>
      
 
 <div class="col-md-6 form-group" >
      <button type="submit" style="text-align: center;" name="submit" class="btn btn-success" value="submit" id="submit">SAVE</button>
      </div>
     </div>
  </div>
</form>
<div style="overflow-x:auto; ">
  <h2>Resort List</h2>            
  <table class=" table table-bordered table-hover"  id='table1'>
    <thead>
      <tr>
         <th style="display: none;">id</th>
        <th>name</th>
        <th>area</th>
        <th>address</th>
        <th>description</th>
        <th>phonenumber</th>
        <th>email</th>
        <th>totalprice</th>
        <th>advanceprice</th>  
        <th>action</th> 
      </tr>
    </thead>
    <tbody>
       <?php foreach($report as $value){
      ?>
      <tr>
        <td style="display: none;"><?php echo $value->resort_id ?></td>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->area ?></td>
        <td><?php echo $value->address  ?></td>
        <td><?php echo $value->description ?></td>
        <td><?php echo $value->phone ?></td>   
        <td><?php echo $value->email ?></td>     
        <td><?php echo $value->totalprice ?></td>
        <td><?php echo $value->advanceprice ?></td> 
         <td>
          <a><button type="button"  class="btn btn-success edit" 
             marriageid="<?php echo $value->resort_id; ?>"
             name="<?php echo $value->name ;?>"
             area="<?php echo $value->area ;?>"
             address="<?php echo $value->address;?>"
             description="<?php echo $value->description;?>"
             phone="<?php echo $value->phone;?>"
             email="<?php echo $value->email;?>"
             total="<?php echo $value->totalprice;?>"
             advance="<?php echo $value->advanceprice;?>"
             image="<?php echo $value->image;?>">Edit</button></a> 
            <button class="btn btn-danger del" id="del" marriageid="<?php echo $value->resort_id; ?>">delete</button>
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
  /*$("#img").val($(this).attr("image"));*/

  $("#submit").html('Update');
});
setTimeout(function() {
$('#successMessage').fadeOut('fast');
}, 1000);
$('#table1').DataTable();
$(".del").click(function(){
var id=($(this).attr('marriageid'));
$.ajax({
        type:'GET',
        url:"resdel/"+id,
        success:function(data) {
         location.reload();
        }
      });
});  
</script>
  
@endsection
