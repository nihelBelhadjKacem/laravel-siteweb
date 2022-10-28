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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nom')->nullable();
            $table->date('date_naiss');
            $table->string('email')->unique();
            $table->string('tel');
            $table->enum('role',['infirmier','admin','patient'])->default('patient');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('genre', ['homme', 'femme']);
            $table->rememberToken();
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
        Schema::dropIfExists('patients');
    }
};
