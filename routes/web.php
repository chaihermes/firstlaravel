<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// $route = new Route(); essa é a mesma forma de usar a rota, mas aqui se cria objetos. Na de baixo não se cria tantos objetos.

// $route-> get();

Route::get('/', function () { // o primeiro parâmetro é o que o usuário digita, o segundo é uma função anônima (funções que não tem nome). Nesse caso retorna a view.
    return view('welcome');
});


Route::get('formulario', 'HomeController@exibirFormulario');    //quando for visualizar o formulário, vai pra esse método do controller.

//criando nova rota POST pro formulario
Route::post('/formulario', 'HomeController@cadastrarFormulario');


Route::get('/request/id/{abc?}', 'HomeController@request');   //{abc} é um parâmetro id. O request engloba GET, POST, todas as informações. ? significa que a rota pode receber o parâmetro, não necessariamente deve receber um parâmetro.

Route::get('/home', 'HomeController@viewHome');  //quando o usuário digitar home, a rota é HomeController na função viewHome, criada em HomeController. O @ é pra determinar qual método será usado.

Route::get('/cidade', 'CidadeController@viewCidade'); //(1)