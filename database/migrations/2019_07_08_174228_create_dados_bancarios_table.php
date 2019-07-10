<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosBancariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_bancarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
        });

        Schema::table('dados_bancarios', function(Blueprint $table) {
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_bancarios');
    }
}
