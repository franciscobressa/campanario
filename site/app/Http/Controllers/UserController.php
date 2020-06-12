<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function index()
    {
        $produtos = Produto::all();

        return view('index')->with('produtos', $produtos);
    }
}
