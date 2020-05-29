@extends('layout.header')
      
    @section('content')

        <div class="container-fluid px-5">

            <div class="row">

              <div class="col-lg-2">
        
                @if (count($categorias) > 0)
                    <h1 class="my-4">Categorias</h1>
                    @foreach ($categorias as $categoria)
                        <div class="list-group">
                            <a href="#" class="list-group-item">{{$categoria}}</a>
                        </div>
                    @endforeach
                @endif
        
              </div>
              <!-- /.col-lg-3 -->
        
              <div class="col-lg-10">
        
        
                <div class="row mt-4">
        
                @for ($i = 0; $i < 18; $i++)
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="#">Item</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                  </div>
                @endfor
        
                </div>
                <!-- /.row -->
        
              </div>
              <!-- /.col-lg-9 -->
        
            </div>
            <!-- /.row -->
        
          </div>
    @endsection


