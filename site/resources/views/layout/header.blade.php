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
  {{-- <!-- <a href="https://www.instagram.com/campanariooficial/?hl=pt-br"><div class="btn-instagram"></div></a> -->
  <div class="navbar">vou colocar uns icones de acessibilidade aqui</div>
  <div class="navbar" style="">
    <div class="btn-shop"></div>
    <div class="btn-user"></div>
  </div> --}}

  <div class="container-idioma" style="display: inline-flex" >
    <ul class="navbar-nav">
      <li class="nav-item" style="margin: 0 10px !important">
    <span >Idioma </span>
      </li>
    </ul>
  <div class="div-idioma">
  
  <img class="idioma" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGNpcmNsZSBzdHlsZT0iZmlsbDojNkRBNTQ0OyIgY3g9IjI1NiIgY3k9IjI1NiIgcj0iMjU2Ii8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNGRkRBNDQ7IiBwb2ludHM9IjI1NiwxMDAuMTc0IDQ2Ny40NzgsMjU2IDI1Niw0MTEuODI2IDQ0LjUyMiwyNTYgIi8+CjxjaXJjbGUgc3R5bGU9ImZpbGw6I0YwRjBGMDsiIGN4PSIyNTYiIGN5PSIyNTYiIHI9Ijg5LjA0MyIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwMDUyQjQ7IiBkPSJNMjExLjQ3OCwyNTAuNDM1Yy0xNS40ODQsMC0zMC40MjcsMi4zNTUtNDQuNDkzLDYuNzI1YzAuNjIzLDQ4LjY0LDQwLjIyNyw4Ny44ODQsODkuMDE1LDg3Ljg4NCAgIGMzMC4xNjgsMCw1Ni44MTItMTUuMDE3LDcyLjkxOS0zNy45NjhDMzAxLjM2MiwyNzIuNTc5LDI1OC45NjEsMjUwLjQzNSwyMTEuNDc4LDI1MC40MzV6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDA1MkI0OyIgZD0iTTM0My4zOTMsMjczLjA2YzEuMDcyLTUuNTI0LDEuNjUxLTExLjIyMywxLjY1MS0xNy4wNmMwLTQ5LjE3OC0zOS44NjYtODkuMDQzLTg5LjA0My04OS4wNDMgICBjLTM2LjY5NCwwLTY4LjE5NCwyMi4yMDEtODEuODI2LDUzLjg5OWMxMi4wNS0yLjQ5NywyNC41MjYtMy44MTIsMzcuMzA1LTMuODEyQzI2My4xOTcsMjE3LjA0MywzMDkuOTgzLDIzOC41NDEsMzQzLjM5MywyNzMuMDZ6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
  <img class="idioma" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGREE0NDsiIGQ9Ik0wLDI1NmMwLDMxLjMxNCw1LjYzMyw2MS4zMSwxNS45MjMsODkuMDQzTDI1NiwzNjcuMzA0bDI0MC4wNzctMjIuMjYxICBDNTA2LjM2NywzMTcuMzEsNTEyLDI4Ny4zMTQsNTEyLDI1NnMtNS42MzMtNjEuMzEtMTUuOTIzLTg5LjA0M0wyNTYsMTQ0LjY5NkwxNS45MjMsMTY2Ljk1N0M1LjYzMywxOTQuNjksMCwyMjQuNjg2LDAsMjU2eiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNEODAwMjc7IiBkPSJNNDk2LjA3NywxNjYuOTU3QzQ1OS45MDYsNjkuNDczLDM2Ni4wNzEsMCwyNTYsMFM1Mi4wOTQsNjkuNDczLDE1LjkyMywxNjYuOTU3SDQ5Ni4wNzd6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRDgwMDI3OyIgZD0iTTE1LjkyMywzNDUuMDQzQzUyLjA5NCw0NDIuNTI3LDE0NS45MjksNTEyLDI1Niw1MTJzMjAzLjkwNi02OS40NzMsMjQwLjA3Ny0xNjYuOTU3SDE1LjkyM3oiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
