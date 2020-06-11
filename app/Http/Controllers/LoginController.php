<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use store;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Redirect;
use Illuminate\Mail\Mailable;
use Mail;

/*use App\Http\Controllers\Session; */
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login'); 
    }

    function checklogin(Request $request)
    {
    
         $input = Input::all();
         Session::put('userdata', $input['email']);
         $userdata=Session::get('userdata');
         $email=$input['email'];
         $password=md5($input['password']);
         $users = DB::select('select id,email,password,usertype from users');
         foreach ($users as $key => $value) {
         if($email==$value->email && $password==$value->password && $value->usertype==1)
         { 
           
       
            
             Session::get($value->id);
             Session::put('userid',$value->id);
             return redirect('admindashboard')->with('welcome',$userdata);

         }  
       }
        return redirect()->back()->with('message', 'Invalid Login Credentials');

    }
    public function subadmin()
    {
        return view('subadminlogin'); 
    }
    public function subadminsignup()
    {

        return view('signup');
    }
    public function singupsave(Request $request)
    {
        $input = Input::all();
        Session::put('username',$input['username']);
        $username=Session::get('username');
        $data['name']=$input['username'];
        $data['phonenumber']=$input['PhoneNumber'];
        $data['email']=$input['email'];
        $email=$input['email'];
        $data['password']=md5($input['password']);
        $data['usertype']="2";  
        DB::table('users')->insert($data);

      


        return redirect('/subadmin')->with(array(
                'messages' =>  'Your account is Created and its get Activated Within few minute', 
                'username' => $username)

            );
     
      /*echo "Basic Email Sent. Check your inbox.";*/
   




          
    }


    public function subadminlogin()
    {
         $input = Input::all();
         Session::put('useremail',$input['email']);
         $useremail=Session::get('useremail');
         $email=$input['email'];
         $password=md5($input['password']);
         $users = DB::select('select id,email,password,usertype from users');

       
         
       foreach ($users as $key => $value) {
        
         if($email==$value->email && $password==$value->password && $value->usertype==2 )
         {   Session::get($value->id);
             Session::put('userid',$value->id);
           return redirect('subadmindashboard');

         }
        
       }
       return redirect()->back()->with('message', 'Invalid Login Credentials');
   
    }

     function forgotpassword() 
     {
          return view('forgotpassword');
     }
     function Subforgotpassword() 
     {
          return view('subforgotpassword');
     }
      
     function passwordreset() 
     {
        $input = Input::all();
        $email=$input['email'];
        $phone=$input['phone'];
        $Newpassword['password']=md5($input['Newpassword']);
        $users = DB::select('select  email,password,phonenumber from users');

       foreach ($users as $key => $value) {
        
         if($email==$value->email  && $phone==$value->phonenumber)
         {
                 DB::table('users')->where([
                                             ['phonenumber', '=', $phone],
                                             ['email', '=', $email],
                ])->update($Newpassword);

             return redirect('/admin')->with('messages','Your Password is Reset.Please Fill the Form to Login');

          } 
       }
        return redirect()->back()->with('message', 'Please provide correct EmailID and Phonenumber to reset password');
        
     }
     function subpasswordreset() 
     {
        $input = Input::all();
        $email=$input['email'];
        $phone=$input['phone'];
        $Newpassword['password']=md5($input['Newpassword']);
        $users = DB::select('select email,phonenumber from users');

       foreach ($users as $key => $value) {
        
         if($email==$value->email  && $phone==$value->phonenumber)
         {
                 DB::table('users')->where([
                                             ['phonenumber', '=', $phone],
                                             ['email', '=', $email],
                ])->update($Newpassword);

             return redirect('/subadmin')->with('messages','Your Password is Reset.Please Login');

          } 
       }
        return redirect()->back()->with('message', 'Please provide correct EmailID and Phonenumber to reset password');
        
     }


     


}
