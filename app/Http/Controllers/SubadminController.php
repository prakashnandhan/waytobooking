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
use Session;
use Illuminate\Support\Facades\View;

class SubadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('subadmindashboard'); 
    }
    public function activatesub($id)
    {
    	DB::table('users')->where('id','=',$id)->update(['usertype'=>'2']);

    	return redirect()->back()->with('messages','Sub Admin Account is Activated');

    }

    public function deletesub($id)
    {
        DB::table('users')->where('id','=',$id)->delete();
        return redirect()->back()->with('messages','Sub Admin Account is deleted');

    }
    
    public function subadminprofile()
    {
        $userid=Session::get('userid');
        $report=DB::table('sub_admin_details')->where('user_id','=',$userid)->get();
        return View::make("subadminprofile")->with('report', $report);

    }
    public function saveprofile()
    {
     $input = Input::all();
     $out['name']=$input['name'];
     $out['phonenumber']=$input['phonenumber'];
     $out['email']=$input['email'];
     $out['discount']=$input['discount'];
     $out['account_holder_name']=$input['Accountname'];
     $out['bank_name']=$input['bankname'];
     $out['bank_account_number']=$input['Banknum'];
     $out['bank_ifsc']=$input['BIFSC'];
     $out['bank_address']=$input['Bankadd'];
     $userid=Session::get('userid'); 
     $out['user_id']=$userid;

     if(isset($input['id']))
     {
     DB::table('sub_admin_details')->where('sub_id', '=', $input['id'])->update($out);
     return redirect()->back()->with('message', 'Data updated Successfully..');  
     }
     elseif ($input['id']=='') {
        DB::table('sub_admin_details')->insert($out);
        return redirect()->back()->with('message', 'Data saved Successfully..');   
     }
     
    }


    public function submarriage()
    {
        $userid=Session::get('userid');
        $report=DB::table('marriagehall')->where('user_id','=',$userid)->get();
        return View::make("submarriagehall")->with('report', $report);
 
    }

     public function subparty()
    {
        $userid=Session::get('userid');
        $report=DB::table('partyhall')->where('user_id','=',$userid)->get();
        return View::make("subpartyhall")->with('report', $report);
 
    }


    public function subevent()
    {
        $userid=Session::get('userid');
        $report=DB::table('eventhall')->where('user_id','=',$userid)->get();
        return View::make("subeventhall")->with('report', $report);
 
    }

    public function subresort()
    {
        $userid=Session::get('userid');
        $report=DB::table('resort')->where('user_id','=',$userid)->get();
        return View::make("subresort")->with('report', $report);
 
    }


    public function managemarriage()
    {
      echo "construction"; 
 
    }


    public function manageparty()
    {
        echo "construction";
 
    }


    public function manageevent()
    {
       
     echo "construction";
    }

    public function manageresort()
    {
        echo "construction";
 
    }


      public function subadmin_report()
    {
        $report=DB::table('users')->where('usertype', '=','2')->get(); 
        
       /* dd($report);*/
       return View::make("subadmin_report")->with('report', $report);
 
    }


     public function subdestroy($id)
    {
         DB::table('users')->where('id', '=', $id)->delete();
        
    }




    public function sub_managehall()
    {

       $userid=Session::get('userid');
       /*dd($userid);*/
       $report=DB::table('hall_book_data')->where('hall_booking_agent_id','=',$userid)->get();

       /* dd($report);*/
       return View::make("availability_report")->with('report', $report);
     
    }


    public function availbility_yes($id)
    {
    $out['hall_availbility']='1';
    $report=DB::table('hall_book_data')->where('hall_id','=',$id)->update($out);  
    return redirect()->back()->with('message', 'Data updated Successfully..');  
    }

    public function availbility_no($id)
    {
     $out['hall_availbility']='0';
     $report=DB::table('hall_book_data')->where('hall_id','=',$id)->update($out);
     return redirect()->back()->with('message', 'Data updated Successfully..');
        
    }




    




    






    


    
  

}
