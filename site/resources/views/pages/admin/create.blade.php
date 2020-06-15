    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}

    @extends('layouts.adminlayout')
    @section('content')
    
    <div class="container">

        @include('layouts.alerts')
        <h1>Adicionar Produto</h1>
        {!! Form::open(['action' => 'ProdutosController@store', 'enctype' => 'multipart/form-data']) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('Nome') !!}
            {!! Form::text('nome', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Preço') !!}
            {!! Form::number('preco', '', ['class' => 'form-control', 'step' => '0.01', 'min' => '0.01']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descrição') !!}
            {!! Form::textarea('descricao', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Categoria:') !!}
            <select name="categoria" placeholder="Categorias">
                <option value="" disabled selected hidden>Categoria...</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
            </select>
            {{-- {!! Form::select('categoria', ['1' => 'Ervas', '2' => 'Cuias', '3' => 'Bombas', '4' => 'Guampas'], null, ['placeholder' => 'Categoria...']) !!} --}}
        </div>
        <div class="form-group">
            {!! Form::label('foto', 'Foto:') !!}
            {!! Form::file('foto') !!}
        </div>
        {!! Form::submit('Adicionar', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
    @endsection