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
    
</style>
<div>
  <h2>HALL List</h2>     
  <div style="overflow-x:auto; ">
  <table class=" table table-bordered table-hover"   id="table1">
    <thead>
      <tr>
        <th style="display: none;">id</th>
        <th>HALL NAME</th>
        <th>HALL ADDRESS</th>   
        <th>From Date</th>
        <th>To Date</th>
        <th>CREATED AT</th>
        <th>AVAILABILIY</th>                
      </tr>
    </thead>
    <tbody>
       <?php foreach($report as $value){ ?>
      <tr>
        <td style="display: none;"><?php echo $value->hall_id ?></td>
        <td><?php echo $value->hall_name ?></td>
        <td><?php echo $value->hall_address ?></td>
        <td><?php echo $value->from_date ?></td>
        <td><?php echo $value->to_date ?></td>
        <td><?php echo $value->created_at ?></td> 
        <td>
            <button class="btn btn-success yes" id="del" subid="<?php echo $value->hall_id; ?>">yes</button>
             <button class="btn btn-danger no" id="del" subid="<?php echo $value->hall_id; ?>">no</button>
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
  $('#table1').DataTable();


$(".yes").click(function(){
var id=($(this).attr('subid'));
/*alert(id);*/
$.ajax({
        type:'GET',
        url:"availbility_yes/"+id,
        success:function(data) {
          alert("data updated Successfully");
        location.reload();
        }
      });
});


$(".no").click(function(){
var id=($(this).attr('subid'));
/*alert(id);*/
$.ajax({
        type:'GET',
        url:"availbility_no/"+id,
        success:function(data) {
        alert("data updated Successfully");
        location.reload();
        }
      });
});



</script>
@endsection
