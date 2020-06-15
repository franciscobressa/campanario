@extends('layouts.adminlayout')
      
@section('content')

<div class="container-fluid px-5">

    <div class="row">

      <div class="col-lg-10 pt-4">
        @include('layouts.alerts')
        <a role="button" class="btn btn-success text-white" href="/admin/produtos/create">Cadastrar Novo Produto</a>
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
                  @php
                    if (strlen($produto->descricao) > 150) {
                      $descricao = substr($produto->descricao, 0, 150).'...';
                    }else{
                      $descricao = $produto->descricao;
                    }
                  @endphp
                  <p class="card-text text-justify">{{$descricao}}</p>
                </div>
                <div class="p-3">
                  <a href="/admin/produtos/{{$produto->id}}/edit" type="button" class="btn btn-warning text-white">Editar</a> 
                 
                  {!! Form::open(['action' => ['ProdutosController@destroy', $produto->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Excluir', ['class' => 'btn btn-danger text-white', 'id' => 'myalert'])}}
                  {!! Form::close() !!}
                </div>
              </div>
              
            </div>
            @endforeach
        @else
        <div class="col-lg-8 col-md-6 mb-4">
            <h2>Não há produtos cadastrados!</h2>
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