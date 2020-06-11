@extends('layout.subadmin')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
 #table1_filter{
      margin-left: 0px;
      margin-right: 500px;
      }
      #table1_previous{
        border-right-width: 9px;
        margin-right: 200px;
      } 
        input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }


    
</style>
<form action="{{ url('savepackage') }}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="id" id="id">

  @if(session()->has('message'))
    <div class="alert alert-success" id="successMessage">
        {{ session()->get('message') }}
       
    </div>
  @endif

  <div class="container-fluid" style="background-color:white;">
    <h3 style="text-align: center;">Package DEATILS</h3>
   <div class="row">
    <div class="col-md-6 form-group">
    <label><b>Package Name</b></label>
    <input type="text" class="form-control"  placeholder="pacakagename" name="pname" id="pname" required>
    </div>
    <div class="col-md-6 form-group">
    <label><b>Package TYPE</b></label><br>
    <input type="radio" name="type" id="type1" value="Catering" ><b>Catering</b>
    <input type="radio" name="type" id="type2" value="FlowerDecoration"><b>FlowerDecoration</b>
    <input type="radio" name="type" id="type3" value="WeddingBands"><b>WeddingBands</b>
    <input type="radio" name="type" id="type4" value="Mehendi"><b>Mehendi</b><br>
    <input type="radio" name="type" id="type5" value="Makeup"><b>MakeupArtist</b>
    <input type="radio" name="type" id="type6" value="Bangle"><b>BangleShastra</b>
    <input type="radio" name="type" id="type7" value="Ornaments"><b>Ornaments</b><br>
    <input type="radio" name="type" id="type8" value="Sangeet"><b>Sangeet(Orchestra)</b>
    <input type="radio" name="type" id="type9" value="Purohit"><b>Purohit</b>
    <input type="radio" name="type" id="type0" value="Dance"><b>Dance</b>
    <input type="radio" name="type" id="type10" value="Photography"><b>Photography</b>
    </div>
    <div class="col-md-6 form-group">
    <label><b>NAME</b></label>
    <input type="text" class="form-control"  placeholder="name" name="name" id="name" required>
    </div>

    <div class="col-md-6 form-group">
    <label><b>ADDRESS</b></label>
    <input style="font-size: 13pt; height: 100px; width:350px;" type="text" class="form-control"  placeholder="address" name="address" id="address" required>
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
    <label><b>PRICE</b></label>
    <input type="number" class="form-control"  placeholder="totalprice" name="totalprice" id="totalprice" required>
    </div>
    <div class="col-md-6 form-group" >
      <button type="submit" style="text-align: center;" name="submit" class="btn btn-success"  id="sub">SAVE</button>
      </div>
     </div>
  </div>
</form>
<div style="overflow-x:auto; ">
  <h3>Package Details List</h3>            
  <table class=" table table-bordered table-hover"   id="table1">
    <thead>
      <tr>
        <th style="display: none;">id</th>
        <th>PACKAGE NAME</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>PHONE NUMBER</th>
        <th>EMAIL ID</th>
        <th>PRICE</th>  
        <th>action</th> 
      </tr>
    </thead>
    <tbody>
       <?php foreach($report as $value){ ?>
      <tr>
        <td style="display: none;"><?php echo $value->packageid ?></td>
        <td><?php echo $value->packagename ?></td>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->address ?></td>
        <td><?php echo $value->phonenumber ?></td>   
        <td><?php echo $value->email ?></td>     
        <td><?php echo $value->totalprice ?></td>
         <td>
          <button type="button"  class="btn btn-success edit" 
             packagid="<?php echo $value->packageid; ?>"
             packagtype="<?php echo $value->packagetype; ?>"
             name="<?php echo $value->name ;?>"
             packagename="<?php echo $value->packagename;?>"
             address="<?php echo $value->address;?>"
             phone="<?php echo $value->phonenumber;?>"
             email="<?php echo $value->email;?>"
             total="<?php echo $value->totalprice;?>"
             >Edit</button> 
         
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
  $("#id").val($(this).attr('packagid'));
  if($(this).attr('packagtype')=="Catering")
  {
    $("#type1").prop("checked", true);
  }
  if($(this).attr('packagtype')=="FlowerDecoration")
  {
    $("#type2").prop("checked", true);
  }
  if($(this).attr('packagtype')=="WeddingBands")
  {
    $("#type3").prop("checked", true);
  }
  if($(this).attr('packagtype')=="Mehendi")
  {
    $("#type4").prop("checked", true);
  }
  if($(this).attr('packagtype')=="Makeup")
  {
    $("#type5").prop("checked", true);
  }
  if($(this).attr('packagtype')=="Ornaments")
  {
    $("#type7").prop("checked", true);
  }
  if($(this).attr('packagtype')=="Bangle")
  {
    $("#type6").prop("checked", true);
  }
   if($(this).attr('packagtype')=="Purohit")
  {
    $("#type9").prop("checked", true);
  }
   if($(this).attr('packagtype')=="Sangeet")
  {
    $("#type8").prop("checked", true);
  }
    if($(this).attr('packagtype')=="Dance")
  {
    $("#type0").prop("checked", true);
  }
   if($(this).attr('packagtype')=="Photography")
  {
    $("#type10").prop("checked", true);
  }
  $("#name").val($(this).attr("name"));
  $("#pname").val($(this).attr("packagename"));
  $("#address").val($(this).attr("address"));
  $("#phonenumber").val($(this).attr("phone"));
  $("#email").val($(this).attr("email"));
  $("#totalprice").val($(this).attr("total"));
  $("#sub").html('Update');
});


setTimeout(function() {
$('#successMessage').fadeOut('fast');
}, 2000);

$('#table1').DataTable();

$(".del").click(function(){
var id=($(this).attr('packagid'));
$.ajax({
        type:'GET',
        url:"packagedelete/"+id,
        success:function(data) {
         /*$("#table1").load(location.href + " #table1");*/
         location.reload();
        }
      });
});

</script>
@endsection