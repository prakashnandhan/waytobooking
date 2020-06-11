<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $data['marriage']=DB::table('marriagehall')->count();
        $data['party']=DB::table('partyhall')->count();
        $data['event']=DB::table('eventhall')->count();
        $data['resort']=DB::table('resort')->count();
        $data['subadmin']=DB::table('users')->where('usertype','=','0')->count();
        $data['subadminlist']=DB::table('users')->where('usertype','=','0')->get();
        $data['user']=DB::table('users')->where('usertype','=','3')->count();
        return View::make("index")->with('report', $data);
       
    }

    public function marriage() 
    {

        return view('marriagehall'); 
    }
    public function getmarriagereport()
    {
       $report=DB::select('select * from marriagehall');
       return View::make("marriagehall")->with('report', $report);
    }
    public function party()
    {

        return view('partyhall'); 
    }
    public function getpartyreport()
    {
       $report=DB::select('select * from partyhall');

       return View::make("partyhall")->with('report', $report);
    }

    public function event()
    {
        
        return view('eventhall'); 
    }
    public function geteventreport()
    {
       $report=DB::select('select * from eventhall');

       return View::make("eventhall")->with('report', $report);
    }

    public function resort()
    {
        
        return view('resort'); 
    }
    public function getresortreport()
    {
       $report=DB::select('select * from resort');

       return View::make("resort")->with('report', $report);
    }


     public function marriage_userreport()
    {
       $report=DB::table('user_search_data')->where('halltype', '=','marriagehall')->get();    
       /*dd($report);*/

       return View::make("marriage_userreport")->with('report', $report);
    }
      public function party_userreport()
    {
       $report=DB::table('user_search_data')->where('halltype', '=','partyhall')->get();
       return View::make("party_userreport")->with('report', $report);
    }
     public function event_userreport()
    {
      $report=DB::table('user_search_data')->where('halltype', '=','eventhall')->get();
       return View::make("event_userreport")->with('report', $report);
    }
     public function resort_userreport()
    {
       $report=DB::table('user_search_data')->where('halltype', '=','resort')->get();
       return View::make("resort_userreport")->with('report', $report);
    }
}
