@extends('layouts.app')

@section('css-custom', '/css/projetos.css')
@section('content')

<body>
  <h1>Lista de Projetos</h1>
  <h2><a href= "/projeto/adicionar">Adicionar Projeto</a></h2>

  <ul class= "lis-group" >
    @foreach ($listaDeProjetos as $projeto)
      <li class= "list-group-item">
        {{$projeto->titulo}}
        @if ($projeto->updated_at)
          (atualizado {{ $projeto->updated_at->diffForHuman() }})
        @endif

        <a href= "/projeto/editar/{{ $projeto->id_projeto }}">Editar</a>
        <a href= "/projeto/deletar/{{ $projeto->id_projeto }}">Deletar</a>
      </li>
      @endforeach
    </ul>
{{-- comentario --}}
    {{ $listaDeProjetos->links() }}

    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Projetos</h2>
            <h3 class="section-subheading text-muted">Veja como a publicação de um projeto na Skillancers fala muito sobre seu potencial...depois disso é só escolher o/a desenvolverorxs ideal para você</h3>
          </div>
        </div>

        <div class="row">
            @foreach ($listaDeProjetos as $projeto)
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/camisas.jpg" alt="">
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
      </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </html>
    @stop
