<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('paciente');
            $table->string('rut',9);
            $table->string('correo');
            $table->string('telefono');
            $table->enum('razon', ['Control', 'Limpieza' , 'Operacion', 'Urgencia']);
            $table->enum('Prevision', ['Fonasa', 'Privada' , 'Ninguna', ]);
            $table->date('fecha');
            $table->text('descripcion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
