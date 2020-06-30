<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\Imagens;

class PagesController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $imagens = Imagens::all();

        return view('index', compact('imagens'))->with('produtos', $produtos);
    }

    public function loja(){
        $produtos = Produto::paginate(24);
        $categorias = Categoria::all();
        $imagens = Imagens::all();

        return view('pages.loja', ['produtos' => $produtos], ['categorias' => $categorias])->with(compact('imagens'));
    }
    
    public function shopItem($id){
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        $imagens = Imagens::all();

        return view('pages.shopitem', ['produto' => $produto], ['categorias' => $categorias])->with(compact('imagens'));
    }

    
}
