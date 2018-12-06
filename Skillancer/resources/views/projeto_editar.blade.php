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

.inner.fundo{
	margin-top: 80px;
}

.image-holder{
	margin-top: 40px;
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
  padding-bottom: 50px;
  padding-right:0 !important;
}

.btn.btn-primary{
	margin-left: 65px;
}

textarea.form-control{
	height: 94px;
}

</style>

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

				<label>Nome do Projeto</label>
	        <div class="form-group row">
	           <div class="col-md-10">
	             <input id="titulo" type="text" class="form-control" name="titulo" value="{{$projeto->titulo}}" required autofocus>
	           </div>
	        </div>

	      <label>Tipo de Serviço</label>
	      	<div class="form-group row">
	           <div class="col-md-10">
	           	 <input id="tipo_servico" class="form-control" type="text" name="tipo_servico" value="{{$projeto->tipo_servico}}"required>
	           </div>
	        </div>

        <label>Descrição</label>
        	<div class="form-group row">
             <div class="col-md-10">
               <textarea name="descricao" id="descricao" class="form-control">{{$projeto->descricao}}</textarea>
	           </div>
	       	</div>

	       <div class="form-group row mb-0 box">
	         <div class="col-md-8 offset-md-4 box1">
	            <button type="submit" class="btn btn-primary">Confirmar edição</button>
           </div>
         </div>
  	 	 </form>
	   </div>
	 </div>

@stop
