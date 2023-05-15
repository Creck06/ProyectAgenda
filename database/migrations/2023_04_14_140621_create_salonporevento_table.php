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
        Schema::create('salonporevento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ForumMin');
            $table->integer('ForumMax');
            $table->unsignedBigInteger('Id_Mesas');
            $table->unsignedBigInteger('Id_Sillas');
            $table->unsignedBigInteger('Id_Salon');
            $table->unsignedBigInteger('Id_Evento');
            $table->unsignedBigInteger('Id_Distribucion');
            $table->foreign('Id_Mesas')->references('id')->on('tipo_mesa');
            $table->foreign('Id_Sillas')->references('id')->on('tipo_silla');
            $table->foreign('Id_Salon')->references('id')->on('salon');
            $table->foreign('Id_Evento')->references('id')->on('tipo_evento');
            $table->foreign('Id_Distribucion')->references('id')->on('tipo_distribucion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salonporevento');
    }
};
