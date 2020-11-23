<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('utente_id')->unsigned();
            $table->integer('campanha_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->float('valor')->default(0);
            $table->string('talao');
            $table->enum('status',['pendente','aceita'])->default('pendente');
            $table->foreign('utente_id')
                ->references('id')
                ->on('utentes')
                ->onDelete('cascade');
            $table->foreign('campanha_id')
                ->references('id')
                ->on('campanhas')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('doacaos');
    }
}
