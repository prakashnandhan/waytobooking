@extends('layout.guestmain')
@section('content')
   <section class="section-accommo_1">
   </section>
   <section class="section-accommo_1">
   </section>
   <section class="section-accommo_1" >
   <head>
    <title>Login Page</title>
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
height: 350px;
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
width: 70px;
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
                <form action="{{Route('userchecklogin')}}" method="post" enctype="multipart/form-data">
                    @if(session()->has('messages'))
                    <div class="alert alert-success" id="successMessage" style="font-size:15px;">
                    {{ session()->get('messages') }} 
                    </div>
                    @endif
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user" style="font-size:15px;"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="email">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key" style="font-size:15px;"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="row align-items-center remember" style="font-size:15px;">
                        <input type="checkbox" style="font-size:15px;">Remember Me
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn float-right login_btn" style="font-size:20px;"  >Login</button> 
                    
                <div class="card-footer">
                <div class="text-left" style="font-size:15px;color:white;">
                    Don't have an account?<a href="{{url('usersignup')}}" style="font-size:15px;color:green;">Sign Up</a>
                </div>
                <div class="text-left">
                    <a href="{{url('userforgot')}}" style="font-size:16px;color:red;" >Forgot your password?</a>
                </div>
                
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

</script>
@endsection