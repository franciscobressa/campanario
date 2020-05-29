<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function loja(){
        $categorias = ['Ervas','Cuias','Bombas','Guampas'];

        return view('pages.loja')->with('categorias', $categorias);
    }
}
