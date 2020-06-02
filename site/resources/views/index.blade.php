@extends('layout.header')
      
      @section('content')
    <div class="inicio" id="inicio"></div>
    <a href="/loja/">
     <img src="/img/banner/4.png" class="banner container-fluid" alt="">
    </a>

      <div class="nossa-empresa" id="nossa-empresa" >
        
        <div class="div-text col-lg-12">
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
      </div>

      <section  id="produtos" class="produtos">
        <h1 class="text-center content-title">Produtos</h1>
  <ul class="list-group list-group-horizontal">
            <li class="list-group-item">
                <a class="">Ervas</a>
            </li>

            <li class="list-group-item">
              <a class="">Nossa Empresa</a>
            </li>

            <li class="list-group-item">
              <a class="">Produtos</a>
            </li>
            
            <li class="list-group-item"">
              <a class="" >Fale Conosco</a>
            </li>
          
          </ul>
      </section>

      <section id="fale-conosco" class="fale-conosco">
        <h1 class="text-center content-title">Fale Conosco</h1>
        <div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
            <div class="card-header"><h5 class="font-weight-bold text-white">Formulário de Contato</h5></div>
                
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
                        <button class="btn font-weight-bold text-white text-right">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light">
                <div class="card-header"><h5 class="font-weight-bold text-white">Endereço</h5></div>
                <div class="card-body">
         <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>3 rue des Champs Elysées</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>75008 PARIS</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>Email : email@example.com</p>
                </li>
                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>Tel. +33 12 56 11 51 84</p>
                </li>
            </ul>
                </div>

            </div>
        </div>
    </div>
</div>

      </section>
   

      @endsection


