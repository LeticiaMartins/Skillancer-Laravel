@extends('layouts.app')

@section('css-custom', '/css/cadastro.css')
@section('content')

<style>



.box{
	position: relative;

}

body{
  background-imagem: url('fundo-total.jpg') !important;
}

.box1 {
  position: absolute;
    top: -60px;
	    width: 271px;
	    left: 0;
	    box-sizing: border-box;
	    margin: 0px;
	    padding: 0;
}
.box1 a{
	position: relative;
	left: -14px;
}


.form-group input {
    width: 100%;
}

.form-check{
	position: absolute;
    display: block;
    padding-left: 1.25rem;
    left: -129px;
    top: 0;
}
.form-check-input {
    position: static;
    margin-top: .3rem;
    margin-left: -1.25rem;
}

.fundo{
  padding-bottom: 32px;
  padding-right:0 !important;

}
</style>

  <div>

@if ($errors->count())

<div class= "alert alert-danger">

  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>

  </div>
  </div>
@endif
<div class="wrapper">

    <div class="inner fundo">
        <div class="image-holder">
            <img src="/images/fundo-imagem.jpg" alt="">
        </div>

        <form method="POST" action="/projeto/editar/{{ $projeto->id_projeto }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

             

                <div class="form-group row">
                <label>Nome do Projeto</label>

                    <div class="col-md-10">
                        <input id="email" type="text" class="form-control" name="titulo" value="{{$projeto->titulo}}" placeholder="E-mail" required autofocus>

                      
                    </div>
                </div>
                <label>Tipo de Serviço</label>
                <div class="form-group row">
                
                    <div class="col-md-10">
                        <input id="password" class="form-control"type="text" name="tipo_servico" class="inputt" value="{{$projeto->tipo_servico}}"required>

                     
                    </div>
                </div>
                <label>Descrição</label>

                   <div class="form-group row">
                  
                    <div class="col-md-10">
                        <input id="password" class="form-control"type="text" name="descricao" class="inputt" value="{{$projeto->descricao}}"/>
                     
                    </div>
                </div>

                <div class="form-group row mb-0 box">
                    <div class="col-md-8 offset-md-4 box1">
                        <button type="submit" class="btn btn-primary">
                            Confirmar
                        </button>

                    
                    </div>
                </div>
            </form>
    </div>
</div>
    

  </body>
</html>
@stop
