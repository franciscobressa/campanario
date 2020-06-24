@extends('layouts.adminlayout')
      
@section('content')

<div class="container-fluid px-5">

    <div class="row">

      <div class="col-lg-10 pt-4">

@foreach( $imagens as $img)
{{$img->descricao}}
<div class="row">
<div class="col-12 ">
<img style="height:150px; width: 150px"src="{{url('storage/imagens/'.$img->foto)}}">

{!! Form::open(['action' => ['ImagensController@update', $img->id], 'enctype' => 'multipart/form-data']) !!}
        @csrf

            {!! Form::file('foto') !!}
            {!! Form::submit('Alterar', ['class'=>'btn btn-success']) !!}
            {!! Form::hidden('_method', 'PUT') !!}
            {!! Form::close() !!}

            
</div>
</div>
@endforeach

      </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-10 -->

    </div>
    <!-- /.row -->

  </div>
  {{-- container-fluid --}}
@endsection