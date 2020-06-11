@extends('layout.guestmain')
@section('content')
   <section class="section-accommo_1">
   </section>
   <section class="section-accommo_1">
   </section>
   <section class="section-accommo_1" >
   <head>
    <title>Waytobooking</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content= "width=device-width, user-scalable=no">
   <!--Made with love by Mutiullah Samim -->
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   <link href="https://fonts.googleapis.com/css?family=Amita:400,700|Kaushan+Script|Merienda:400,700&display=swap&subset=devanagari,latin-ext" rel="stylesheet"> 
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
<style >
html,body{
background-size: cover;
background-repeat: no-repeat;
height:50%;
font-family: 'Numans', sans-serif;
}
.section-accommo_1
{
background: linear-gradient(to right, rgb(142, 14, 0), rgb(31, 28, 24));

}

.container{
height: 100%;
align-content: center;
}

.card{
height: 400px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
height: 40px;

}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
</head>
<body class="background">
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                 <body>
        <div class="flex-center position-ref full-height">
            </div>
            <div class="card-body">
                  <a href="">
                  <img src="{{asset('images/logo.svg')}}" alt="User Image" style="width: 95px;height: 60px;"><span style="color:white;font-size:22px; font-family: 'Merienda', cursive;vertical-align: middle;"  >WAYTOBOOKING</span>   
                  </a>
                    @if (session('message'))
                    <div class="alert alert-danger" id="dangerMessage" style="font-size:15px;">
                    {{ session('message') }}
                    </div>
                    @endif
                <form action="{{url('usersingupsave')}}" method="post" id="signupForm" name="signupForm">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @if(session()->has('messages'))
                    <div class="alert alert-success" id="successMessage" style="font-size:15px;">
                    {{ session()->get('messages') }} 
                    </div>
                    @endif
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                       <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" name="PhoneNumber" placeholder="PhoneNumber" required="required">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                           <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                    </div>
                     <div class="input-group form-group">
                        <div class="input-group-prepend">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                    </div>
                     <div class="input-group form-group">
                        <div class="input-group-prepend">
                           <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                            <i class="fa fa-check"></i>
                           </span>
                        </div>
                      <input type="password" class="form-control" name="confirm_password" id="confirmpassword" placeholder="Confirm Password"  required="required">
                        <div class="form-group">
                        <span class="error" style="color:red"></span><br />
                        </div>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn float-right login_btn" style="font-size:20px;" >Sign Up</button>
                    </div>
                    <div></div>    
                <div>
               <div class="text-left" style="font-size:18px;color:red;" >Already have an account?<a href="{{url('userlogin')}}" style="font-size:18px;color:green">Login here</a></div>
                
        </div>
                </form>
        </div>
      
    </body>

            </div>
            
            </div>
            
        </div>
    </div>
</div>
</body>
</section>
<script type="text/javascript">
setTimeout(function() {
$('#successMessage').fadeOut('fast');
}, 3000);
setTimeout(function() {
$('#dangerMessage').fadeOut('fast');
}, 3000);
        var allowsubmit = false;
        $(function(){
            //on keypress 
            $('#confirmpassword').keyup(function(e){
                //get values 
                var pass = $('#password').val();
                var confpass = $(this).val();
                
                //check the strings
                if(pass == confpass){
                    //if both are same remove the error and allow to submit
                    $('.error').text('');
                    allowsubmit = true;
                }else{
                    //if not matching show error and not allow to submit
                    $('.error').text('Password not matching');
                    allowsubmit = false;
                }
            });
            
            //jquery form submit
            $('#signupForm').submit(function(){
            
                var pass = $('#password').val();
                var confpass = $('#confirmpassword').val();
 
                //just to make sure once again during submit
                //if both are true then only allow submit
                if(pass == confpass){
                    allowsubmit = true;
                }
                if(allowsubmit){
                    return true;
                }else{
                    return false;
                }
            });
        });

</script>
@endsection