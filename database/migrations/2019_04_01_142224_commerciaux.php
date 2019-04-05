<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Commerciaux extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Commerciaux', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('mail', 128)->unique();          // date/heure de lancement de la partie
            $table->string('nom', 128);                     // numero/nom de l'equipe
            $table->string('prenom', 128);                  // couleur de l'equipe
            $table->string('tel', 16);                      // date/heure de fin de la partie
            $table->string('ref');                          // chrono en h/m/s
            $table->string('adr');                          // 0 aucune enigme de resolu 1 ...
            $table->string('password');                     // 0 partie non commencee 1 partie en cours 2 partie finie
            $table->string('type', 4);                      // 0 partie non commencee 1 partie en cours 2 partie finie
            $table->timestamps();
            // exemple ok avec clef primairy double et forein key
            //$table->unsignedInteger('id')->unique();
            //$table->string('mail', 128)->unique();          // date/heure de lancement de la partie
            //$table->primary(array('mail', 'id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Commerciaux');
    }
}
