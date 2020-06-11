<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Http\Kernel;
use store;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session;

 

class MarriageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $input = Input::all();
     $out['area']=$input['area'];
     $out['name']=$input['name'];
     $out['address']=$input['address'];
     $out['description']=$input['description'];
     $out['phonenumber']=$input['phonenumber'];
     $out['email']=$input['email'];
     $out['totalprice']=$input['totalprice'];
     $out['advanceprice']=$input['advanceprice']; 
     $out['roomtype']=$input['roomtype']; 
     $out['hallcapacity']=$input['hallcapacity']; 
     $out['dhallcapacity']=$input['dhallcapacity']; 
     $out['roomcount']=$input['roomcount']; 
     $out['parking']=$input['parking'];
     $userid=Session::get('userid'); 
     $out['user_id']=$userid;
     $out['user_type']='1';
     $area['area_name']=$out['area'];
     DB::table('areas')->insert($area);

     if($request->hasFile('img'))
     {
             $names = [];
             foreach ($request->img as $file) {

             $filename=$file->getClientOriginalName();  
             $file->storeAs('public/upload/admin/'.$input['name'],$filename); 
             array_push($names, $filename); 
        }
        $out['img'] = json_encode($names);
     }
     if(isset($input['id']))
     {
     DB::table('marriagehall')->where('marriageid', '=', $input['id'])->update($out);
     return redirect()->back()->with('message', 'Data updated Successfully..');  
     }
     elseif ($input['id']=='') {
        DB::table('marriagehall')->insert($out);
        return redirect()->back()->with('message', 'Data saved Successfully..');   
     }
         
     }
    function delete($id)
    {
     DB::table('marriagehall')->where('marriageid', '=', $id)->delete();  
    }



    public function savesubmarriagedetails(Request $request)
    {
     $input = Input::all();
     $out['area']=$input['area'];
     $out['name']=$input['name'];
     $out['address']=$input['address'];
     $out['description']=$input['description'];
     $out['phonenumber']=$input['phonenumber'];
     $out['email']=$input['email'];
     $out['totalprice']=$input['totalprice'];
     $out['advanceprice']=$input['advanceprice']; 
     $out['roomtype']=$input['roomtype']; 
     $out['hallcapacity']=$input['hallcapacity']; 
     $out['dhallcapacity']=$input['dhallcapacity']; 
     $out['roomcount']=$input['roomcount']; 
     $out['parking']=$input['parking']; 
     $userid=Session::get('userid'); 
     $out['user_id']=$userid;
     $out['user_type']='2';
     $area['area_name']=$out['area'];
     DB::table('areas')->insert($area);
     if($request->hasFile('img'))
     {
             $names = [];
             foreach ($request->img as $file) {

             $filename=$file->getClientOriginalName();  
             $file->storeAs('public/upload/subadmin/'.$input['name'],$filename); 
             array_push($names, $filename); 
        }
        $out['img'] = json_encode($names);
     }
     if(isset($input['id']))
     {
     DB::table('marriagehall')->where('marriageid', '=', $input['id'])->update($out);
     return redirect()->back()->with('message', 'Data updated Successfully..');  
     }
     elseif ($input['id']=='') {
        DB::table('marriagehall')->insert($out);
        return redirect()->back()->with('message', 'Data saved Successfully..');   
     }
      

    }

    
    }


    
    

   

