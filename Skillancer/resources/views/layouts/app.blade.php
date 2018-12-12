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
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="/css/agency.min.css" rel="stylesheet">
    <link href="/css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/agency.css" title="standard">
    <link rel="stylesheet" href="/css/agency-alternativo.css" title="alternativo">
    <link rel="stylesheet" href="@yield('css-custom')">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <style>

    #alerta{ width: 300px;
    height: auto;
    background-color: lightblue;
    display: block;
    text-align: center;
    margin-top: 80px;
    position: absolute;
    right: 20px;
    border-radius: 20px;
    animation-name: abadosair;
    animation-duration: 1s;
    animation-fill-mode:forwards;
    display:none;
    box-shadow: 8px 65px 92px 0 black;
    transition: width 2s;
}

@keyframes abadosair{ 

0%{
 
 transform: scale(0.0);
 }
 30%{

 transform: scale(0.3);
 }
  50%{
 transform: scale(0.4);
  }
  70%{
 transform: scale(0.7);
  }
 100%{
 transform: scale(1);
}
}
#alerta:hover{
 width:350px;
}


}

#simbotao{
 
  margin:5px;
  
}


    #cores{
      text-align:center;
    }

    img.logo{
      width: 45px;
      height:45px;
    }

    a{
      color: #212529;
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

  </head>

  <body id="page-top">
   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navtroca" id="mainNav">
      <div class="container" id="mainNav1">
        <a class="navbar-brand js-scroll-trigger" href="/"><img class = "logo" src = "/img/logos/logo.png" alt = "Skillancers"></a>
        <a class="btn btn-primary" href="#cores" >Fundo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/projeto_todos">projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/freela_todos">Freelancers</a>
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
                    <div class="img-profile" style="background-image: url('/../image/leticia.jpg')"></div>
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
    <div id="alerta">
   <h1>Poxa já vai embora?</h1>
    <button class="btn btn-primary" id="simbotao">Sim</button>
   </div>
    
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
              <ul>
                alterar tema
                <li><a href="#" onclick="setActiveStyleSheet('standard'); return false;">Default</a></li>
                <li><a href="#" onclick="setActiveStyleSheet('alternativo'); return false;">Ux</a></li>
              </ul>
            </footer>
            <div style="width 300px;height:300px;background-color:lightgrey;" id="cores" class="custom-control custom-radio">
            <label><h2>Escolha a cor do Fundo<h2></label><br>
  <button class="btn btn-primary azul" id="fundoazul">Azul</button>
  <button class="btn btn-primary rosa" id="fundored">Rosa</button>
  <button class="btn btn-primary verde" id="fundogreen">Verde</button>
  <button class="btn btn-primary padrao" id="padrao">Padrão</button>
</div>
            <!-- Bootstrap/JavaScript -->
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- plugin JavaScript -->
            <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- entre em contato JavaScript -->
            <script src="/js/jqBootstrapValidation.js"></script>
            <script src="/js/contact_me.js"></script>

            <!-- custom scripts(modelo) -->
            <script src="/js/agency.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Plugin JavaScript -->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="/js/validacao.js"></script>
        <script src="/js/estados.js"></script>
      </body>
    </html>
