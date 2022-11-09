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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('codigo')->unique();
            $table->string('denominación');
            $table->string('descripción');
            $table->decimal('precio',8,2);
            $table->foreignId('deporte_id')->constrained('deportes');
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->foreignId('marca_id')->constrained('marcas');
            $table->foreignId('tipos_persona_id')->constrained('tipos_personas');
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
        Schema::dropIfExists('productos');
    }
};
