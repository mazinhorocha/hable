<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('fone1');
            $table->string('fone2');
            $table->string('obs');
            $table->string('validacao');
            $table->enum('status',['0', '1', '2'])->nullable(false);
            $table->string('cpf_indicador')->nullable(false);
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
        });

        Schema::table('indicacoes', function(Blueprint $table) {
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
        Schema::dropIfExists('indicacoes');
    }
}
