    @extends('layouts.adminlayout')
    @section('content')
    
    <div class="container">

        @include('layouts.alerts')
        <h1>Editar Produto</h1>
        {!! Form::open(['action' => ['ProdutosController@update', $produto->id], 'enctype' => 'multipart/form-data']) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('nome', $produto->nome, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Preço') !!}
            {!! Form::number('preco', number_format($produto->preco, 2, ',', '.'), ['class' => 'form-control', 'step' => '0.01', 'min' => '0.01']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descrição') !!}
            {!! Form::textarea('descricao', $produto->descricao, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Categoria:') !!}
            <select name="categoria" placeholder="Categorias">
                <option value="{{$produto->id_categoria}}" selected hidden>{{$produtoCat->nome}}</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {!! Form::label('foto', 'Foto:') !!}
            {!! Form::file('foto') !!}
        </div>
        {!! Form::hidden('_method', 'PUT') !!}
        {!! Form::submit('Alterar', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
    @endsection