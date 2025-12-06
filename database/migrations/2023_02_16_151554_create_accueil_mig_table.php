<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueil_mig', function (Blueprint $table) {

            $table->id();
            $table->string("annee");
            $table->string("numero");

            $table->string("prenom");
            $table->string("nom");
            $table->string("ne_le");
            $table->string("en");
            $table->string("corresp_au");
            $table->string("lieu");
            $table->string("nationnalite");
            $table->string("fils_p");
            $table->string("fils_m");
            $table->string("deces");

            $table->string("ar_prenom");
            $table->string("ar_nom");
            $table->string("ar_ne_le");
            $table->string("ar_en");
            $table->string("ar_corresp_au");
            $table->string("ar_lieu");
            $table->string("ar_nationnalite");
            $table->string("ar_fils_p");
            $table->string("ar_fils_m");
            $table->string("ar_deces");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accueil_mig');
    }
};
