<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    
    public function up()
    {
        //craiaçao da tabela usuario
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nome_usuario');
            $table->string('senha_usuario');
            $table->string('email_usuario');
            $table->string('cep_usuario');
            $table->string('rua_usuario');
            $table->string('bairro_usuario');
            $table->string('cidade_usuario');
            $table->string('estado_usuario');
            $table->date('dataCriacao_usuario');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
