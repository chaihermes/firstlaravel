<?php

namespace App;

use Illuminate\Database\Eloquent\Model; //eloquent = ORM.

class Usuario extends Model
{
    //o eloquent já entende que Usuario tem uma tabela no banco de dados chamada usuarios. Ele acresenta o S.
    //Assim não precisa dizer que a tabela se chama usuarios.
    //Também não precisa criar os métodos. Ele já entende.
    //Geralmente fica vazio.
}
