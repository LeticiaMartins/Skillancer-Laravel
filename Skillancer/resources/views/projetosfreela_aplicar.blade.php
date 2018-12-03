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


  



    @stop
