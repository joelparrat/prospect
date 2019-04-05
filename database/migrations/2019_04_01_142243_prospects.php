<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prospects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prospects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom', 128);                     // numero/nom de l'equipe
            $table->string('prenom', 128);                  // couleur de l'equipe
            $table->string('mail', 128);                    // date/heure de lancement de la partie
            $table->string('tel', 16);                      // date/heure de fin de la partie
            $table->string('type', 4);                      // 0 partie non commencee 1 partie en cours 2 partie finie
            $table->string('naissance')->nullable();        // chrono en h/m/s
            $table->string('adr')->nullable();              // 0 aucune enigme de resolu 1 ...
            $table->string('pays')->nullable();             // 0 partie non commencee 1 partie en cours 2 partie finie
            $table->string('entreprise')->nullable();       // 0 partie non commencee 1 partie en cours 2 partie finie
            $table->string('profession')->nullable();       // 0 partie non commencee 1 partie en cours 2 partie finie
            $table->unsignedInteger('fkid');
            $table->foreign('fkid')->references('id')->on('Commerciaux');
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
        Schema::dropIfExists('Prospects');
    }
}
