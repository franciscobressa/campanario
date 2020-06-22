@extends('layouts.header')
      
    @section('content')
  @if (session()->has('flash_notification.success')) <div class="alert alert-success">{!! session('flash_notification.success') !!}</div>
@endif
        <div class="container-fluid px-5">

            <div class="row">

              <div class="col-lg-2">
        
                @if (count($categorias) > 0)
                <div class="card-header p-2 mt-3" style="background-color:rgb(8, 80, 50)"><h5 class="text-white">Categorias</h5></div>

                    @foreach ($categorias as $categoria)
                        <div class="list-group">
                            <a href="/loja?categoria={{$categoria->nome}}&id={{$categoria->id}}" class="list-group-item">{{$categoria->nome}}</a>
                        </div>
                    @endforeach
                @endif 
        
              </div>
              <!-- /.col-lg-3 -->
        
              <div class="col-lg-10">
        
        
                <div class="row mt-4">
                @if (isset($_GET['categoria']))
                  @if (count($produtos) > 0)
                    @foreach ($produtos as $produto)
                      @if($produto->id_categoria == $_GET['id'])
                      <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                          <a href="/loja/{{$produto->id}}"><img class="card-img-top" src="{{url('storage/produtos/'.$produto->foto)}}" alt=""></a>
                          <div class="card-body">
                            <h4 class="card-title">
                              <a href="/loja/{{$produto->id}}">{{$produto->nome}}</a>
                            </h4>
                            <h5>R${{$produto->preco}}</h5>
                            @php
                              if (strlen($produto->descricao) > 150) {
                                $descricao = substr($produto->descricao, 0, 150).'...';
                              }else{
                                $descricao = $produto->descricao;
                              }
                            @endphp
                            <p class="card-text text-justify">{{$descricao}}</p>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                  @else
                      <h2>Não há produtos cadastrados!</h2>
                  @endif
                @else
                  @if (count($produtos) > 0)
                      @foreach ($produtos as $produto)
                      <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                          <a href="/loja/{{$produto->id}}"><img class="card-img-top" src="{{url('storage/produtos/'.$produto->foto)}}" alt=""></a>
                          <div class="card-body">
                            <h4 class="card-title">
                              <a href="/loja/{{$produto->id}}">{{$produto->nome}}</a>
                            </h4>
                            <h5>R${{$produto->preco}}</h5>
                            @php
                              if (strlen($produto->descricao) > 150) {
                                $descricao = substr($produto->descricao, 0, 150).'...';
                              }else{
                                $descricao = $produto->descricao;
                              }
                            @endphp
                            <p class="card-text text-justify">{{$descricao}}</p>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                  @else
                      <h2>Não há produtos cadastrados!</h2>
                  @endif
                @endif
                </div><!-- /.row -->
                <div class="paginate">{{$produtos->links()}} </div>
        
              </div>
              <!-- /.col-lg-9 -->
        
            </div>
            <!-- /.row -->
        
          </div>
    @endsection


