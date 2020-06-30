
  <style>
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>


<a href="/loja">

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner banner">
    <div class="carousel-item active">
      <?php $img = $imagens[1]->foto ?>
      <img src="{{asset('/storage/imagens/'.$img)}}" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <?php $img = $imagens[2]->foto ?>
      <img src="{{asset('/storage/imagens/'.$img)}}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <?php $img = $imagens[3]->foto ?>
      <img src="{{asset('/storage/imagens/'.$img)}}" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</a>