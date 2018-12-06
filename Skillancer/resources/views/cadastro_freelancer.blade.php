

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

                    <h2 class="title">{{ Auth::user()->username }}, <br>    conte mais sobre você</h2>

                    <form action="/cadastro_freelancer" method="POST"  enctype="multipart/form-data">

                      {{-- csrf field --}}
                      @csrf
                      <div class="row">
                        <div class="col-12">
                          <label class="title-serv">Tipo de Serviço</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm">
                          <select name="tipo_servico" required class="form-control">
                            <option disabled selected>Selecione</option>
                            <option value="Front-end">Front-end</option>
                            <option value="Back-end">Back-end</option>
                            <option value="FullStack">FullStack</option>
                            <option value="Dev. mobile">Dev. mobile</option>
                            <option value=" Dev. web"> Dev. web</option>
                            <option value="UX-Design">UX-Design</option>
                          </select>
                      </div>
                    </div>
                        <br><br>
                        <div class="form-group">
                          <h4 for="comment">Habilidades</h4>
                          <br>
                          <div class="form-group">

                          <div class="input-group mb-3">
                            <select class="form-control" name="habilidades[]" multiple>
                              <option selected disabled>Selecione</option>
                                @foreach($habilidades as $habilidade)
                                  <option value="{{$habilidade->id_habilidade}}">{{$habilidade->titulo}}</option>
                                @endforeach
                            </select>
                          </div>
                          <small>Pressione o Ctrl para selecionar varias opções</small>
                        <br><br><br>
                        </div>
                        <div class="form-group">
                          <h4 for="comment">Linkedin</h4>
                          <br>
                          <div class="form-group">

                          <div class="input-group mb-3">
                          <input type="text" name="linkedin" id="linkedin" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <h4 for="comment">Github</h4>
                          <br>
                          <div class="form-group">

                          <div class="input-group mb-3">
                          <input type="text" name="github" id="github" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <h4 for="comment">Facebook</h4>
                          <br>
                          <div class="form-group">

                          <div class="input-group mb-3">
                          <input type="text" name="facebook" id="facebook" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <h4 for="comment">Twitter</h4>
                          <br>
                          <div class="form-group">

                          <div class="input-group mb-3">
                          <input type="text" name="twitter" id="twitter" class="form-control">
                          </div>
                        </div>


                    <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                </form>
        </div>
    </div>

@stop
