@extends('layout.adminHeader')
      
@section('content')
    <div class="container">
        @include('layout.alerts')
        <h1>Adicionar Produto</h1>
        {!! Form::open(['action' => 'ProdutosController@store', 'enctype' => 'multipart/form-data']) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('nome', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Preço') !!}
            {!! Form::number('preco', '', ['class' => 'form-control', 'step' => '0.01']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descrição') !!}
            {!! Form::textarea('descricao', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Categoria:') !!}
            {!! Form::select('categoria', ['1' => 'Ervas', '2' => 'Cuias', '3' => 'Bombas', '4' => 'Guampas'], null, ['placeholder' => 'Categoria...']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('foto', 'Foto:') !!}
            {!! Form::file('foto') !!}
        </div>
        {!! Form::submit('Adicionar', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
@endsection