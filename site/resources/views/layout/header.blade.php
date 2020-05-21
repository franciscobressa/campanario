<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>{{config('app.name')}}</title>
    <link rel="icon" href="{{ URL::asset('img/favicon.png') }}" type="image/x-icon"/>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light justify-content-between top-navbar">
  <!-- <a href="https://www.instagram.com/campanariooficial/?hl=pt-br"><div class="btn-instagram"></div></a> -->
  <div class="navbar">vou colocar uns icones de acessibilidade aqui</div>
  <div class="navbar" style="">
    <div class="btn-shop"></div>
    <div class="btn-user"></div>
  </div>

</nav>

<nav class="navbar navbar-expand-lg navbar-light" >
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-brand" href="#">
      </div>
      
      
          
     
        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
          <ul class="navbar-nav">

           

            <li class="nav-item ">
                <a class="nav-link" href="#">Página Inicial</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="#">Produtos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Fale Conosco</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre Nós</a>
            </li>
          
          </ul>
    
          
  
          

          
        
        </div>

        <form class="form-inline" id="searchsm">
              <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>


          </div>
        
      </nav>

      <nav class="navbar navbar-bottom " >
    

      <li class="nav-item" id="search">
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                
                </input>
              </form>
            </li>
          
      </nav>
    
      @yield('content')

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>