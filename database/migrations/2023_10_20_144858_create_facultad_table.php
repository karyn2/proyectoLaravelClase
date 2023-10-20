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
        Schema::create('facultad', function (Blueprint $table) {
            $table->string('codfacultad',2);
            $table->string('nomfacultad',100);
            $table->timestamps(); //nos dice la hora y la fecvha en la que se hizo la accion.
            $table->primary('codfacultad');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facultad');
    }
};
