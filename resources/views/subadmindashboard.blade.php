@extends('layout.subadmin')
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
              <h3></h3>
              <p>Marriage hall</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="{{ url('submarriage')}}">
           <button type="button" class="btn btn-success"  >
            ADD</button></a>
          </div>
        </div>

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3></h3>
              <p>Party hall</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
          <a href="{{ url('subparty')}}">
           <button type="button" class="btn btn-success"  >
            ADD</button></a>
          </div>
        </div>


         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3></h3>
              <p>Event hall</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
           <a href="{{ url('subevent')}}">
           <button type="button" class="btn btn-success"  >
            ADD</button></a>
          </div>
        </div>

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3></h3>
              <p>Resort</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
           <a href="{{ url('subresort')}}">
           <button type="button" class="btn btn-success"  >
            ADD</button></a>
          </div>
        </div>
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3></h3>
              <p>Packages</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
           <a href="{{ url('addsubpackage')}}">
           <button type="button" class="btn btn-success"  >
            ADD</button></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

  <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align: center;">Enquiry Details</h3>
      </div>
      <div class="modal-body">
        <table class=" table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="display:none;">id</th>
                    <th>Name</th>
                    <th>date</th>
                    <th>Action</th>
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
        <h3 class="modal-title" style="text-align: center;">Enquiry Details</h3>
      </div>
      <div class="modal-body">
        <table class=" table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="display:none;">id</th>
                    <th>Name</th>
                    <th>date</th>
                    <th>Action</th>
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
  <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align: center;">Enquiry Details</h3>
      </div>
      <div class="modal-body">
        <table class=" table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="display:none;">id</th>
                    <th>Name</th>
                    <th>date</th>
                    <th>Action</th>
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
  <div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align: center;">Enquiry Details</h3>
      </div>
      <div class="modal-body">
        <table class=" table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="display:none;">id</th>
                    <th>Name</th>
                    <th>date</th>
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
    
      <!-- /.row -->
      <!-- Main row -->
      
        <!-- /.Left col -->
     
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
</script>
@endsection
