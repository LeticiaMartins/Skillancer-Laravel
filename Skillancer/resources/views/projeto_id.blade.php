@extends('layouts.app')

@section('css-custom', '/css/agency.css')
@section('content')

    <div class="container center">
      <div class="projeto-exibir">
        <h4 class="text-uppercase text-center">{{$projeto->titulo}}</h4>
          <p class="item-intro text-muted text-center">{{$projeto->descricao}}</p>
            <img class="primeira img-thumbnail rounded mx-auto d-block" src= "{{$projeto->imagem_url}}" alt="" width= "500" height= "500">
            <br>
          <div class= "textao">
            <ul class="list-inline">
              <li><b>Data da publicação:</b> {{$projeto->created_at}}</li>
              <li><b>Cliente:</b> {{$cliente}}</li>
              <li><b>Categoria:</b> {{$projeto->tipo_servico}}</li>
            </ul>
          @if($projeto->fk_idUser == Auth::id())
          <a href= "/projeto/editar/{{ $projeto->id_projeto }}" class="btn btn-primary">Editar</a>
          <a href= "/projeto/deletar/{{ $projeto->id_projeto }}" class="btn btn-danger">Deletar</a>
          @endif
          </div>
      </div>
    </div>


@stop
