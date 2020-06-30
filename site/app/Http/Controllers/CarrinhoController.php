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
    
    public function remover(){
    	$this->middleware('VerifyCsrfToken');

    	$req = Request();
    	$idpedido = $req->input('pedido_id');
    	$idproduto = $req->input('produto_id');
    	$remove_apenas_item = (boolean) $req->input('item');
    	$iduser = Auth::id();

    	$idpedido = Pedido::consultaId([
    		'id' => $idpedido,
    		'user_id' => $iduser,
			'status' => 'R'
    	]);

    	if(empty($idpedido)){
    		$req->session->flash('error', 'Pedido não encontrado!');
    		return redirect()->route('carrinho');
    	}

    	$where_produto = [
    		'pedido_id' => $idpedido,
    		'produto_id' => $idproduto
    	];

    	$produto = PedidoProduto::where($where_produto)->orderBy('id', 'desc')->first();
    	if (empty($produto->id)) {
    		$req->session()->flash('error', 'Produto não encontrado no carrinho!');
    		return redirect()->route('carrinho');
    	}

    	if($remove_apenas_item){
    		$where_produto['id'] = $produto->id;
    	}
    	PedidoProduto::where($where_produto)->delete();

    	$check_pedido = PedidoProduto::where([
    		'pedido_id' => $produto->pedido_id
    	])->exists();

    	if (!$check_pedido) {
    		Pedido::where([
    			'id' => $produto->pedido_id
    		])->delete();
    	}

    	$req->session()->flash('success', 'Produto removido com sucesso!');

    	return redirect()->route('carrinho');
    }
}