</div>
</div>
  
  <div class="container-social" style="display: inline-flex" >
    <ul class="navbar-nav">
      <li class="nav-item" style="margin: 0 10px !important">
    <span >Redes Sociais    </span>
      </li>
    </ul>
  <div class="div-social">
  
  <img  class="social" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNCAyNCIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDI0IDI0IiB3aWR0aD0iNTEycHgiPjxwYXRoIGQ9Im0yMSAwaC0xOGMtMS42NTUgMC0zIDEuMzQ1LTMgM3YxOGMwIDEuNjU0IDEuMzQ1IDMgMyAzaDE4YzEuNjU0IDAgMy0xLjM0NiAzLTN2LTE4YzAtMS42NTUtMS4zNDYtMy0zLTN6IiBmaWxsPSIjM2I1OTk5Ii8+PHBhdGggZD0ibTE2LjUgMTJ2LTNjMC0uODI4LjY3Mi0uNzUgMS41LS43NWgxLjV2LTMuNzVoLTNjLTIuNDg2IDAtNC41IDIuMDE0LTQuNSA0LjV2M2gtM3YzLjc1aDN2OC4yNWg0LjV2LTguMjVoMi4yNWwxLjUtMy43NXoiIGZpbGw9IiNmZmYiLz48L3N2Zz4K" />
  <img  class="social" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjQgMjQiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjUxMnB4Ij48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDAgLTEuOTgyIC0xLjg0NCAwIC0xMzIuNTIyIC01MS4wNzcpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ii0zNy4xMDYiIHgyPSItMjYuNTU1IiB5MT0iLTcyLjcwNSIgeTI9Ii04NC4wNDciPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI2ZkNSIvPjxzdG9wIG9mZnNldD0iLjUiIHN0b3AtY29sb3I9IiNmZjU0M2UiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNjODM3YWIiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGQ9Im0xLjUgMS42MzNjLTEuODg2IDEuOTU5LTEuNSA0LjA0LTEuNSAxMC4zNjIgMCA1LjI1LS45MTYgMTAuNTEzIDMuODc4IDExLjc1MiAxLjQ5Ny4zODUgMTQuNzYxLjM4NSAxNi4yNTYtLjAwMiAxLjk5Ni0uNTE1IDMuNjItMi4xMzQgMy44NDItNC45NTcuMDMxLS4zOTQuMDMxLTEzLjE4NS0uMDAxLTEzLjU4Ny0uMjM2LTMuMDA3LTIuMDg3LTQuNzQtNC41MjYtNS4wOTEtLjU1OS0uMDgxLS42NzEtLjEwNS0zLjUzOS0uMTEtMTAuMTczLjAwNS0xMi40MDMtLjQ0OC0xNC40MSAxLjYzM3oiIGZpbGw9InVybCgjU1ZHSURfMV8pIi8+PHBhdGggZD0ibTExLjk5OCAzLjEzOWMtMy42MzEgMC03LjA3OS0uMzIzLTguMzk2IDMuMDU3LS41NDQgMS4zOTYtLjQ2NSAzLjIwOS0uNDY1IDUuODA1IDAgMi4yNzgtLjA3MyA0LjQxOS40NjUgNS44MDQgMS4zMTQgMy4zODIgNC43OSAzLjA1OCA4LjM5NCAzLjA1OCAzLjQ3NyAwIDcuMDYyLjM2MiA4LjM5NS0zLjA1OC41NDUtMS40MS40NjUtMy4xOTYuNDY1LTUuODA0IDAtMy40NjIuMTkxLTUuNjk3LTEuNDg4LTcuMzc1LTEuNy0xLjctMy45OTktMS40ODctNy4zNzQtMS40ODd6bS0uNzk0IDEuNTk3YzcuNTc0LS4wMTIgOC41MzgtLjg1NCA4LjAwNiAxMC44NDMtLjE4OSA0LjEzNy0zLjMzOSAzLjY4My03LjIxMSAzLjY4My03LjA2IDAtNy4yNjMtLjIwMi03LjI2My03LjI2NSAwLTcuMTQ1LjU2LTcuMjU3IDYuNDY4LTcuMjYzem01LjUyNCAxLjQ3MWMtLjU4NyAwLTEuMDYzLjQ3Ni0xLjA2MyAxLjA2M3MuNDc2IDEuMDYzIDEuMDYzIDEuMDYzIDEuMDYzLS40NzYgMS4wNjMtMS4wNjMtLjQ3Ni0xLjA2My0xLjA2My0xLjA2M3ptLTQuNzMgMS4yNDNjLTIuNTEzIDAtNC41NSAyLjAzOC00LjU1IDQuNTUxczIuMDM3IDQuNTUgNC41NSA0LjU1IDQuNTQ5LTIuMDM3IDQuNTQ5LTQuNTUtMi4wMzYtNC41NTEtNC41NDktNC41NTF6bTAgMS41OTdjMy45MDUgMCAzLjkxIDUuOTA4IDAgNS45MDgtMy45MDQgMC0zLjkxLTUuOTA4IDAtNS45MDh6IiBmaWxsPSIjZmZmIi8+PC9zdmc+Cg==" />
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
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar..." aria-label="Search">
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