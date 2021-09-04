<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatiereClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mat_id');
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('coef_id');

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
        Schema::dropIfExists('matiere_classes');
    }
}
