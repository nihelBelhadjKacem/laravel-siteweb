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

        Schema::create('dmrdvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom')->nullable();
            $table->date('date_naiss');
            $table->string('email');
            $table->integer('tel');
            $table->date('date');
            $table->integer('heure');
            $table->string('prelevement');
            $table->enum('choix', ['laboratoire', 'domicile']);
            $table->string('localisation');
            $table->unsignedBigInteger('user_id'); // Création du champs identique de patient_id
            $table->foreign('user_id')->references('id')->on('users');
            // Column / ID table / nom_table
            //$table->string('file2');
            $table->string('file')->nullable();
            $table->enum('genre', ['homme', 'femme']);
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
        Schema::dropIfExists('dmrdvs');
    }
};
