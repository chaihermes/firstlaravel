<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;  //representa o banco de dados

class CriandoProdutosTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function(Blueprint $table){    //recebe 2 parâmetros: nome da tabela e uma função anônima (que gera o objeto Blueprint)
            $table->bigIncrements('id');    //com o Blueprint, podemos criar as colunas, ele fornece os métodos que geram as colunas, o bigIncrement, string...
            $table->string('nome');    //o segundo parâmentro é pra restringir o número de caracteres. O padrão é cerca de 700 caracteres.
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');       //aqui é pra se precisar deletar a tabela.
    }
}
