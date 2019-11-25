<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //cria tabelas
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {   //users: nome da tabela //objeto Blueprint: conversa em SQL
            $table->bigIncrements('id');                        //atributos do objeto table //bigIncrement: primary key e auto_increment
            $table->string('name');                             //cada atributo cria uma coluna
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //deleta tabelas
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
