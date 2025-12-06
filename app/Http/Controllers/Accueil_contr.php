<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
// import model
use App\Models\Accueil_modl;
// import request
use App\Http\Request\Modification_req;

class Accueil_contr extends Controller
{
    public function index(){

        return view('accueil');
    }

    public function modification(Request $request){

            $datas= Accueil_modl::select("*")->get();
    
                $annee_inp = $request->input('annee');
                $numero_inp = $request->input('numero');
    
            if($annee_inp <> '' && $numero_inp <> ''){
                foreach($datas as $data){
                    if($numero_inp == $data['numero'] && $annee_inp == $data['annee']){
                        $dataId = $data['id'];
                        return redirect("Modifications/$dataId");
                        break;
                    }
                  }                                                                                                                                          
                }       
    
            return view('accueil');
    }

    public function store(Request $request){

        $datas= Accueil_modl::select("*")->get();
        $lastRecord = Accueil_modl::select("*")->orderBy('id', 'desc')->first();
        $dataId = $lastRecord ? $lastRecord->id : 0;

    if(
    isset($request->annee) && isset($request->numero) && 
    isset($request->prenom) && isset($request->nom) &&
    isset($request->ne_le) && isset($request->en)&&
    isset($request->corresp_au) && isset($request->nationnalite)&&
    isset($request->lieu) && isset($request->fils_p)&&
    isset($request->fils_m) && isset($request->deces)&&

    isset($request->ar_prenom) && isset($request->ar_nom)&& 
    isset($request->ar_ne_le) && isset($request->ar_en)&& 
    isset($request->ar_corresp_au) && isset($request->ar_lieu)&& 
    isset($request->ar_fils_p) && isset($request->ar_fils_m)&& 
    isset($request->ar_deces))
    {

        $new_id = $dataId + 1;
        $dataToBase["id"]= $new_id;

        $dataToBase["annee"]= $request->annee;
        $dataToBase["numero"]= $request->numero;

        $dataToBase["prenom"]= $request->prenom;
        $dataToBase["nom"]= $request->nom;

        $dataToBase["ne_le"]= $request->ne_le;
        $dataToBase["en"]= $request->en;
        $dataToBase["corresp_au"]= $request->corresp_au;

        $dataToBase["lieu"]= $request->lieu;
        $dataToBase["nationnalite"]= $request->nationnalite;

        $dataToBase["fils_p"]= $request->fils_p;
        $dataToBase["fils_m"]= $request->fils_m;

        $dataToBase["deces"]= $request->deces;

        $dataToBase["ar_prenom"]= $request->ar_prenom;
        $dataToBase["ar_nom"]= $request->ar_nom;

        $dataToBase["ar_ne_le"]= $request->ar_ne_le;
        $dataToBase["ar_en"]= $request->ar_en;
        $dataToBase["ar_corresp_au"]= $request->ar_corresp_au;

        $dataToBase["ar_lieu"]= $request->ar_lieu;


        switch($request->nationnalite){
            case 'marocaine':
                $ar_nationalite='مغربية';
                break;
            case 'francais':
                $ar_nationalite='فرنسية';
                break;
            case 'espaniol':
                $ar_nationalite='إسبانية';
                break;
            case 'pays_bas':
                $ar_nationalite='هولندية';
                break;
            case 'USA':
                $ar_nationalite='أمريكية';
                break;
        }

        $dataToBase["ar_nationnalite"]= $ar_nationalite;


        $dataToBase["ar_fils_p"]= $request->ar_fils_p;
        $dataToBase["ar_fils_m"]= $request->ar_fils_m;

        $dataToBase["ar_deces"]= $request->ar_deces;

        $dataToBase["created_at"]= date("Y-m-d H:i:s");


        if($datas->isEmpty()){
            Accueil_modl::create($dataToBase);
            return redirect('Accueil')->with('message','successfully');
        }

        foreach($datas as $data){
            if($data->numero == $request->numero && $data->annee == $request->annee){
                return redirect('Accueil')->with('message','not successfully');
            }
        }
        
        Accueil_modl::create($dataToBase);
        return redirect('Accueil')->with('message','successfully');

    }else{
        return redirect('Accueil')->with('message','not successfully');
        }

    }
}
