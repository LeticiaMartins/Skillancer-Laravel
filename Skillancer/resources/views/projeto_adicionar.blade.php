@extends('layouts.app')

@section('css-custom', '/css/add.css')
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

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">

        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">

                    <h2 class="title">Conte mais sobre seu projeto</h2>

                    <form id="add_projeto"  action="/projeto/adicionar" method="POST"  enctype="multipart/form-data">

                      {{-- csrf field --}}
                      @csrf
                        <div class="input-group">
                        <h4>Nome do Projeto</h4>
                        <br>
                            <input class="input--style-1" type="text" placeholder="nome do projeto" name="titulo" required>
                        </div>

                                                <label for="estado">estado</label>
                        <select name="estado" class="form-control" id="estado" ></select>
                        <label for="cidade">cidade</label>
                        <select name="cidade" class="form-control" id="cidade" ></select>
                        <br>

                        <div class="form-group">
                                <h4 for="exampleSelect2">Tipo se site se houver</h4>
                                <br>

                                <select multiple class="form-control" id="exampleSelect2" name= "tipo_servico" required>
                                  <option>e-commerce</option>
                                  <option>marketplace</option>
                                  <option>social/ONGs</option>
                                  <option>marketing</option>
                                  <option>rede social</option>
                                </select>
                        </div>
                        <br><br>

                            <div class="form-group">
                                    <h4 for="comment">Fale mais sobre seu projeto</h4>
                                    <br>
                                    <div class="form-group">

                                    <textarea class="form-control" rows="5" id="comment" name= "descricao" required></textarea>
                                  </div>
                        <br><br><br>

                            <div class="form-group">
                              <h4 for="exampleFormControlFile1">Faça o upload da foto de capa seu projeto</h4>
                              <br>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="arquivo">
                            </div>
                            <br><br>
                         </div>

                    <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                </form>
        </div>
    </div>

@stop
