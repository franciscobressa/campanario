@extends('layout.adminHeader')
      
@section('content')

<div class="container-fluid px-5">

    <div class="row">

      <div class="col-lg-2">

        @if (count($categorias) > 0)
            <h1 class="my-4">Categorias</h1>
            @foreach ($categorias as $categoria)
                <div class="list-group">
                    <a href="#" class="list-group-item">{{$categoria->nome}}</a>
                </div>
            @endforeach
        @endif 

      </div>
      <!-- /.col-lg-2 -->

      <div class="col-lg-10 pt-4">
        @include('layout.alerts')

        <a role="button" class="btn btn-success text-white" href="/admin/produtos/create">Adicionar Produto</a>
        <div class="row mt-4">
          
        @if (count($produtos) > 0)
            @foreach ($produtos as $produto)
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/admin/produtos/{{$produto->id}}"><img class="card-img-top" src="{{url('storage/produtos/'.$produto->foto)}}"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/admin/produtos/{{$produto->id}}">{{$produto->nome}}</a>
                  </h4>
                  <h5>R$ {{$produto->preco}}</h5>
                  <p class="card-text">{{$produto->descricao}}</p>
                </div>
              </div>
            </div>
            @endforeach
        @else
        <div class="col-lg-3 col-md-6 mb-4">
            <h2>Não há produtos!</h2>
        </div>
        @endif

      </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-10 -->

    </div>
    <!-- /.row -->

  </div>
  {{-- container-fluid --}}
@endsection