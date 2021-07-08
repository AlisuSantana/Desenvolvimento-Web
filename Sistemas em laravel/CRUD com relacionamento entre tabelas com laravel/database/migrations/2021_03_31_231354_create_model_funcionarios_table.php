<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_funcionario', function (Blueprint $table) {
            $table->increments('cd_funcionario');
            $table->string('nm_funcionario');
            $table->integer('cd_departamento')->unsigned();
            $table->foreign('cd_departamento')->references('cd_departamento')->on('tb_departamento')->onDelete('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tb_funcionario');
    }
}
