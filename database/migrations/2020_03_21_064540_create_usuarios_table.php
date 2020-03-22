<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo',30);
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->decimal('telefono',15,1);
            $table->decimal('numerocontrol',12,1);
            $table->string('escuelaProcedencia',100);
            $table->string('calle',15);
            $table->string('colonia',30);
            $table->decimal('numExt',13,1);
            $table->decimal('cp');
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
        Schema::dropIfExists('usuarios');
    }
}
