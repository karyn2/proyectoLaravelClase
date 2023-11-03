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
        Schema::create('regnotas', function (Blueprint $table) {
            $table->string('estudiante',4);
            $table->string('materia',2);
            $table->string('profesor',2);
            $table->decimal('parcial1',  5, 2)->unsigned();
            $table->decimal('parcial2', 5, 2)->unsigned();
            $table->decimal('efinal', 5, 2)->unsigned();
            $table->decimal('nfinal', 5, 2)->unsigned();
            $table->char('estado', 1);
            $table->timestamps();
            $table->foreign('estudiante')->references('codestudiante')->on('estudiante');
            $table->foreign('materia')->references('codmateria')->on('materia');
            $table->foreign('profesor')->references('codprofesor')->on('profesor');
            $table->primary(['estudiante', 'materia', 'profesor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regnotas');
    }
};
