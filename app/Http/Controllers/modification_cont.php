<?php

namespace App\Http\Controllers;
// import model
use App\Models\Accueil_modl;

use Illuminate\Http\Request;

class modification_cont extends Controller
{
    public function index($id,Request $request){

        $datas= Accueil_modl::select("*")->get();

        //update :
        
        if($request->input('annee_modif') <> "" && $request->input('numero_modif') <> ""){
            
            $dataToBase["annee"]= $request->input('annee_modif');
            $dataToBase["numero"]= $request->input('numero_modif');
            $dataToBase["created_at"]= date("Y-m-d H:i:s");

            Accueil_modl::where(['id'=>$id])->update($dataToBase);

            return redirect("Modifications/$id")->with('message','successfully');
        }
        
        if($request->input('nom') <> "" && $request->input('prenom') <> ""
        && $request->input('ar_nom') <> "" && $request->input('ar_prenom') <> ""    
        ){
            
            $dataToBase["prenom"]= $request->input('nom');
            $dataToBase["nom"]= $request->input('prenom');
            $dataToBase["ar_prenom"]= $request->input('ar_nom');
            $dataToBase["ar_nom"]= $request->input('ar_prenom');

            $dataToBase["created_at"]= date("Y-m-d H:i:s");

            Accueil_modl::where(['id'=>$id])->update($dataToBase);

            return redirect("Modifications/$id")->with('message','successfully');
        }

        // Date :

        if($request->input('ne_le') <> "" && $request->input('en') <> ""
        && $request->input('corresp_au') <> "" && $request->input('ar_ne_le') <> ""
        && $request->input('ar_en') <> "" && $request->input('ar_corresp_au') <> ""  
        ){
            
            $dataToBase["ne_le"]= $request->input('ne_le');
            $dataToBase["en"]= $request->input('en');
            $dataToBase["corresp_au"]= $request->input('corresp_au');

            $dataToBase["ar_ne_le"]= $request->input('ar_ne_le');
            $dataToBase["ar_en"]= $request->input('ar_en');
            $dataToBase["ar_corresp_au"]= $request->input('ar_corresp_au');

            $dataToBase["created_at"]= date("Y-m-d H:i:s");

            Accueil_modl::where(['id'=>$id])->update($dataToBase);

            return redirect("Modifications/$id")->with('message','successfully');
        }

        // Lieu :
        
        if($request->input('lieu') <> "" && $request->input('nationnalite') <> ""
            && $request->input('ar_lieu') <> ""
        ){
            
        $dataToBase["lieu"]= $request->input('lieu');
        $dataToBase["nationnalite"]= $request->input('nationnalite');
        $dataToBase["ar_lieu"]= $request->input('ar_lieu');

            switch($request->input('nationnalite')){
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

            $dataToBase["created_at"]= date("Y-m-d H:i:s");
            Accueil_modl::where(['id'=>$id])->update($dataToBase);

            return redirect("Modifications/$id")->with('message','successfully');
        }
        // Parent :
        
        if($request->input('fils_p') <> "" && $request->input('fils_m') <> ""
        && $request->input('ar_fils_p') <> "" && $request->input('ar_fils_m') <> ""    
        ){
            
            $dataToBase["fils_p"]= $request->input('fils_p');
            $dataToBase["fils_m"]= $request->input('fils_m');

            $dataToBase["ar_fils_p"]= $request->input('ar_fils_p');
            $dataToBase["ar_fils_m"]= $request->input('ar_fils_m');

            $dataToBase["created_at"]= date("Y-m-d H:i:s");

            Accueil_modl::where(['id'=>$id])->update($dataToBase);

            return redirect("Modifications/$id")->with('message','successfully');
        }

        if($request->input('deces') <> "" && $request->input('ar_deces') <> ""){
            
            $dataToBase["deces"]= $request->input('deces');
            $dataToBase["ar_deces"]= $request->input('ar_deces');

            $dataToBase["created_at"]= date("Y-m-d H:i:s");
            Accueil_modl::where(['id'=>$id])->update($dataToBase);

            return redirect("Modifications/$id")->with('message','successfully');
        }
        
        
        
        return view('modification',["datas"=>$datas,"id"=>$id]);
    }
}
