@extends('layouts.adminlayout')      
@section('content')

<div class="container-fluid ">

    @foreach( $imagens as $img)
    <div class="container m-0 ">
<center>
  <div class="card mt-3">
    <div class="card-header">{{$img->descricao}}</div>
    <div class="card-body text-center" style="background-image:url({{url('storage/imagens/'.$img->foto)}})">          
    <img class="p-2" >
</div> 
           {!! Form::open(['action' => ['ImagensController@update', $img->id], 'enctype' => 'multipart/form-data']) !!}
          @csrf
          <div class="card-footer text-center">   
          <input type="file" class="file mt-2" name="foto" value="foto" required> 
          <button type="submit" class="btn-primary btn alterar mt-2">Alterar Imagem</button>
          {!! Form::hidden('_method', 'PUT') !!}
          {!! Form::close() !!}</div>
  </div>
</div>


@endforeach

<style>

img{
  height:25vw;
}

.card-body{
  background-size:100% 100%;
}

.card{
    height:50vw;
    width:55vw;

  }

@media only screen and (max-width: 600px) {
  .card-header{
    font-size:0.7em;
  }
  .card-body{
  background-size:100% 100%;
}
  .alterar{
    font-size:2.2vw;

  }

  .card-footer{
    display:flex;
    justify-content:space-between;
  }

  .file{
    font-size:2vw;

    width:50%;
  }

  img{
    height:30vw;
  }

  .card{
    width:75vw;
    height:85vw;
  }


}

</style>
  {{-- container-fluid --}}
@endsection

