<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Accueil_modl;

class naissance_contr extends Controller
{
    public function index(){

        $annees= Accueil_modl::select("annee")->get();
	    $numeros= Accueil_modl::select("numero")->get();

	    // $prenom= Accueil_modl::select("prenom")->get();
        // $nom= Accueil_modl::select("nom")->get();
        // $ne_le= Accueil_modl::select("ne_le")->get();
        // $en= Accueil_modl::select("en")->get();
        // $corresp_au= Accueil_modl::select("corresp_au")->get();
        // $lieu= Accueil_modl::select("lieu")->get();
        // $nationnalite= Accueil_modl::select("nationnalite")->get();
        // $fils_p= Accueil_modl::select("fils_p")->get();
        // $fils_m= Accueil_modl::select("fils_m")->get();
        // $deces= Accueil_modl::select("deces")->get();

        // $ar_prenom= Accueil_modl::select("ar_prenom")->get();
        // $ar_nom= Accueil_modl::select("ar_nom")->get();
        // $ar_ne_le= Accueil_modl::select("ar_ne_le")->get();
        // $ar_en= Accueil_modl::select("ar_en")->get();
        // $ar_corresp_au= Accueil_modl::select("ar_corresp_au")->get();
        // $ar_lieu= Accueil_modl::select("ar_lieu")->get();
        // $ar_nationnalite= Accueil_modl::select("ar_nationnalite")->get();
        // $ar_fils_p= Accueil_modl::select("ar_fils_p")->get();
        // $ar_fils_m= Accueil_modl::select("ar_fils_m")->get();
        // $ar_deces= Accueil_modl::select("ar_deces")->get();
        
        
        $datas= Accueil_modl::select("*")->get();

        return view('naissance',["datas"=>$datas,"annees"=>$annees,"numeros"=>$numeros]);
    }
}
