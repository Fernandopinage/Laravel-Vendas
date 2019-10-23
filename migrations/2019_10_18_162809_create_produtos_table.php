<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       //criação da tabela produto
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            
            $table->string('nome_produto');
            $table->Integer('preco_produto');
            $table->Integer('quantidade_produto');
            $table->date('dataCriacao_produto');
            $table->date('dataAlteracao_produto');
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
        Schema::dropIfExists('produtos');
    }
}
