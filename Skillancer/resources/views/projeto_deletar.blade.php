<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deletar projeto</title>

    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">


      <h1>Deletar Projeto</h1>

      <form action="/projeto/deletar/{{ $projeto->projeto_id }}" method="POST">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <label>Nome do Projeto</label>
        <input type="text" name="nome" value="{{ $projeto->nome }}" readonly>

        <button type="submit">Deletar</button>

      </form>

    </div>

  </body>
</html>
