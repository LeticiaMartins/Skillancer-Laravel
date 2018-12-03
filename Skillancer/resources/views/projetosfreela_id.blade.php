@extends('layouts.app')

@section('css-custom', '/css/agency.css')
@section('content')

    <div class="container">
      <div class="projeto-exibir">
        <a href= "/projetosfreela/aplicar/{{ $projeto->id_projeto }}" class="btn btn-default">Aplicar</a>
        <h4 class="text-uppercase">{{$projeto->titulo}}</h4>
        <p class="item-intro text-muted">Hipsters.pano Camisaria</p>

        <img class="primeira img-thumbnail rounded float-left" src= "/img/jeans.png" alt="" width= "250" height= "320">
        <img class="segunda img-thumbnail rounded float-right" src= "/img/xadrez.jpg" alt="" width= "360" height= "260">
        <img class="terceira img-thumbnail rounded float-right" src= "/img/roupas.jpg" alt="" width= "340" height= "340">
        <img class="quarta img-thumbnail rounded float-left" src= "/img/sapato.jpg" alt="" width= "350" height= "270">



        <div class= "textao">
        <p>{{$projeto->descricao}}</p>
        <ul class="list-inline">
          <li>Data da publicação: 15/10/2018</li>
          <li>Cliente: {{$cliente}}</li>
          <li>Categoria: {{$projeto->tipo_servico}}</li>
        </ul>
      </div>
    </div>
@stop
