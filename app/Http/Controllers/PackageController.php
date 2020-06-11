<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\Kernel;
use store;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    }
     public function addpackage()
    {
         $report=DB::select('select * from package');
         return View::make("package")->with('report', $report); 
    }

    
    public function Catering()
    {
     $report=DB::table('package')->where('packagetype', '=','Catering')->get();

     return View::make("catering")->with('report', $report);    
    }
    public function flowerdecoration()
    {
        $report=DB::table('package')->where('packagetype', '=','FlowerDecoration')->get();
        return View::make("flowerdecoration")->with('report', $report);
    }
    public function weddingbands()
    {
        $report=DB::table('package')->where('packagetype', '=','WeddingBands')->get();
        return View::make("weddingbands")->with('report', $report);

    }
    
     public function mehendi()
    {

        $report=DB::table('package')->where('packagetype', '=','Mehendi')->get();
        return View::make("mehendi")->with('report', $report);
     
    }
     public function makeup()
    {
         $report=DB::table('package')->where('packagetype', '=','Makeup')->get();
        return View::make("makeup")->with('report', $report);
   
    }
     public function bangle()
    {
         $report=DB::table('package')->where('packagetype', '=','Bangle')->get();
         return View::make("bangle")->with('report', $report);
    }
     public function ornaments()
    {
        $report=DB::table('package')->where('packagetype', '=','Ornaments')->get();
        return View::make("ornaments")->with('report', $report);
   
    }
     public function Sangeet()
    {
       $report=DB::table('package')->where('packagetype', '=','Sangeet')->get();
        return View::make("sangeeth")->with('report', $report);
     
    }
     public function purohit()
    {
          $report=DB::table('package')->where('packagetype', '=','Purohit')->get();
         return View::make("purohith")->with('report', $report);

    }
    public function dance()
    {
         $report=DB::table('package')->where('packagetype', '=','Dance')->get();
         return View::make("dance")->with('report', $report);
     
    }
    public function Photography()
    {

         $report=DB::table('package')->where('packagetype', '=','Photography')->get();
         return View::make('photography')->with('report', $report);
     
    }
 

    public function Catering_userreport()
    {
     $report=DB::table('catering_book_data')->get();
    /* dd($report);*/
     return View::make("Catering_userreport")->with('report', $report);    
    }
    public function flowerdecoration_userreport()
    {
        $report=DB::table('flower_book_data')->get();
       /* dd($report);*/
        return View::make("flowerdecoration_userreport")->with('report', $report);
    }
   public function weddingbands_userreport()
    {
        $report=DB::table('weddingband_book_data')->get();
        return View::make("weddingbands_userreport")->with('report', $report);

    }
    
     public function mehendi_userreport()
    {

        $report=DB::table('mehindi_book_data')->get();
        return View::make("mehendi_userreport")->with('report', $report);
     
    }
     public function makeup_userreport()
    {
         $report=DB::table('makeup_book_data')->get();
        return View::make("makeup_userreport")->with('report', $report);
   
    }
     public function bangle_userreport()
    {
         $report=DB::table('bangle_book_data')->get();
         return View::make("bangle_userreport")->with('report', $report);
    }
     public function ornaments_userreport()
    {
        $report=DB::table('ornament_book_data')->get();
        return View::make("ornaments_userreport")->with('report', $report);
   
    }
     public function Sangeet_userreport()
    {
       $report=DB::table('sangeet_book_data')->get();
        return View::make("Sangeet_userreport")->with('report', $report);
     
    }
     public function purohit_userreport()
    {
          $report=DB::table('purohith_book_data')->get();
         return View::make("purohit_userreport")->with('report', $report);

    }
    public function dance_userreport()
    {
         $report=DB::table('dance_book_data')->get();
         return View::make("dance_userreport")->with('report', $report);
     
    }
    public function Photography_userreport()
    {

         $report=DB::table('photo_book_data')->get();
         return View::make('Photography_userreport')->with('report', $report);
     
    }















    public function savepackage(Request $request)
    { 
        $input = Input::all();
        $out['packagename']=$input['pname'];
        $out['packagetype']=$input['type'];
        $out['name']=$input['name'];
        $out['address']=$input['address'];
        $out['phonenumber']=$input['phonenumber'];
        $out['email']=$input['email'];
        $out['totalprice']=$input['totalprice'];
        $userid=Session::get('userid'); 
        $out['user_id']=$userid;
        $out['user_type']='1';


     if(isset($input['id']))
     {
     DB::table('package')->where('packageid', '=', $input['id'])->update($out);
     return redirect()->back()->with('message', 'Data updated Successfully..');  
     }
     elseif ($input['id']=='') {
     DB::table('package')->insert($out);
     return redirect()->back()->with('message', 'Data saved Successfully..');   
     }
      
    }
    function destroy($id)
    {
     DB::table('package')->where('packageid', '=', $id)->delete();  
    }


     public function addsubpackage()
    {
         $userid=Session::get('userid');
         $report=DB::table('package')->where('user_id','=',$userid)->get();
         return View::make("subpackage")->with('report', $report); 
    }
  
    



}