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
        Schema::create('computadores', function (Blueprint $table) {
            $table->integer('ID_Portatilesp', true);
            $table->string('Tag', 200);
            $table->string('Modelo', 200);
            $table->integer('Inventario');
            $table->string('Especificaciones', 200);
            $table->string('Carrera', 200);
            $table->foreignId('id_users')->constrained('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('id_estado')->constrained('estados')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('computadores');
    }
};
