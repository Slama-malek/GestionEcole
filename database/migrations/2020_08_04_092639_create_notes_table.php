<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id_n');
            $table->unsignedBigInteger('mat_id');
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('groupe_id');
            $table->unsignedBigInteger('coef_id');
            $table->unsignedBigInteger('eleve_id');
            $table->unsignedBigInteger('ens_id');
            $table->boolean('valid')->nullable()->default(false);
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
        Schema::dropIfExists('notes');
    }
}
