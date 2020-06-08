<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function admin(){
        return view('pages.admin.admin');
    }

    public function adminProdutos(){
        return view('pages.admin.produtos');
    }

    public function loja(){
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('pages.loja', ['produtos' => $produtos], ['categorias' => $categorias]);
    }
}
