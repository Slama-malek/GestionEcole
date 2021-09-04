<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelcamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message');
            $table->string('email');
            $table->string('nom_e');
            $table->string('prenom_e');
            $table->string('nom_p');
            $table->string('prenom_p');
            $table->string('tel');
            $table->string('sujet');
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
        Schema::dropIfExists('relcams');
    }
}
