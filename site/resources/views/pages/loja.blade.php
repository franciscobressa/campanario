@extends('layouts.header')
      
    @section('content')
  @if (session()->has('flash_notification.success')) <div class="alert alert-success">{!! session('flash_notification.success') !!}</div>
@endif

<div class="container-fluid ">
  <div class="row">
     <div class="col-lg-2 categorias-desk">  

       @if (count($categorias) > 0)
       
          <div class="card-header p-2 mt-3" style="background-color:rgb(8, 80, 50)"><h5 class="text-white m-0 p-2" style="font-family: 'Merienda', cursive;">Categorias</h5></div>
            @foreach ($categorias as $categoria)
              <div class="list-group">
                <a href="/loja?categoria={{$categoria->nome}}&id={{$categoria->id}}" class="list-group-item">{{$categoria->nome}}</a>
               </div>
            @endforeach
       @endif 
        
      </div>

      <div class="col-12 p-0 categorias-sm">  

          @if (count($categorias) > 0)
                
  
                <button type="button" style="background-color:rgb(8, 80, 50);width:100%;border-radius:0!important; font-family: 'Merienda', cursive;" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h5 class="text-white m-0 p-2">Categorias</h5>
                </button>
                 <div class="dropdown-menu" style="width:100%" >                           
                    @foreach ($categorias as $categoria)
                    <a class="dropdown-item" href="/loja?categoria={{$categoria->nome}}&id={{$categoria->id}}">{{$categoria->nome}}</a>
                    <div class="dropdown-divider"></div>
                    @endforeach
          @endif 
 
      </div>
</div>
        <div class="col-lg-10">
        
        
                <div class="row mt-3 ">
                @if (isset($_GET['categoria']))
                  @if (count($produtos) > 0)
                    @foreach ($produtos as $produto)
                      @if($produto->id_categoria == $_GET['id'])
                      <div class="col-lg-3 col-md-6 mb-4 produtos-loja">
                        <div class="card h-100">
                          <a href="/loja/{{$produto->id}}"><img class="card-img-top" src="{{url('storage/produtos/'.$produto->foto)}}" alt=""></a>
                          <div class="card-body">
                            <h4 class="card-title produtos-loja">
                              <a href="/loja/{{$produto->id}}">{{$produto->nome}}</a>
                            </h4>
                            <h5 class="produtos-loja">R${{$produto->preco}}</h5>
                            @php
                              if (strlen($produto->descricao) > 150) {
                                $descricao = substr($produto->descricao, 0, 150).'...';
                              }else{
                                $descricao = $produto->descricao;
                              }
                            @endphp
                            <p class="card-text text-justify produtos-loja">{{$descricao}}</p>
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
                            <h4 class="card-title produtos-loja">
                              <a href="/loja/{{$produto->id}}">{{$produto->nome}}</a>
                            </h4>
                            <h5 class="produtos-loja">R${{$produto->preco}}</h5>
                            @php
                              if (strlen($produto->descricao) > 150) {
                                $descricao = substr($produto->descricao, 0, 150).'...';
                              }else{
                                $descricao = $produto->descricao;
                              }
                            @endphp
                            <p class="card-text text-justify produtos-loja">{{$descricao}}</p>
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


