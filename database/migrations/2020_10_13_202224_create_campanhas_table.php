<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanhas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->string('titulo');
            $table->string('objectivo');
            $table->string('categoria');
            $table->string('ndi');
            $table->text('descricao');
            $table->string('provincia');
            $table->string('doc_identificacao');
            $table->string('imagem');
            $table->enum('status',['pendente','aceito','terminado'])->default('pendente');
            $table->double('valor_esperado',14,2);
            $table->double('valor_arrecadado',14,2)->default(0);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('admin_id')
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
        Schema::dropIfExists('campanhas');
    }
}