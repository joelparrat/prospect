<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('prenom', 128);                  // prenom du commercial
            $table->string('tel', 16);                      // telephone du commercial
            $table->string('ref');                          // reference dans l'entreprise
            $table->string('adr_no', 8);                    // adresse no de rue
            $table->string('adr_rue', 128);                 // adresse nom de rue
            $table->string('adr_postal', 8);                // adresse code postal
            $table->string('adr_ville', 128);               // adresse ville
            $table->string('type', 4);                      // a administrateur s chef service e chef equipe c commercial
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
