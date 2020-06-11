@extends('layout.admin')
@section('content')

<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $report['marriage'] ?></h3>

              <p>Total No Of Marriage Halls</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $report['party'] ?><sup style="font-size: 20px"></sup></h3>

              <p>Total No Of Party Halls</p>
            </div>
            <div class="icon">
               <i class="fa fa-home"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $report['event'] ?></h3>
              <p>Total No Of Event Halls</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $report['resort'] ?></h3>
              <p>Total No Of Resorts</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $report['user'] ?></h3>
              <p>Total No Of User Registration</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
           
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h3><?php echo $report['subadmin'] ?></h3>
              <p>Total No Of New SubAdmin Registration</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">View</button>
          </div>
        </div>


      

       
        <!-- ./col -->
      </div>
      <div class="hidden" id="hidden">
          @if(session()->has('messages'))
              <div class="alert alert-success" id="successMessage">
              {{ session()->get('messages') }}
              </div>
              @endif
      </div>
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align: center;">SubAdmins Details</h3>
      </div>
      <div class="modal-body">
        <table class=" table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="display:none;">id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($report['subadminlist'] as $value){ ?>
                <tr>
                    <td style="display:none;"><?php echo $value->id ?></td>
                    <td><?php echo $value->name ?></td>
                    <td><?php echo $value->phonenumber ?></td>
                    <td><?php echo $value->email ?></td>
                    <td><button  type="button" id="active" activeid="<?php echo $value->id;?>" class="btn-success id">Activate</button>
                    </td>
                     <td><button  type="button" id="delete" deleteid="<?php echo $value->id;?>" class="btn-danger delid">delete</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align: center;">User Details</h3>
      </div>
      <div class="modal-body">
        <table class=" table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="display:none;">id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align: center;">User Details</h3>
      </div>
      <div class="modal-body">
        <table class=" table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="display:none;">id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

 $(".id").click(function()
 {
  var id=$(this).attr('activeid');
  $.ajax({
        type:'GET',
        url:"activatesub/"+id,
        success:function(data){
            $("#myModal").remove();
              alert("actiavated");
              location.reload();
            
        }
      });
}); 

$(".delid").click(function()
 {
  var id=$(this).attr('deleteid');
 /* alert(id);*/
  $.ajax({
        type:'GET',
        url:"deletesub/"+id,
        success:function(data){
            $("#myModal").remove();
              alert("deleted");
              location.reload();
            
        }
      });
});  

</script>
@endsection