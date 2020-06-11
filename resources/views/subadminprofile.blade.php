@extends('layout.subadmin')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->

<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
     
      #table1_filter{
      margin-left: 0px;
      margin-right: 500px;
      }
      #table1_previous{
        border-right-width: 9px;
        margin-right: 200px;
      }
     


</style>

<form action="{{url('saveprofile')}}" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="id" id="id">

  @if(session()->has('message'))
    <div class="alert alert-success" id="successMessage">
        {{ session()->get('message') }}
       
    </div>
  @endif

  <div class="container-fluid" style="background-color:white;">
    <h3 style="text-align: center;">PROFILE</h3>
   <div class="row">

    <div class="col-md-6 form-group">
    <label><b>NAME</b></label>
    <input type="text" class="form-control"  placeholder="name" name="name" id="name" required>
    </div>

    <div class="col-md-6 form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="email" name="email" id="email" required>
    </div>

    <div class="col-md-6 form-group">
    <label><b>Contact Number</b></label>
    <input style="font-size: 13pt; " type="text" class="form-control"  placeholder="phonenumber" name="phonenumber" id="phonenumber" required>
    </div>
     
    <div class="col-md-6 form-group">
    <label><b>Offered Discount on Hall</b></label>
    <input style="font-size: 13pt; " type="text" class="form-control"  placeholder="discount" name="discount" id="discount" required>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
   <h3>Bank Details</h3>
   <div class="col-md-6 form-group">
    <label><b>Account Holder Name</b></label>
    <input style="font-size: 13pt; " type="text" class="form-control"   name="Accountname" id="Accountname" required>
    </div>
    <div class="col-md-6 form-group">
    <label><b>Bank Name</b></label>
    <input style="font-size: 13pt; " type="text" class="form-control"   name="bankname" id="bankname" required>
    </div>
    <div class="col-md-6 form-group">
    <label><b>Bank Account Number</b></label>
    <input style="font-size: 13pt;" type="text" class="form-control"   name="Banknum" id="Banknum" required>
    </div>
    <div class="col-md-6 form-group">
    <label><b>Bank IFSC Code</b></label>
    <input style="font-size: 13pt; " type="text" class="form-control"   name="BIFSC" id="BIFSC" required>
    </div>
    <div class="col-md-6 form-group">
    <label><b>Bank Address</b></label>
    <input style="font-size: 13pt; height: 100px; width:350px;" type="text" class="form-control"   name="Bankadd" id="Bankadd" required>
    </div>
  </div>
</div>

 <div class="col-md-6 form-group" >
      <button type="submit" style="text-align: center;" name="submit" class="btn btn-success"  id="sub">SAVE</button>
      </div>
     </div>
</form>
<div style="overflow-x:auto; ">
  <h2>Marriage hall List</h2>            
  <table class=" table table-bordered table-hover" id="table1">
    <thead>
      <tr>
        <th style="display: none;">id</th>
        <th>NAME</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Offered Discount on Hall</th>
        <th>Account Holder Nam</th>
        <th>Bank Name</th>
        <th>Bank Account Number</th>
        <th>Bank IFSC Code</th> 
        <th>Bank Address</th> 
        <th>action</th> 
      </tr>
    </thead>
   <tbody>
       <?php foreach($report as $value){ 
        ?>
      <tr>
        <td style="display: none;"><?php echo $value->sub_id ?></td>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->email ?></td>
        <td><?php echo $value->phonenumber ?></td>
        <td><?php echo $value->discount ?></td>
        <td><?php echo $value->account_holder_name ?></td>   
        <td><?php echo $value->bank_name ?></td>     
        <td><?php echo $value->bank_account_number ?></td>
        <td><?php echo $value->bank_ifsc ?></td> 
        <td><?php echo $value->bank_address ?></td>
         <td>
          <button type="button"  class="btn btn-success edit" 
             sub_id="<?php echo $value->sub_id; ?>"
             name="<?php echo $value->name ;?>"
             email="<?php echo $value->email ;?>"
             phonenumber="<?php echo $value->phonenumber;?>"
             discount="<?php echo $value->discount;?>"
             account_holder_name="<?php echo $value->account_holder_name;?>"
             bank_name="<?php echo $value->bank_name;?>"
             bank_account_number="<?php echo $value->bank_account_number;?>"
             bank_ifsc="<?php echo $value->bank_ifsc;?>"
             bank_address="<?php echo $value->bank_address;?>"
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
  $("#id").val($(this).attr('sub_id'));
  $("#name").val($(this).attr("name"));
  $("#email").val($(this).attr("email"));
  $("#phonenumber").val($(this).attr("phonenumber"));
  $("#discount").val($(this).attr("discount"));
  $("#Accountname").val($(this).attr("account_holder_name"));
  $("#bankname").val($(this).attr("bank_name"));
  $("#Banknum").val($(this).attr("bank_account_number"));
  $("#BIFSC").val($(this).attr("bank_ifsc"));
  $("#Bankadd").val($(this).attr("bank_address"));
  $("#sub").html('Update');
});


setTimeout(function() {
$('#successMessage').fadeOut('fast');
}, 2000);

$('#table1').DataTable();
</script>

@endsection




