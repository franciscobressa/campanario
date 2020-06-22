<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class PagesController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('index')->with('produtos', $produtos);
    }

    public function loja(){
        $produtos = Produto::paginate(24);
        $categorias = Categoria::all();

        return view('pages.loja', ['produtos' => $produtos], ['categorias' => $categorias]);
    }

    public function search($id){
        return 'sads';
    }
    
    public function shopItem($id){
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        return view('pages.shopitem', ['produto' => $produto], ['categorias' => $categorias]);
    }

    
}
