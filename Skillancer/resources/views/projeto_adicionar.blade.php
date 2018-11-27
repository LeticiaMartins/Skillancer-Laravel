@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')


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

        <label>Nome do Projeto</label>
        <input type="text" name="titulo"><br>
        <label>Tipo de Serviço</label>
        <input type="text" name="tipo_servico"><br>
        <label>Descrição</label>
        <input type="text" name="descricao"><br>
        <button type="submit">Enviar</button>

        </form>
        </div>
@stop
