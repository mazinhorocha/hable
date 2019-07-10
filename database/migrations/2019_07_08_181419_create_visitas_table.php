<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('data')->nullable(false);
            $table->string('lat');
            $table->string('lon');
            $table->enum('status',['0', '1']);
            $table->unsignedBigInteger('condominio_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
        });

        Schema::table('visitas', function(Blueprint $table) {
            $table->foreign('condominio_id')->references('id')->on('condominios');
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
        Schema::dropIfExists('visitas');
    }
}
