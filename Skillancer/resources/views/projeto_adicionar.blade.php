<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css" />
    <title></title>
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

        <h1>Adicionar Projeto</h1>
        <br>
        <form action="/projeto/adicionar" method="POST">

        {{-- csrf field --}}
        @csrf
        @method('POST')

        <label>Nome do Projeto</label>
        <input type="text" name="nome">
        <button type="submit">Enviar</button>

        </form>
        </div>
  </body>
</html>
