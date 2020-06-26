@extends('layouts.header')
@section('content')	
<div class="container p-1">
		@include('layouts.alerts')
			<h3>Produtos no Carrinho</h3>
			<hr/>
			@forelse($pedidos as $pedido)
				<h5>Pedido: {{$pedido->id}}</h5>
				<h5>Criado em: {{$pedido->created_at->format('d/m/Y H:i')}}</h5>

				<table>
					<thead>
						<tr>
							<th></th>
							<th>Quantidade</th>
							<th>Produto</th>
							<th>Valor Unitário</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						@php
							$total_pedido = 0;
						@endphp
						@foreach($pedido->pedido_produtos as $pedido_produto)
						<tr>
							<td>
								<img width="100" height="100" src="{{url('storage/produtos/'.$pedido_produto->produto->foto)}}">
							</td>
							<td class="center-align">
								<div class="center-align">
									<a class="col">-</a>
									<span class="col">{{$pedido_produto->qtd}}</span>
									<a class="col cursor-pointer" onclick="carrinhoAdicionarProduto({{$pedido_produto->produto->id}})">+</a>
								</div>
								<a class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?">Retirar produto</a>
							</td>
							<td>{{$pedido_produto->produto->nome}}</td>
							<td>R$ {{number_format($pedido_produto->produto->preco, 2, ',', '.')}}</td>
							@php
								$total_pedido += $pedido_produto->valores;
							@endphp
							<td>R$ {{number_format($pedido_produto->valores, 2, ',', '.')}}</td>	
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="row">
					<strong >Total do pedido: </strong>
					<span >R$ {{number_format($total_pedido, 2, ',', '.')}}</span>
				</div>
				<div class="row">
					<a href="{{route('loja')}}" class="offset-lg-6 btn btn-success text-white">Continuar comprando</a>
				</div>
			@empty
				<h5>Não há nenhum pedido no carrinho</h5>
			@endforelse
	</div>

	<form action="{{route('carrinho.adicionar')}}" method="POST" id="form-adicionar-produto">
		@csrf
		<input type="hidden" name="id">
	</form>
@endsection