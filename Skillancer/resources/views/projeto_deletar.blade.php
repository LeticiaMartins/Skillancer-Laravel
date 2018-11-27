@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')


    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">


      <h1>Deletar Projeto</h1>

      <form action="/projeto/deletar/{{ $projeto->id_projeto }}" method="POST">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <b>Nome do Projeto</b>
        <p>{{ $projeto->titulo }}</p>

        <button type="submit">Deletar</button>

      </form>

    </div>

  </body>
</html>
@stop
