@extends('layouts.header')
@section('content')	
<!--Section: Block Content-->
<section>
<div class="container-fluid mt-2">
@include('layouts.alerts')

</div>	
  <!--Grid row-->
  <div class="row p-3">

    <!--Grid column-->
    <div class="col-lg-8 pr-0">

      <!-- Card -->
      <div class="card wish-list mb-3 ">
        <div class="card-body ">

          <h5 class="mb-4">Seu carrinho</h5>
		@forelse($pedidos as $pedido)
        @php
        $total_pedido = 0;
        @endphp
		@foreach($pedido->pedido_produtos as $pedido_produto)


          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="{{url('storage/produtos/'.$pedido_produto->produto->foto)}}" alt="Sample">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>{{$pedido_produto->produto->nome}}</h5>
                    <p class="mb-3 text-muted text-uppercase small">{{$pedido_produto->produto->descricao}}</p>
					<div >
									<a class="col cursor-pointer" onclick="carrinhoRemoverProduto({{$pedido->id}},{{$pedido_produto->produto_id}}, 1)">-</a>
									<span class="col">{{$pedido_produto->qtd}}</span>
									<a class="col cursor-pointer" onclick="carrinhoAdicionarProduto({{$pedido_produto->produto->id}})">+</a>
								</div>
                  </div>
				  
                  <div>

                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
            		</small>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3" onclick="carrinhoRemoverProduto({{$pedido->id}},{{$pedido_produto->produto_id}}, 0)">
                      <i class="fas fa-trash-alt mr-1" ></i> Remove item </a>
                  </div>
                   
                  <p class="mb-0"><span><strong>R$ {{number_format($pedido_produto->produto->preco, 2, ',', '.')}}</strong></span></p>
                    
                    @php
                    $total_pedido += $pedido_produto->valores;
                    @endphp

                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">

      @endforeach
      
      <form action="{{route('carrinho.adicionar')}}" method="post" id="form-adicionar-produto">
        @csrf
        <input type="hidden" name="id">
      </form>

      <form action="{{route('carrinho.remover')}}" method="post" id="form-remover-produto">
        @csrf
        @method('DELETE')
        <input type="hidden" name="pedido_id">
        <input type="hidden" name="produto_id">
        <input type="hidden" name="item">
      </form>

        </div>
      </div>
      <!-- Card -->



    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="card mb-3">
        <div class="card-body">

          <h5 class="mb-3">Valor Total de</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Produtos
              <span>R$ {{number_format($total_pedido, 2, ',', '.')}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Frete
              <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Valor final</strong>
              </div>
              <span><strong>R$ {{number_format($total_pedido, 2, ',', '.')}}</strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block waves-effect waves-light">Finalizar compra</button>

        </div>
      </div>
</section>
    @empty
        <h5>Não há nenhum pedido no carrinho</h5>
    @endforelse
    <form action="{{route('carrinho.adicionar')}}" method="POST" id="form-adicionar-produto">
     @csrf
     <input type="hidden" name="id">
    </form>
@endsection