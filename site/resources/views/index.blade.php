@extends('layout.header')
      
      @section('content')
    <div class="inicio" id="inicio"></div>
    <a href="/loja/">
     <img src="/img/banner/4.png" class="banner container-fluid" alt="">
    </a>

      <div class="nossa-empresa" id="nossa-empresa" >
        
        <div class="div-text col-lg-12">
        <h1 class="text-center">Nossa Empresa</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas eum, 
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
        <h1 class="text-center">Produtos</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptas eum, 
        odit aliquid accusamus exercitationem saepe doloribus perspiciatis maiores cum nemo rem, 
        placeat ea, laborum magnam. Modi voluptates quisquam illum enim hic cumque reiciendis maiores 
        quis quibusdam dignissimos tempora eaque, laborum atque voluptas quidem tempore qui eius recusandae 
        veniam. Minus recusandae modi porro dolorum iste nulla, veniam pariatur rerum? Sapiente 
        hic qui labore tempora reprehenderit ad dolore dolorum unde inventore, delectus fugiat 
        distinctio veritatis nobis, ipsa doloremque ab eius ipsum rem. Accusamus dolores nisi ut 
        reiciendis rerum autem quod, eligendi fugiat ipsa vero eaque, dolore voluptate. Facere praesentium delectus, repellendus eum nulla dignissimos quia perspiciatis nobis consequatur corrupti, similique modi eaque id illum sit! Perferendis numquam fuga optio rerum illum voluptate magni ea porro aliquam incidunt iste quas laborum expedita, qui nam modi eum quia suscipit hic voluptatibus delectus voluptatum repellendus soluta a. Vitae eligendi voluptate neque quisquam tempora repudiandae sapiente consequatur, ratione quaerat quam ea in mollitia nihil repellat eos suscipit enim vero dolor sequi nemo, officiis maiores. Fugiat, neque maxime minus non fuga ullam illum atque nemo sunt aperiam recusandae. Modi reiciendis perferendis itaque. Veritatis dolore ea, cupiditate, laudantium suscipit vitae officia incidunt sed cum alias in. Autem, temporibus repellat! Praesentium distinctio eum maiores doloremque a asperiores fugit harum adipisci maxime quod fugiat vero debitis necessitatibus provident nemo dolor obcaecati, facere sequi, odit consequatur consequuntur officiis illo ea! Eveniet, incidunt? Velit placeat sequi impedit similique maiores quae voluptates voluptas et. Expedita aliquid facere ab dolores iusto molestiae fuga corrupti repudiandae minus cum! Eos placeat sit, quo consectetur laborum soluta amet corrupti necessitatibus corporis nihil saepe quisquam minus eius? Voluptatum, autem eos quo eveniet placeat corporis ea exercitationem maiores repellendus culpa accusamus dignissimos mollitia aliquid vitae incidunt suscipit velit temporibus minus earum modi! Expedita placeat mollitia earum architecto aperiam debitis repellendus numquam, recusandae odio iure autem porro dolor quos et, ducimus perspiciatis necessitatibus officia enim nostrum? Consequatur ullam est iusto cum amet. Tempora quidem odit a odio facilis. Vero quae nihil quod nostrum inventore suscipit debitis. Maxime illum ab porro quibusdam, hic iste, autem exercitationem itaque sit, dolores repudiandae perspiciatis. Qui aliquid sapiente ab deleniti reprehenderit asperiores beatae quod, accusantium eum esse praesentium aut impedit sunt quam sed enim officia. Soluta magnam omnis, voluptatibus alias est aspernatur, tenetur repudiandae facilis ab cum enim rem earum unde. Corrupti sit est eum sint neque laborum, quod explicabo et expedita. Autem nobis distinctio asperiores, delectus dolore consequatur amet? Quam dolores doloribus impedit. Quia ea harum enim pariatur ipsum adipisci sint iste quae error libero, tenetur consectetur aut dolorem mollitia in deserunt dolorum vitae porro assumenda vero. Natus ipsum excepturi quisquam, quaerat omnis modi porro temporibus nostrum vitae debitis laborum, eveniet nihil eum! Officiis illum unde explicabo aperiam quae cum. Quis, quasi exercitationem dignissimos porro dolorem culpa eos iste cum odio pariatur odit alias. Excepturi, nostrum quia autem aliquid sed ratione voluptatem eveniet est rerum impedit? Consequatur sint cumque minus, deleniti, accusantium ea, temporibus suscipit dicta molestiae quia vel expedita. Repudiandae, magnam harum.</p>
      </section>

      <section id="fale-conosco" class="fale-conosco">
        <h1>Fale Conosco</h1>
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


