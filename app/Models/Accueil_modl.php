<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accueil_modl extends Model
{
    use HasFactory;
    
    protected $table="accueil_mig";
    protected $fillable=["id",
    "annee","numero",
    "prenom","nom","ne_le","en","corresp_au","lieu","nationnalite","fils_p","fils_m","deces",
    "ar_prenom","ar_nom","ar_ne_le","ar_en","ar_corresp_au","ar_lieu","ar_nationnalite",
    "ar_fils_p","ar_fils_m","ar_deces", "updated_at"
    ];

}
