<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css" />
    <script src="main.js"></script>
</head>
<body>

  <h1>Lista de Projetos</h1>
  <h2><a href= "/projeto/adicionar">Adicionar Projeto</a></h2>

  <ul class= "lis-group" >
    @foreach ($listaDeProjetos as $projeto)
      <li class= "list-group-item">
        {{$projeto->nome}}
        @if ($projeto->updated_at)
          (atualizado {{ $projeto->updated_at->diffForHuman() }})
        @endif

        <a href= "/projeto/editar/{{ $projeto->projeto_id }}">Editar</a>
        <a href= "/projeto/deletar/{{ $projeto->projeto_id }}">Deletar</a>
      </li>
      @endforeach
    </ul>
{{-- comentario --}}
    {{ $listaDeProjetos->links() }}

  </body>
  </html>
