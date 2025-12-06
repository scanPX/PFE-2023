<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import modl
use App\Models\home_modl;

class home_contr extends Controller
{
    public function index(){
        //  $names = DB::table('home_mig')->select('name')->get();
        $NamePassws= home_modl::select("*")->get();
        
        return view('app',['NamePassws'=>$NamePassws]);
        // view('app',['name'->$names,'passwords'->$password])
    }
}
