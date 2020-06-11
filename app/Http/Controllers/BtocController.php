<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\Kernel;
use store;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session;
use DateTime;


class BtocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $list['data']=DB::table('areas')->orderBy('area_name')->distinct()->get()->unique('area_name');
         return View::make("b2c")->with($list);
         
    }

    public function aboutway(Request $request)
    {
 
         return view('aboutway');
    }


    public function userlogin(Request $request)
    {

         return view('userlogin');
    }


    public function usersignup(Request $request)
    {

         return view('usersignup');
    }

   
    public function usersingupsave(Request $request)
    {
        $input = Input::all();
        Session::put('username',$input['username']);
        $username=Session::get('username');
        $data['name']=$input['username'];
        $data['phonenumber']=$input['PhoneNumber'];
        $data['email']=$input['email'];
        $data['password']=md5($input['password']);
        $data['usertype']="3";  
        DB::table('users')->insert($data);
       return redirect('userlogin')->with(array(
                'messages' =>  'Your account is Created Please Login',
                'username' => $username)

            );
          Mail::send('email.mail', ['name'=>$username, 'email'=> $email,"body"=>'Your waytobooking account is activated within 5minutes',"website"=>"www.waytobooking.com",'number'=>"+919880455020"], function ($message) use ($email) {
            $message->from('waytobooking@gmail.com');
            $message->to($email)->subject
            ('Account Activation');
            });            
             Mail::send('email.admin_info', ['name'=>"ADMIN", 'email'=> $email,"body"=>'USER is Registerd',"website"=>"www.waytobooking.com",'number'=>"+919880455020",'user_num'=>$input['PhoneNumber'],'user_email'=>$email,'user_name'=>$input['username']], function ($message) use ($email) {
            $message->from('waytobooking@gmail.com');
            $message->to("waytobooking@gmail.com")->subject
            (' USER Account Activation');
            });
     
    }

    function userchecklogin(Request $request)
    {
   
         $input = Input::all();
         Session::put('userdata', $input['email']);
         $userdata=Session::get('userdata');
         $username=Session::get('username');
         $email=$input['email'];
         $password=md5($input['password']);
         $users = DB::select('select id,email,password,usertype from users');
         foreach ($users as $key => $value) {
         if($email==$value->email && $password==$value->password && $value->usertype==3)
         {
           
             Session::get($value->id);
             Session::put('userid',$value->id);
             return redirect('userdashboard')->with('welcome',$userdata);
              Mail::send('email.mail', ['name'=>$username, 'email'=> $email,"body"=>'Your waytobooking Login is Sucessfull',"website"=>"www.waytobooking.com",'number'=>"+919880455020"], function ($message) use ($email) {
            $message->from('waytobooking@gmail.com');
            $message->to($email)->subject
            ('LOGIN  SUCCFULL');
            });            
             Mail::send('email.admin_info', ['name'=>"ADMIN", 'email'=> $email,"body"=>'USER LOGIN IS SUCESSFULL',"website"=>"www.waytobooking.com",'number'=>"+919880455020",'user_num'=>,'user_email'=>$email,'user_name'=>$username], function ($message) use ($email) {
            $message->from('waytobooking@gmail.com');
            $message->to("waytobooking@gmail.com")->subject
            (' LOGIN Account SUCCESSFULL');
            });
         }  
       }
        return redirect()->back()->with('message', 'Invalid Login Credentials');

    }
   
    public function userdashboard(Request $request)
    {
      $list['data']=DB::table('areas')->orderBy('area_name')->distinct()->get()->unique('area_name');
        return View::make("userdashboard")->with($list);

        
    }
    public function userforgot(Request $request)
    {

         return view('userforgot');
    }

    function userpasswordreset()
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

             return redirect('userlogin')->with('messages','Your Password is Reset.Please Fill the Form to Login');

          }
       }
        return redirect()->back()->with('message', 'Please provide correct EmailID and Phonenumber to reset password');
       
     }


     /*public function search_step_2 ()
     {

         $input = Input::all();
         $data['halltype']=$input['halltype'];
         $data['area']=$input['area'];
         $data['no_guest']=$input['No_Guest'];
         $date = new DateTime($input['date']);
         $data['date']=$date->format('Y-m-d');
         $data['user_type']="3";
         $data['user_id']=session()->get('userid');
         DB::table('user_search_data')->insert($data);
         return view('search_step2');
       
     }

     public function search_step3 ()
     {

         $input = Input::all();
         $data['name']=$input['name'];
         $data['phone']=$input['phone'];
         $data['email']=$input['email'];
         $id=session()->get('userid');
         DB::table('user_search_data')->where('user_id','=',$id)->update($data);
         return view('searchdata');
         
     }*/

      public function guestsearch_step_2 ()
     {

         $input = Input::all();
         $data['halltype']=$input['halltype'];
         $data['area']=$input['area'];
         $data['no_guest']=$input['No_Guest'];
         $date = new DateTime($input['fromdate']);
         $data['fromdate']=$date->format('Y-m-d');
         $date = new DateTime($input['todate']);
         $data['todate']=$date->format('Y-m-d');
         $data['user_type']="0";
         $data['user_id']='0';
         Session::get($input['halltype']);
         Session::put('halltype',$input['halltype']);
         Session::put('area',$input['area']);
         DB::table('user_search_data')->insert($data);
         return view('guestusersearch');
       
     }

      public function usersearch_step_2 ()
     {

         $input = Input::all();
         $data['halltype']=$input['halltype'];
         $data['area']=$input['area'];
         $data['no_guest']=$input['No_Guest'];
         $date = new DateTime($input['fromdate']);
         $data['fromdate']=$date->format('Y-m-d');
         $date = new DateTime($input['todate']);
         $data['todate']=$date->format('Y-m-d');
         $data['user_type']="0";
         $data['user_id']=session()->get('userid');
         Session::get($input['halltype']);
         Session::put('halltype',$input['halltype']);
         Session::put('area',$input['area']);
         DB::table('user_search_data')->insert($data);
         return view('usersearch');
       
     }

     
      public function guestsearch_step3 ()
     {
         $input = Input::all();
         $data['name']=$input['name'];
         $data['phone']=$input['phone'];
         $data['email']=$input['email'];
         $area=Session::get('area');
         $id='0';
         
         DB::table('user_search_data')->where('user_id','=',$id)->update($data);
         
         $list['marriagehall']=DB::table('marriagehall')->where('area','=',$area)->get();
         $list['partyhall']=DB::table('partyhall')->where('area','=',$area)->get();
         
         $list['eventhall']=DB::table('eventhall')->where('area','=',$area)->get();
         
         $list['Resort']=DB::table('resort')->where('area','=',$area)->get();
         
         return View::make("guestsearchdata")->with($list);
         
         
     }
     public function usersearch_step3 ()
     {
         $input = Input::all();
         $data['name']=$input['name'];
         $data['phone']=$input['phone'];
         $data['email']=$input['email'];
         $area=Session::get('area');
         $id=session()->get('userid');
         
         DB::table('user_search_data')->where('user_id','=',$id)->update($data);
         
         $list['marriagehall']=DB::table('marriagehall')->where('area','=',$area)->get();
         $list['partyhall']=DB::table('partyhall')->where('area','=',$area)->get();
         
         $list['eventhall']=DB::table('eventhall')->where('area','=',$area)->get();
         
         $list['Resort']=DB::table('resort')->where('area','=',$area)->get();
         
         return View::make("usersearchdata")->with($list);
         
         
     }
     
     public function newsletter ()
     {
         $input = Input::all();
         $data['email']=$input['email'];
         DB::table('newsletter')->insert($data);
        return redirect()->back()->with('message', 'Will Contact You soon..');
         
         
     }
     public function news_rport ()
     {
       
         $list['newsletter']=DB::table('newsletter')->get();
        /* dd($list['newsletter']);*/
         return View::make("news_report")->with($list);
         
        
                  
     }

     





     public function Marriagenavbar ()
     {
        $list['marriagehall']=DB::table('marriagehall')->get();
        return View::make("guestnavdata")->with($list); 
     }
      public function Partynavbar ()
     {
       
        $list['partyhall']=DB::table('partyhall')->get();
     
        return View::make("guestnavdata")->with($list);
      
          
     }
      public function Eventnavbar ()
     {
      
        $list['eventhall']=DB::table('eventhall')->get();
        return View::make("guestnavdata")->with($list);
      
          
     }
      public function Resortsnavbar ()
     {
        
        $list['Resort']=DB::table('resort')->get();
        return View::make("guestnavdata")->with($list);
      
          
     }

     public function cateringnavbar ()
     {
        $list['catering']=DB::table('package')->where('packagetype', '=','Catering')->get();
      /*  dd($list['catering']);*/        
        /*$list['catering']="catering";*/
        return View::make("packagesnav")->with($list);
      
          
     }
     public function decorationnavbar ()
     {
        $list['decoration']=DB::table('package')->where('packagetype', '=','FlowerDecoration')->get();
       /* dd($list['decoration']);*/
        return View::make("packagesnav")->with($list);
          
     }
      public function Bandsnavbar ()
     {
        $list['Bands']=DB::table('package')->where('packagetype', '=','WeddingBands')->get();
        /*dd($list['Bands']);*/
       return View::make("packagesnav")->with($list);
          
     }
      public function Mehendinavbar ()
     {
        $list['Mehendi']=DB::table('package')->where('packagetype', '=','Mehendi')->get();
        return View::make("packagesnav")->with($list);
          
     }
      public function MakeupArtistnavbar ()
     {
        $list['MakeupArtist']=DB::table('package')->where('packagetype', '=','Makeup')->get();
        return View::make("packagesnav")->with($list);
          
     }
      public function Ornamentsnavbar ()
     {
        $list['Ornaments']=DB::table('package')->where('packagetype', '=','Ornaments')->get();
        return View::make("packagesnav")->with($list);
          
     }
      public function BangleShastranavbar ()
     {
        $list['BangleShastra']=DB::table('package')->where('packagetype', '=','Bangle')->get();
        return View::make("packagesnav")->with($list);
          
     }
      public function Sangeetnavbar ()
     {
       $list['Sangeet']=DB::table('package')->where('packagetype', '=','Sangeet')->get();
       return View::make("packagesnav")->with($list);
          
     }
     public function Purohitnavbar ()
     {
        $list['Purohit']=DB::table('package')->where('packagetype', '=','Purohit')->get();
        return View::make("packagesnav")->with($list);
          
     }
     public function Dancenavbar ()
     {
       $list['Dance']=DB::table('package')->where('packagetype', '=','Dance')->get(); 
       return View::make("packagesnav")->with($list);
          
     }
     public function Photographynavbar ()
     {
        $list['Photography']=DB::table('package')->where('packagetype', '=','Photography')->get();
        return View::make("packagesnav")->with($list);
          
     }

    public function savecateringdetails ()
     {

         $input = Input::all();

         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['no_guests']=$input['noguests'];
         $data['food_type']=$input['food_type'];
         $data['service_for']=$input['service_for'];
         $data['description']=$input['description'];
         $data['address']=$input['address'];
         $data['subadmin_id']=$input['subadmin_id'];
         DB::table('catering_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
     public function saveflowerdetails ()
     {

         $input = Input::all();

       

         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
         $data['subadmin_id']=$input['subadmin_id'];
         DB::table('flower_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
       public function saveweddingbanddetails ()
     {

         $input = Input::all();
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
        /* $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('weddingband_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
        public function savemehendidetails ()
     {

         $input = Input::all();
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
     /*    $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('mehindi_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
     public function savemakeupadetails ()
     {

         $input = Input::all();
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
        /* $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('makeup_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
    public function saveornamentdetails ()
     {

         $input = Input::all();
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
      /*   $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('ornament_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
       public function savebangledetails()
     {

         $input = Input::all();

         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
       /*  $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('bangle_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
       public function savesangeetdetails()
     {

         $input = Input::all();
       
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
       /*  $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('sangeet_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }

       public function savepurohithdetails()
     {

         $input = Input::all();
       
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
     /*    $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('purohith_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }


     public function savedancedetails()
     {

         $input = Input::all();
       
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
       /*  $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('dance_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
       public function savephotodetails()
     {

         $input = Input::all();
       
         $data['name']=$input['name'];
         $data['phone']=$input['phonenumber'];
         $data['email']=$input['email'];
         $date = new DateTime($input['date_of_service']);
         $data['date_of_service']=$date->format('Y-m-d');
         $data['description']=$input['description'];
         $data['address']=$input['address'];
       /*  $data['subadmin_id']=$input['subadmin_id'];*/
         DB::table('photo_book_data')->insert($data);
         return redirect()->back()->with('message', 'Booking is confirmed...Will Contact You soon..');    
          
     }
   

      public function savebookingdetails()
     {
        $input = Input::all();
       /*dd($input);*/
        $data['name']=$input['hall_name'];
        $data['address']=$input['hall_address'];
        $data['hall_booking_agent_id']=$input['hall_id'];
        return View::make("booking")->with($data);
     }

     public function booking()
     {
      $input = Input::all();
     /*  dd($input);*/
      $data['hall_name']=$input['hall_name'];
      $data['hall_address']=$input['hall_address'];
      $data['name']=$input['name'];
      $data['hall_booking_agent_id']=$input['hall_booking_agent_id'];
      $data['phonenumber']=$input['phonenumber'];
      $data['email']=$input['email'];
      $date = new DateTime($input['from_date']);
      $data['from_date']=$date->format('Y-m-d');
      $date = new DateTime($input['to_date']);
      $data['to_date']=$date->format('Y-m-d');
      $data['no_guests']=$input['no_guest'];
      $data['description']=$input['description'];
      DB::table('hall_book_data')->insert($data);
      return view('booktemplate');
 
     }
     public function hall_booking()
     {
      $report['hall_book_data']=DB::table('hall_book_data')->get();
      /* dd($report['hall_book_data']);*/
      return View::make("hall_book_report")->with($report);
       
     }

     




     

}
