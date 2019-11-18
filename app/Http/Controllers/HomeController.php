<?php

namespace App\Http\Controllers;

use App\Usuario;        //importou essa classe pra esse arquivo.

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //O laravel já cria o arquivo assim! Aqui não precisa use COntroller pq eles estão no mesmo nível.

    public function viewHome(){
        // return view('home');  //aqui está linkando com a home da view.
        //$usuario = new Usuario();
        //$listaUsuarios = $usuario->all();       //lista todos os dados da tabela usuarios. 
        //O all funciona como o fetchAll->obj 
        //dd($listaUsuarios);         //parecido com o var_dump, só que facilita a visualização.


        $listaUsuarios = Usuario::all(); //assim é a mesma coisa que instanciar um objeto e depois fazer o all, apenas em uma linha.

        return view('home',["listaUsuarios"=>$listaUsuarios]); //está mandando pra view a lista de usuarios. Na home.blade.php vamos fazer um foreach pra listar todos os usuários cadastrados no banco. 
    }
}
