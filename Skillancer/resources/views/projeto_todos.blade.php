@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')

    {{ $listaDeProjetos->links() }}

    <section id="portfolio">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase divText">projetos</h2>
            <h4 class="section-subheading text-muted"></h4>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <form action="/buscar-projetos" method="post">
                {{ csrf_field() }}
                <label for="busca"></label>
                <div class="container">
                  <input type="text" id="busca" name="busca" />

                  <button type="submit" class="btn btn-primary buscar">Buscar</button>
                  <div id="output"></div>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="row">
            @foreach ($listaDeProjetos as $projeto)
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="projeto/exibir/{{$projeto->id_projeto}}"
              style="background-image: url('{{$projeto->imagem_url}}')">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
            </a>
            <div class="portfolio-caption">
              <h4>{{$projeto->titulo}}</h4>
                <small>(atualizado {{ $projeto->updated_at }})</small>

              <p class="text-muted">{{$projeto->descricao}}</p>
            </div>
          </div>
          @endforeach
    </div>
    </section>

    @stop
