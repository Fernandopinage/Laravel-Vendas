<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       //criando a tabela venda
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id_venda');
            $table->unsignedInteger('id_usuario');
            $table->unsignedInteger('id_produto');
            $table->Integer('numero_venda');
            $table->date('dataVenda_venda');
            $table->timestamps();


            //criando a relação de chave estrangeira
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->ondelete('cascade');
            $table->foreign('id_produto')->references('id_produto')->on('produtos')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
