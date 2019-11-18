<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //O laravel já cria o arquivo assim! Aqui não precisa use COntroller pq eles estão no mesmo nível.

    public function viewHome(){
        echo "Estou na Home";
    }
}
