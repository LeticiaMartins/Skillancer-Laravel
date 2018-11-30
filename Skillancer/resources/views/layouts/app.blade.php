<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skillancers</title>
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- bootstrap/CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontes -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <!-- styles -->
    <link href="/css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/agency.css">
    <link rel="stylesheet" href="@yield('css-custom')">

    <style>

    img.logo{
      width: 45px;
      height:45px;
    }

    a{
      color: #fed136;
    }

    img.big-logo{
      width: 220px;
      height: 220px;
    }

    div.intro-lead-in{
      margin-top: 40px;
    }

    .carousel-inner{
      position: relative;
      margin-top: 2000px;
      margin: 0 auto;
      width: 600px;
      height: 400px;
    }

    .textao{
      positon: relative;
      display: inline-block;
    }

    .freelas{
      margin-top: 50px;
      display: inline;
    }

    </style>

  </head>

  <body id="page-top">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"><img class = "logo" src = "/img/logos/logo.png" alt = "Skillancers"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">passo a passo</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">CADASTRE-SE</a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <div class="img-profile" style="background-image: url('/../image/guanabara.jpg')"></div>
                    {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" id="collapseExample" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="/projeto/adicionar">
                            {{ __('Publicar Projetos') }}
                            </a>

                            <a class="dropdown-item" href="/perfildev">
                            {{ __('Freelancer') }}
                            </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
            @yield('content')
            <!-- footer -->
            <footer>
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Skillancers 2018</span>
                  </div>
                  <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                      <li class="list-inline-item">
                        <a href="#">Política de Privacidade</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">Termos de Uso</a>
                        <li class="list-inline-item">
                        <a href="faq.blade.php">FAQ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
            <!-- Bootstrap/JavaScript -->
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- plugin JavaScript -->
            <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- entre em contato JavaScript -->
            <script src="/js/jqBootstrapValidation.js"></script>
            <script src="/js/contact_me.js"></script>

            <!-- custom scripts(modelo) -->
            <script src="/js/agency.min.js"></script>

          </body>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Plugin JavaScript -->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
        </html>
