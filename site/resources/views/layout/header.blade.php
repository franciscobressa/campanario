<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}}</title>
    <link rel="icon" href="{{ URL::asset('img/favicon.png') }}" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 

</head>
<body>
<header class="fixed-top bg-light">
<nav class="navbar navbar-expand-lg navbar-light justify-content-between top-navbar">
  
<div class="container-idioma" style="display: inline-flex" >
    <ul class="navbar-nav">
      <li class="nav-item" style="margin: 0 10px !important">
          <span >Idioma </span>
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
      <span >Redes Sociais</span>
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

<nav class="navbar navbar-expand-lg  navbar-light" >
  <div class="container-fluid">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-brand brand-sm" href="#">
    </div>
      
        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item nav-item-hover my-auto ">
           </li>
            <li class="nav-item nav-item-hover my-auto ">
                <a class="nav-link link-interno" href="#inicio">Início</a>
            </li>

            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link link-interno" href="#nossa-empresa">Nossa Empresa</a>
            </li>
            <li class="nav-item my-auto brand-desk ">
              <div class="navbar-brand" href="#">
              </div>           
            </li>
            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link link-interno" href="#produtos">Produtos</a>
            </li>
            
            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link link-interno" href="#fale-conosco">Fale Conosco</a>
            </li>
            <li class="nav-item nav-item-hover my-auto ">
            </li>
          
          </ul>
        
        </div>

        <div class="menu-box">
          <div class="search-box">
            <form>
              <input type="text" class="search-input" placeholder="Pesquisar...">

              <a type="submit" class="search-btn" href="#" >
                <img src="/img/icon/search.png">
              </a>
            </form>
          </div>
          <a class="cart-btn">
            <img src="/img/icon/cart.png">
          </a>
        </div>

          </div>
        
      </nav>

      <nav class="navbar navbar-bottom"></nav>
    </header>
    
      @yield('content')

     <script src="{{asset('js/app.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
