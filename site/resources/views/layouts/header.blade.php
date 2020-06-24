<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}}</title>
    <link rel="icon" href="{{ URL::asset('img/favicon.png') }}" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet"> 

</head>
<body>
<header class="fixed-top bg-light">
<nav class="navbar navbar-expand-lg navbar-light justify-content-between top-navbar">
  
<div class="container-idioma" style="display: inline-flex" >
    <ul class="navbar-nav">
      <li class="nav-item" style="margin: 0 10px !important">
          <span class="idioma-social-span" >Idioma </span>
      </li>
    </ul>

   <div class="div-idioma">

      <a href="localhost:8000" class="fill-div">
      <div class="icon" id="portuguese"></div>
      </a>

      <a href="/es/" class="fill-div">
      <div class="icon" id="spanish"></div>
      </a>

    </div>

</div>
   
<div class="container-social" style="display: inline-flex" >
  <ul class="navbar-nav">
    <li class="nav-item" style="margin: 0 10px !important">
      <span class="idioma-social-span" >Redes Sociais</span>
    </li>
  </ul>

    <div class="div-social">
      <a href="https://www.facebook.com/Campanariooficial/" class="fill-div">
        <div class="icon" id="facebook"></div>
      </a>

      <a href="https://www.instagram.com/campanariooficial/" class="fill-div">
       <div class="icon" id="instagram"></div>
      </a>

    </div>
</div>

</nav>

<nav class="navbar navbar-middle navbar-expand-lg  navbar-light"  >
  <div class="container-fluid justify-content-between">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
    </button>
<a href="/">
    <div class="navbar-brand brand-sm mx-auto" href="#">
    </div>
  </a> 
<!-- <div class="menu-box-sm">
            <button data-toggle="collapse" type="button" data-target="#" class="cart-btn">
            <img src="/img/icon/cart.png">
          </button>
    </div> -->

