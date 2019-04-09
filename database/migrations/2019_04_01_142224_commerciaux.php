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
            $table->string('mail', 128)->unique();          // mail double interdit
            $table->string('nom', 128);                     // nom du commercial
            $table->string('prenom', 128);                  // prenom du commercial
            $table->string('tel', 16);                      // telephone du commercial
            $table->string('ref');                          // reference dans l'entreprise
            $table->string('adr_no', 8);                    // adresse no de rue
            $table->string('adr_rue', 128);                 // adresse nom de rue
            $table->string('adr_postal', 8);                // adresse code postal
            $table->string('adr_ville', 128);               // adresse ville
            $table->string('password');                     // mot de passe
            $table->string('type', 4);                      // a administrateur s chef service e chef equipe c commercial
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
