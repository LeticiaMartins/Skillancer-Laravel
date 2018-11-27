@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')

  <body>
    <div class="container">

      @if ($errors->count())

      <div class= "alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        </div>
    @endif

      <h1>Editar Projeto</h1>

      <form action="/projeto/editar/{{ $projeto->id_projeto }}" method="POST">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Nome do Projeto</label>
        <label>Nome do Projeto</label>
        <input type="text" name="titulo" value="{{$projeto->titulo}}"><br>
        <label>Tipo de Serviço</label>
        <input type="text" name="tipo_servico" value="{{$projeto->tipo_servico}}"><br>
        <label>Descrição</label>
        <input type="text" name="descricao" value="{{$projeto->descricao}}"><br>
        <button type="submit">Confirmar</button>

      </form>

    </div>

  </body>
</html>
@stop
