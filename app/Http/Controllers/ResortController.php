<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use store;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $input = Input::all();
     $out['indoor_games']=$input['igames'];
     $out['outdoor_games']=$input['ogames'];
     $out['food']=$input['food'];
     $out['swiming_pool']=$input['pool'];
     $out['name']=$input['name'];
     $out['area']=$input['area'];
     $out['address']=$input['address'];
     $out['description']=$input['description'];
     $out['phone']=$input['phonenumber'];
     $out['email']=$input['email'];
     $out['totalprice']=$input['totalprice'];
     $out['advanceprice']=$input['advanceprice']; 
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
        $out['image'] = json_encode($names);

     }

     if(isset($input['id']))
     {
     DB::table('resort')->where('resort_id', '=', $input['id'])->update($out);
     return redirect()->back()->with('message', 'Data updated Successfully..');      
     }
     elseif ($input['id']=='') {
     DB::table('resort')->insert($out);
     return redirect()->back()->with('message', 'Data saved Successfully..');    
     }
    
    }
    function destroy($id)
    {
     DB::table('resort')->where('resort_id', '=', $id)->delete();  
    }

     public function savesubresortdetails(Request $request)
    {
     $input = Input::all();
     $out['indoor_games']=$input['igames'];
     $out['outdoor_games']=$input['ogames'];
     $out['food']=$input['food'];
     $out['swiming_pool']=$input['pool'];
     $out['name']=$input['name'];
     $out['area']=$input['area'];
     $out['address']=$input['address'];
     $out['description']=$input['description'];
     $out['phone']=$input['phonenumber'];
     $out['email']=$input['email'];
     $out['totalprice']=$input['totalprice'];
     $out['advanceprice']=$input['advanceprice']; 
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
        $out['image'] = json_encode($names);

     }

     if(isset($input['id']))
     {
     DB::table('resort')->where('resort_id', '=', $input['id'])->update($out);
     return redirect()->back()->with('message', 'Data updated Successfully..');      
     }
     elseif ($input['id']=='') {
     DB::table('resort')->insert($out);
     return redirect()->back()->with('message', 'Data saved Successfully..');    
     }
    
    }


   
}