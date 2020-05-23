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

<nav class="navbar navbar-expand-lg navbar-light" >
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
                <a class="nav-link" href="#">Página Inicial</a>
            </li>

            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link" href="#">Produtos</a>
            </li>
            <li class="nav-item my-auto brand-desk ">
              <div class="navbar-brand" href="#">
              </div>           
            </li>
            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link" href="#">Fale Conosco</a>
            </li>
            
            <li class="nav-item nav-item-hover my-auto ">
              <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <li class="nav-item nav-item-hover my-auto ">
            </li>
          
          </ul>
        
        </div>

        <div class="search-box">
          <form class="form-inline" id="searchsm">
                <input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Search">
                <a class="search-btn" href="#" >
                    <img  src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3OC4yMDggNDc4LjIwOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc4LjIwOCA0NzguMjA4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDczLjQxOCw0NDkuMjg1TDMwMy4yOCwyNzkuMTQ4YzU5Ljc1OS03My4wODcsNDguOTU0LTE4MC43NzktMjQuMTMyLTI0MC41MzhTOTguMzY5LTEwLjM0NCwzOC42MSw2Mi43NDIgICAgUy0xMC4zNDQsMjQzLjUyMSw2Mi43NDIsMzAzLjI4YzYyLjk1Myw1MS40NzMsMTUzLjQ1Myw1MS40NzMsMjE2LjQwNiwwbDE3MC4xMzgsMTcwLjEzOGM2Ljc4LDYuNTQ4LDE3LjU4NCw2LjM2LDI0LjEzMi0wLjQyICAgIEM0NzkuODA1LDQ2Ni4zODQsNDc5LjgwNSw0NTUuODk5LDQ3My40MTgsNDQ5LjI4NXogTTE3MS4yMTgsMzA3Ljc1MWMtNzUuMzctMC4wODUtMTM2LjQ0OS02MS4xNjMtMTM2LjUzMy0xMzYuNTMzICAgIGMwLTc1LjQwNSw2MS4xMjgtMTM2LjUzMywxMzYuNTMzLTEzNi41MzNzMTM2LjUzMyw2MS4xMjgsMTM2LjUzMywxMzYuNTMzUzI0Ni42MjMsMzA3Ljc1MSwxNzEuMjE4LDMwNy43NTF6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                </a>
          </form>
        </div>

          </div>
        
      </nav>

      <nav class="navbar navbar-bottom " >
          
      </nav>
    
      @yield('content')

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>