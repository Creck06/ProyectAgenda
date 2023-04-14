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
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Fecha');
            $table->integer('Num_Invitados');
            $table->integer('Id_Usuario');
            $table->integer('Id_SalonPorEvento');
            $table->integer('Id_Estado');
            $table->foreign('Id_Usuario')->references('id')->on('usuario');
            $table->foreign('Id_SalonPorEvento')->references('id')->on('salonporevento');
            $table->foreign('Id_Estado')->references('id')->on('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
