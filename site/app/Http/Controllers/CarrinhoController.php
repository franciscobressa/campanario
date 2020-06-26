<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PedidoProduto;
use App\Pedido;
use App\Produto;

class CarrinhoController extends Controller
{
	function _construct(){
		$this->middleware('auth');
	}

    public function index(){
    	$pedidos = Pedido::where([
    		'status' => 'R',
    		'user_id' => Auth::id()
    	])->get();

    	return view('pages.carrinho')->with('pedidos', $pedidos);

    	// dd([
    	// $pedidos,
    	// $pedidos[0]->pedido_produtos,
    	// $pedidos[0]->pedido_produtos[0]->produto
    	// ]);
    }

	public function adicionar(){
		$this->middleware('VerifyCsrfToken');
		$req = Request();

		$idproduto = $req->input('id');
		
		$produto = Produto::find($idproduto);
		if (empty($produto->id)) {
			$req->session()->flash('error', 'Produto não encontrado em nossa loja');
			return redirect('carrinho');
		}

		$iduser = Auth::id();

		$idpedido = Pedido::consultaId([
			'user_id' => $iduser,
			'status' => 'R'
		]);

		if (empty($idpedido)) {
			$pedido_novo = Pedido::create([
				'user_id' => $iduser,
				'status' => 'R'
			]);

			$idpedido = $pedido_novo->id;
		}

		PedidoProduto::create([
			'pedido_id' => $idpedido,
			'produto_id' => $idproduto,
			'valor' => $produto->preco,
			'status' => 'R'
		]);

		
		$req->session()->flash('success', 'Produto adicionado ao carrinho com sucesso!');
		
		return redirect()->route('carrinho');
	}
    
}
