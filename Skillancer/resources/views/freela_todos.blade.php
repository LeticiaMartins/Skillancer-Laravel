@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')

    {{ $listaDeFreelancers->links() }}
    <style>
    h3{
    color:#212529;
    }
    
    </style>

    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">nosso time</h2>
            <h3 class="section-subheading text-muted">Conheça todos os freelancers</h3>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <form action=" " method="post">
                <div class="container">
                  <input type="search" id="busca" name="q">
                  <button type="submit">Buscar</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row">
            @foreach ($listaDeFreelancers as $freelancer)
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="projetos_freela/exibir/{{$freelancer->id_freelancer}}">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="{{$freelancer->imagem_url}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>{{$freelancer->name}}</h4>
              @if ($freelancer->updated_at)
                <small>(atualizado {{ $freelancer->updated_at->diffForHuman() }})</small>
              @endif
              <p class="text-muted">{{$freelancer->descricao}}</p>
            </div>
          </div>
          @endforeach
    </div>
    </section>

    @stop
