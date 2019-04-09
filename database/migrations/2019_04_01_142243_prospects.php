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
            $table->string('nom', 128);                     // nom du prospect
            $table->string('prenom', 128);                  // prenom du prospect
            $table->string('mail', 128);                    // mail du prospect
            $table->string('tel', 16);                      // telephone du prospect
            $table->string('type', 4);                      // p prospect c client
            $table->string('naissance')->nullable();        // date de naissance
            $table->string('adr_no', 8)->nullable();        // adresse no de rue
            $table->string('adr_rue', 128)->nullable();     // adresse nom de rue
            $table->string('adr_postal', 8)->nullable();    // adresse code postal
            $table->string('adr_ville', 128)->nullable();   // adresse ville
            $table->string('adr_pays', 64)->nullable();     // adresse pays
            $table->string('entreprise', 128)->nullable();  // entreprise du prospect
            $table->string('profession', 128)->nullable();  // profession du prospect
            $table->unsignedInteger('fkid');                // forein key id commercial
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
