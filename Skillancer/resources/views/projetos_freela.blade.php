@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')

    {{ $listaDeProjetos->links() }}

    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">projetos</h2>
            <h2 class="section-subheading text-muted">Veja todos os projetos publicados e aplique para uma oportunidade.</h2>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <form action=" " method="post">
                <label for="busca">Buscar</label>
                <div class="container">
                  <input type="search" id="busca" name="q">
                  <button type="submit">OK</button>
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
                <a class="btn btn-primary btn-x2 text-uppercase js-scroll-trigger" href="/projetosfreela/aplicar">Aplicar</a>
             </a>
              </div>
            </div>
          @endforeach
    </div>
    </section>

    @stop
