<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accueil_modl;

class extrait_contr extends Controller
{
    public function index(Request $request){
        $dataId = $request->input('dataId');
        $data = Accueil_modl::find($dataId);

        return view('extrait', compact('data'));
    }
}
