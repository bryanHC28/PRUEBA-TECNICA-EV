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
        Schema::create('emisores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
$table->unsignedBigInteger('id_servicio');
$table->string('descripcion',105);
$table->integer('status');
$table->foreign('id_usuario')->references('id')->on('users');
$table->foreign('id_servicio')->references('id')->on('servicios');
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
        Schema::dropIfExists('emisores');
    }
};
