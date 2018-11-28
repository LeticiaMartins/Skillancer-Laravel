@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')

    {{ $listaDeProjetos->links() }}

    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">projetos</h2>
            <h3 class="section-subheading text-muted">Veja como a publicação de um projeto na Skillancers fala muito sobre seu potencial...depois disso é só escolher o/a desenvolverorxs ideal para você</h3>
          </div>
        </div>

        <div class="row">
            @foreach ($listaDeProjetos as $projeto)
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="projeto/exibir/{{$projeto->id_projeto}}">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="{{$projeto->imagem_url}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>{{$projeto->titulo}}</h4>
              @if ($projeto->updated_at)
                <small>(atualizado {{ $projeto->updated_at->diffForHuman() }})</small>
              @endif
              <p class="text-muted">{{$projeto->descricao}}</p>
            </div>
          </div>
          @endforeach
    </div>
    </section>

    @stop
