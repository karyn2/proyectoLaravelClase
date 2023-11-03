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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->string('codestudiante',4);
            $table->string('nomestudiante',30);
            $table->integer('edaestudiante');
            $table->date('fechestudiante');
            $table->string('sexestudiante',1);
            $table->string('ciudad',5);
            $table->string('barrio',3);
            $table->string('programa',2);
            $table->primary('codestudiante');
            $table->foreign('ciudad')->references('codciudad')->on('ciudad');
            $table->foreign('barrio')->references('codbarrio')->on('barrio');
            $table->foreign('programa')->references('codprograma')->on('programa');
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
        Schema::dropIfExists('estudiante');
    }
};
