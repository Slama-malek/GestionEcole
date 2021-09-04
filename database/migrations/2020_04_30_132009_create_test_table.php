<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('lieu_naiss');
            $table->date('date_naiss');
            $table->string('nom_p');
            $table->string('nom_m');
            $table->string('prenom_p');
            $table->string('prenom_m');
            $table->string('add_p');
            $table->string('add_m');
            $table->integer('tel_p');
            $table->integer('tel_m');
            $table->integer('gsm_p');
            $table->integer('gsm_m');
            $table->string('profession_p');
            $table->string('profession_m');
            $table->string('email_p');
            $table->string('email_m');
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
        Schema::dropIfExists('test');
    }
}
