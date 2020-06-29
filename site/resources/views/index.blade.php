@extends('layouts.header')
      
      @section('content')
        
    
    <div class="inicio" id="inicio"></div>
    
    @extends('layouts.carousel')
  
  

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
        <h2 class="content-subtitle text-center">Onde você pode nos encontrar</h2>
    <div class="container p-0 m-0 mx-auto">
        <div class="row m-0 p-0">
            <div class="col p-0 m-0 ">
                <div class="card-body p-0 m-0 mx-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.112546335258!2d-54.235645585491206!3d-23.056335084935913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x948b8f17815d3b79%3A0x6d67d7794c711a33!2sErva%20Mate%20Campan%C3%A1rio!5e0!3m2!1spt-BR!2sbr!4v1591345743163!5m2!1spt-BR!2sbr" class="col-12 p-0 m-0 mx-auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
            <p class="subtext text-center">Conheça nossos produtos e aproveite o verdadeiro sabor da erva mate :)<br>Você também pode acessar <a href="/loja">nossa loja.</a></p>
            <div class="row mt-5 justify-content-around produtos-list bg-white" >     
            @if (count($produtos) > 0)
            @foreach ($produtos as $produto)
            <div class="col-lg-5 col-md-7 col-sm-8 mb-4 bg-white" >
              <div class="card h-100 h-md-70 produtos-list">
                <a href="/loja"><img class="card-img-top" src="{{url('storage/produtos/'.$produto->foto)}}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title text-center mt-3 mb-2 nome-produtos">
                    <a href="/loja">{{$produto->nome}}</a>
                  </h4>
                  <p class="card-text descricao-produtos">{{$produto->descricao}}</p>
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
        <div class="container mt-5">
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
<!-- Footer -->
   

      @endsection


