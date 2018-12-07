@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')


@if ($errors->count())

<div class= "alert alert-danger">

  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
  </div>
  @endif

  <style>
  .box1{
    margin-bottom: 249px;
    margin-top: 205px;
  }

.box1 h2{
  color: #435058;
}

.box1 h3{
  color: white;
}

  </style>


  <div class="container box1">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Aplicado!</h2>
        <h3 class="section-subheading text-muted">Suas informações foram enviadas ao criador do projeto e você receberá uma resposta assim que possível.</h3>
      </div>
    </div>
  </div>






    @stop
