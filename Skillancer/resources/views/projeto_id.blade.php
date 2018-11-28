@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')


  <h1>Lista de Projetos</h1>
  <h2>{{$projeto->titulo}}</h2>
  <img src="{{$projeto->imagem_url}}" alt="">

    @stop
