@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')


    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container delete-form">


      <h1>Deletar Projeto</h1><br>

      <form action="/projeto/deletar/{{ $projeto->id_projeto }}" method="POST">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

      <p><b>Nome do Projeto:</b> {{ $projeto->titulo }} </p><br>

      <button class="btn btn-danger" type="submit">Quero Deletar</button>

      </form>

    </div>

  </body>
</html>
@stop
