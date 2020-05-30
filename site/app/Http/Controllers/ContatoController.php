<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmail; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviaContato(Request $request){
        Mail::to('loja@campanario.ind.br')->send(new ContatoEmail($request));
        return view('index');
    }
}
