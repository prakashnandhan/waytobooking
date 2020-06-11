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
<div>
  <h2>HALL BOOK List</h2>     
  <div style="overflow-x:auto; ">
  <table class=" table table-bordered table-hover"   id="table1">
    <thead>
      <tr>
        <th style="display: none;">id</th>
        <th>HALL NAME</th>
        <th>AVAILABILITY</th>
        <th>HALL OWNER NAME</th>
        <th>HALL OWNER PHONE</th>
        <th>HALL OWNER EMAIL</th>
        <th>HALL ADDRESS</th>
        <th>CUSTOMER NAME</th>
        <th>CUSTOMER PHONE NUMBER</th>
        <th>CUSTOMER EMAIL</th>
        <th>From Date</th>
        <th>To Date</th>
        <th>NO Guests</th>
        <th>DESCRIPTION</th>
        <th>created_at</th>          
      </tr>
    </thead>
    <tbody>
       <?php foreach($hall_book_data as $value){ 
          $agent_id=$value->hall_booking_agent_id;
          $agent_deatils=DB::table('users')->where('id','=',$agent_id)->get();
          /*dd($agent_deatils)*/
        ?>
      <tr>
        <td style="display: none;"><?php echo $value->hall_id ?></td>
        <td><?php echo $value->hall_name ?></td>
        <td><?php if($value->hall_availbility===1)
                  {
                    echo "YES";
                  }
                  if($value->hall_availbility===0)
                  {
                    echo "NO";
                  }
                  if($value->hall_availbility===null)
                  {
                    echo "NOT"." "."CONFIRMED";
                  }?>           
        </td>
        <th><?php echo $agent_deatils[0]->name?></th>
        <th><?php echo $agent_deatils[0]->phonenumber ?></th>
        <th><?php echo $agent_deatils[0]->email ?></th>
        <td><?php echo $value->hall_address ?></td>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->phonenumber ?></td>    
        <td><?php echo $value->email ?></td>
        <td><?php echo $value->from_date ?></td>
        <td><?php echo $value->to_date ?></td>
        <td><?php echo $value->no_guests ?></td>
        <td><?php echo $value->description ?></td>
        <td><?php echo $value->created_at ?></td> 
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
