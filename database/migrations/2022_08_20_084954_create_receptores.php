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
        Schema::create('receptores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_emisor');
$table->unsignedBigInteger('id_servicio');
$table->unsignedBigInteger('id_usuario');
$table->string('descripcion',105);
$table->integer('status');
$table->foreign('id_usuario')->references('id')->on('users');
$table->foreign('id_servicio')->references('id')->on('servicios');
$table->foreign('id_emisor')->references('id')->on('emisores');
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
        Schema::dropIfExists('receptores');
    }
};
