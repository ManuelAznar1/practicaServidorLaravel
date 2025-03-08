<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('nombre'); // Nombre del profesor
            $table->string('apellido'); // Apellido del profesor
            $table->string('email')->unique(); // Correo único
            $table->string('telefono')->nullable(); // Teléfono opcional
            $table->date('fecha_nacimiento')->nullable(); // Fecha de nacimiento opcional
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesores');
    }
};
