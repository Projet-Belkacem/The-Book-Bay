<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->string("prenom");
            $table->string("nom");
            $table->string("ville");
            $table->string("adresse", 500);
            $table->string("telephone");
            $table->string("email");
            $table->string("remarques", 500)->nullable();
            $table->string("num_carte")->nullable();
            $table->string("expiration_carte")->nullable();
            $table->string("cvv_carte")->nullable();
            $table->integer("code_postal");
            $table->foreignId('commande_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
}
