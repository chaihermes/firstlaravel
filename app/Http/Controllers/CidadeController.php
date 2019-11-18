<?php

namespace App\Http\Controllers;

use App\Cidade; //(6) tem que linkar aqui (importar).

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    //(2) php artisan make:controller CidadeController pra criar esse controller.
    //aqui cria o método viewCidades.
    public function viewCidade(){ //(7)cria a função
        $listaCidades = Cidade::all();

        return view('cidade',["listaCidades"=>$listaCidades]);
    }
}
