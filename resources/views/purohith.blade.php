@extends('layout.admin')
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

<div >
  <h2>Purohiths Detail List</h2>            
  <table class=" table table-bordered table-hover" id="table1">
    <thead>
      <tr>
        <th style="display: none;">id</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>Package Type</th>
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
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->address ?></td>
        <td><?php echo $value->packagetype ?></td>
        <td><?php echo $value->phonenumber ?></td>   
        <td><?php echo $value->email ?></td>     
        <td><?php echo $value->totalprice ?></td>
         <td>
          <button type="button"  class="btn btn-success edit" >Edit</button> 
            <button class="btn btn-danger del">delete</button>
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
</script>

@endsection