@extends('layout.header')
      
      @section('content')
    
    <div class="inicio" id="inicio"></div>
    <a href="/loja/">
     <img src="/img/banner/4.png" class="banner container-fluid" alt="">
    </a>

      <div class="nossa-empresa" id="nossa-empresa" >
        
        <div class="div-text col-lg-12 p-0">
            <h1 class="text-center content-title">Nossa Empresa</h1>
                <p class="texto-2colunas">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas eum, 
                odit aliquid accusamus exercitationem saepe doloribus perspiciatis maiores cum nemo rem, 
                placeat ea, laborum magnam. Modi voluptates quisquam illum enim hic cumque reiciendis maiores 
                quis quibusdam dignissimos tempora eaque, laborum atque voluptas quidem tempore qui eius recusandae 
                veniam. Minus recusandae modi porro dolorum iste nulla, veniam pariatur rerum? Sapiente 
                hic qui labore tempora reprehenderit ad dolore dolorum unde inventore, delectus fugiat 
                distinctio veritatis nobis, ipsa doloremque ab eius ipsum rem. Accusamus dolores nisi ut 
                reiciendis rerum autem quod, eligendi fugiat ipsa vero eaque, dolore voluptate. </p>
        </div>
        <img src="/img/fabrica.png" class="fabrica" style="width:100%" alt="">
     </div>

<div class="local">
    <center>
        <h2 class="content-subtitle">Onde você pode nos encontrar</h2>
    </center>
    <div class="container p-0 m-0">
        <div class="row m-0 p-0">
            <div class="col p-0 m-0">
                <div class="card-body p-0 m-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.112546335258!2d-54.235645585491206!3d-23.056335084935913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x948b8f17815d3b79%3A0x6d67d7794c711a33!2sErva%20Mate%20Campan%C3%A1rio!5e0!3m2!1spt-BR!2sbr!4v1591345743163!5m2!1spt-BR!2sbr" class="col-12 p-0 m-0" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="section-foto justify-content-center" >
    
        <h2 class="content-subtitle text-center" style="  color:rgb(8, 80, 50) ;
  font-family: 'Merienda', cursive; 
  margin-bottom: 1.5em;">Mais gostosa impossível!</h2>
        <div class="row bg galeria m-0 p-0 justify-content-between">
            <div class="foto-galeria m-0 p-0 col-xl-3 col-md-6">
                <img src="/img/galeria/galeria1.png" class="m-0 p-0" alt="">
            </div>
            <div class="foto-galeria m-0 p-0 col-xl-3 col-md-6">
                <img src="/img/galeria/galeria2.png" class="m-0 p-0" alt="">
            </div>
            <div class="foto-galeria m-0 p-0 col-xl-3 col-md-6">
                <img src="/img/galeria/galeria3.png" class="m-0 p-0" alt="">
            </div>
            <div class="foto-galeria m-0 p-0 col-xl-3 col-md-6">
                <img src="/img/galeria/galeria4.png" class="m-0 p-0" alt="">
            </div>
        </div>
        </div>
  

      <section  id="produtos" class="produtos">
        <h1 class="text-center content-title">Produtos</h1>
            <p class="subtext text-center">Conheça nossos produtos e aproveite o verdadeiro sabor da erva mate :)</p>
            <div class="row mt-4">     
            @if (count($produtos) > 0)
            @foreach ($produtos as $produto)
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{url('storage/produtos/'.$produto->foto)}}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$produto->nome}}</a>
                  </h4>
                  <h5>R${{$produto->preco}}</h5>
                  <p class="card-text">{{$produto->descricao}}</p>
                </div>
              </div>
            </div>
            @endforeach
            @else
              <h3 class="text-center subtext-erro">Você ainda não possui nenhum produto cadastrado :(</h3>
            @endif
          </div>
      </section>

      <section id="fale-conosco" class="fale-conosco">
        <h1 class="text-center content-title">Fale Conosco</h1>
            <p class="subtext text-center">Você pode nos enviar um email ou contatar um dos nossos vendedores</p>
        <div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
            <div class="card-header" style="background-color:rgb(8, 80, 50)"><h5 class="font-weight-bold text-white">Formulário de Contato</h5></div>
                
                <div class="card-body">
                    <form  action="{{ url('enviar')  }}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Insira seu nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço de E-mail</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email" name="email" required>
                            <small id="emailHelp" class="form-text text-muted">Não se preocupe, não iremos compartilhar seu email.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" rows="6" name="msg" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button style="background-color:rgb(8, 80, 50)" class="btn font-weight-bold text-white text-right">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
 
    </div>
</div>

      </section>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
   

      @endsection


