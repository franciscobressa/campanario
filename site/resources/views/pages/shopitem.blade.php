@extends('layouts.header')

@section('content')
    
<div class="container-fluid">

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
      <!-- /.col-lg-3 -->

      <div class="col-lg-10 ">

        <div class="card mt-3 p-2">
         <div class="row">
           <div class="col-lg-7 col-md-7 col-sm-7 col-12 ">
          <img class="card-img-top img-fluid " src="{{url('storage/produtos/'.$produto->foto)}}">
          </div>
          <div class="card-body produtos-loja col-lg-5 col-md-5 col-sm-5 col-12 mt-3">
            <h3 class="card-title ">{{$produto->nome}}</h3>
            <h4>R${{number_format($produto->preco, 2, ',', '.')}}</h4>
            <p class="card-text">{{$produto->descricao}}</p>
            @guest
          <form action="/login" method="GET">
            <button class="btn btn-success mt-2 float-right">Adicionar ao carrinho <i class="fa fa-cart-plus" aria-hidden="true"></i></button>
          </form>
          @else
          <form action="{{route('carrinho.adicionar')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$produto->id}}">
            <button class="btn btn-success  mt-2 float-right">Adicionar ao carrinho <i class="fa fa-cart-plus" aria-hidden="true"></i></button>
          </form>
          @endguest
          </div>

        </div>
        
        
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  @endsection