<span class="dropdown-sm">
    @guest
              <div class="dropdown">
                <button class="btn icon-btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{-- <a type="button" data-target="#demo" class="icon-btn " href="/home"><img src="/img/icon/user.png"></a> --}}
                  <img src="/img/icon/user.png">
                </button>
                
                <div class="dropdown-menu dropdown-menu-right text-center p-3 h5" aria-labelledby="dropdownMenuButton">
                  <a class="btn btn-success" type="button" href="/login">Login</a>
                    <div class="mt-3 mb-1"><small class="text-muted">Não tem uma conta?</small></div>
                  <a class="btn btn-secondary" href="/register">Registre-se!</a>
                </div>
              </div>
              @else
              <div class="dropdown">
                <button class="btn icon-btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="/img/icon/cart.png">
                </button>
                
                <div class="dropdown-menu dropdown-menu-right text-center p-3 h5" aria-labelledby="dropdownMenuButton">
                <h5 class="mb-3">{{Auth::user()->name}}</h5> 
                Não há compras no seu carrinho!
                <div class="text-muted">Deseja sair?</div>
                    <a class="btn btn-success mt-1" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>
                </div>
              </div>
                <a data-toggle="collapse" type="button" data-target="#demo" class="icon-btn"></a>

              @endguest

              </span>



        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
          @if (Request::is('loja/*') || Request::path() == 'loja')

            <ul class="navbar-nav">

              <li class="nav-item nav-item-hover my-auto ">
                  <a class="nav-link" href="/">Página Inicial</a>
              </li>

              <li class="nav-item my-auto brand-desk ">
              <a href="/">
                <div class="navbar-brand" href="#">
                </div>  
              </a>         
              </li>
              
              <li class="nav-item nav-item-hover my-auto ">
                <a class="nav-link" href="/loja">Loja</a>
              </li>
            
            </ul>

          </div>
          
            <div class="menu-box menu-box-desk">
              <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
                  <form action="/loja/search" class="searchbar" method="GET">
                    @csrf
                    <input class="search_input" type="text" name="" placeholder="Pesquisar...">
                    <a class="search_icon"><img src="/img/icon/search.png"></a>
                  </form>
                </div>
              </div>
              @guest
              <div class="dropdown">
                <button class="btn icon-btn ml-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{-- <a type="button" data-target="#demo" class="icon-btn ml-4" href="/home"><img src="/img/icon/user.png"></a> --}}
                  <img src="/img/icon/user.png">
                </button>
                
                <div class="dropdown-menu dropdown-menu-right text-center p-3 h5" aria-labelledby="dropdownMenuButton">
                  <a class="btn btn-success" type="button" href="/login">Login</a>
                    <div class="mt-3 mb-1"><small class="text-muted">Não tem uma conta?</small></div>
                  <a class="btn btn-secondary" href="/register">Registre-se!</a>
                </div>
              </div>
              @else
              <div class="dropdown">
                <button class="btn icon-btn ml-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="/img/icon/cart.png">
                </button>
                
                <div class="dropdown-menu dropdown-menu-right text-center p-3 h5" aria-labelledby="dropdownMenuButton">
                  
                  Não há compras no seu carrinho!
                </div>
              </div>
                <a data-toggle="collapse" type="button" data-target="#demo" class="icon-btn"></a>

                <div class="dropdown">
                  <button class="btn icon-btn ml-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <a type="button" data-target="#demo" class="icon-btn ml-4" href="/home"><img src="/img/icon/user.png"></a> --}}
                    <img src="/img/icon/user.png">
                  </button>
                  
                  <div class="dropdown-menu dropdown-menu-right text-center p-3 h5" aria-labelledby="dropdownMenuButton">
                    <h5 class="mb-3">{{Auth::user()->name}}</h5>

                    <div class="text-muted">Deseja sair?</div>
                    <a class="btn btn-danger mt-1" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </div>
              @endguest
            </div>
            
          @else
          <ul class="navbar-nav">

            <li class="nav-item nav-item-hover my-auto ">
                <a class="nav-link link-interno" href="#inicio">Início</a>
            </li>

            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link link-interno" href="#nossa-empresa">Nossa Empresa</a>
            </li>
            <li class="nav-item my-auto brand-desk ">
            <a href="/">
              <div class="navbar-brand" href="#">
              </div>  
            </a>         
            </li>
            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link link-interno" href="#produtos">Produtos</a>
            </li>
            
            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link link-interno" href="#fale-conosco">Fale Conosco</a>
            </li>
          
          </ul>
        </div>
        <div class="menu-box menu-box-desk">
          @guest
          <div class="dropdown">
            <button class="btn icon-btn ml-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <a type="button" data-target="#demo" class="icon-btn ml-4" href="/home"><img src="/img/icon/user.png"></a> --}}
              <img src="/img/icon/user.png">
            </button>
            
            <div class="dropdown-menu dropdown-menu-right text-center p-3 h5" aria-labelledby="dropdownMenuButton">
              <a class="btn btn-success" type="button" href="/login">Login</a>
                <div class="mt-3 mb-1"><small class="text-muted">Não tem uma conta?</small></div>
              <a class="btn btn-secondary" href="/register">Registre-se!</a>
            </div>
          </div>
          @else
          <div class="dropdown">
            <button class="btn icon-btn ml-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <a type="button" data-target="#demo" class="icon-btn ml-4" href="/home"><img src="/img/icon/user.png"></a> --}}
              <img src="/img/icon/user.png">
            </button>
            
            <div class="dropdown-menu dropdown-menu-right text-center p-3 h5" aria-labelledby="dropdownMenuButton">
              <h5 class="mb-3">{{Auth::user()->name}}</h5>

              <div class="text-muted">Deseja sair?</div>
              <a class="btn btn-danger mt-1" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
          @endguest
        
        </div>

          @endif
        
    </div>

 
        
    </nav>
    <form class="row p-0 m-0 search-sm">
        <input class="form-control form-control-lg form-control-borderless col-10" style="width:100%" type="search" placeholder="Pesquisar...">
        <button class="btn col-2 p-2" type="submit"><img style="height:20px"  src="/img/icon/search.png"></button>
</form>
</header>



                      

     

    
      @yield('content')

<script src="{{asset('js/app.js')}}"></script>
</body>