<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar projeto</title>

    <link rel="stylesheet" href="/css/app.css">
  </head>
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
        <input type="text" name="nome" value="{{ $projeto->nome }}">

        <button type="submit">Confirmar</button>

      </form>

    </div>

  </body>
</html>
