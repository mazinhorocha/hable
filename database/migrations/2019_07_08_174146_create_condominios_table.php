<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cep');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('sindico');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
        });

        Schema::table('condominios', function(Blueprint $table) {
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
        Schema::dropIfExists('condominios');
    }
}
