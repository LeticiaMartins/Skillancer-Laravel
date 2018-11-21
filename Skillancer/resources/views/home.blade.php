<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skillancers</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/agency.css">

    <style>

    img.logo{
      width: 45px;
      height:45px;
    }

    a{
      color: antiquewhite;
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class = "logo" src = "img/logos/logo.png" alt = "Skillancers"></a>
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
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" id="collapseExample" aria-labelledby="navbarDropdown">
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

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <!-- <div class= "logo-capa"><img class="big-logo" src = "img/logos/logo.png" alt = "Skillancers"></div> -->
          <div class="intro-lead-in">Skillancers<img class="big-logo" src = "img/logos/logo.png" alt = "Skillancers"></div>
          <div class="intro-heading text-uppercase">O FREELA IDEAL PARA VOCE</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Cadastre-se</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">NOSSOS SERVIÇOS</h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
          </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img class="d-block w-100" src="img/glass.jpg" alt="First slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/kanbam.jpg" alt="Second slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/reuniao.jpg" alt="Third slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/mesa.jpg" alt="Third slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/adultos.jpg" alt="Third slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/product.jpg" alt="Third slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/sample.jpg" alt="Third slide">
            </div>

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
        <br>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">conexões</h4>
            <p class="text-muted">Erguer pontes, conectar pessoas, estes são valores da Skillancers. Temos desenvolvedores qualificados e oferecemos suporte de especialistas em métodos ágeis</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">personalização</h4>
            <p class="text-muted">Sua plataforma do jeito que vc precisa, seja para coletar dados, analisar seu público ou otimizar seu SEO</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">ferramentas</h4>
            <p class="text-muted">Acompanhe a construção do seu projeto através de um dashboard, por onde fica fácil analisar parte por parte e se organizar para os próximos passos do seu negócio</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">projetos em fase de construção</h2>
            <h3 class="section-subheading text-muted">três projetos, três propostas diferentes, veja como a publicação de um projeto na Skillancers fala muito sobre seu potencial...depois disso é só escolher o/a desenvolverorxs ideal para você</h3>
          </div>
        </div>

        <div class="row">
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
              <h4>por outro ângulo</h4>
              <p class="text-muted">E-commerce de vestuário masculino para quem está longe de ser social</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/pets.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>quem é o docinho?</h4>
              <p class="text-muted">Doceria pet friendly que capta recursos para pets em situação vulnerável</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/buquet.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>sem casório</h4>
              <p class="text-muted">"Fui ali gostar de mim e acabei ficando" - frase de Ana Avila</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">nosso time</h2>
            <h3 class="section-subheading text-muted">vc é dev? se sim seja bem-vindo! conheça aqui um pouco dos profissionais que atuam na Skillancers</h3>
          </div>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/devdupla.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>visões complementares</h4>
              <p class="text-muted">Fê Song e Babi Neves contam como o pair programing pode ser uma boa aposta para projetos complexos</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/mendev.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>empatia</h4>
              <p class="text-muted">David Guedes traz uma história motivadora, que nos faz refletir sobre os valores da emparia e cumplicidade</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/dev1.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>mestra scrum</h4>
              <p class="text-muted">Marina Borges e seus 'causos' sobre gerenciamento de equipes e equilíbrio de persinalidades</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id= "about" >
      <div class= "freelas">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">passo a passo</h2>
            <h3 class="section-subheading text-muted">Entenda o processo de produção de um projeto</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/process1.svg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>PRIMEIRO PASSO</h4>
                    <h4 class="subheading">Coloque suas ideias na mesa</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/process2.svg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>SEGUNDO PASSO</h4>
                    <h4 class="subheading">Publicando seu projeto</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/process3.svg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>DESENVOLVIMENTO</h4>
                    <h4 class="subheading">Aqui seu projeto ganha os primeiros contonos</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/process4.svg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>DEPLOY</h4>
                    <h4 class="subheading">Momento de fazer os ajustes finais e por a cara no mundo</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>Venha
                    <br>para
                <br>Skillancers!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Skillancers</h2>
            <h3 class="section-subheading text-muted">Tudo começou na Digital House</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="rounded-circle" src="img/mesalogin.jpg" alt="" width="150" height= "150">
              <h4>Natália Lira</h4>
              <p class="text-muted">Desenvolvedora</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="rounded-circle" src="img/paocao.jpg" alt="">
              <h4>Luana Maruya</h4>
              <p class="text-muted">Desenvolvedora</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/filhote.jpg" alt="">
              <h4>Lectícia Martins</h4>
              <p class="text-muted">Desenvolvedora</p>
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
          </div>
        </div>
        <div class="col-sm-4">
            <div class="team-member">
              <img class="rounded-circle" src= "" alt="">
              <h4>Bruno Alves</h4>
              <p class="text-muted">Desenvolvedora</p>
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
          </div>

      </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Fale com a Skillancers</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Digite seu Nome*" required="required" data-validation-required-message="Por favor digite seu nome.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email*" required="required" data-validation-required-message="Por favor digite seu e-mail.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Telefone*" required="required" data-validation-required-message="Por favor digite seu número de telefone.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Escreva aqui sua Mensagem*" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
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
                <a href="faq.php">FAQ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h4 class="text-uppercase">e-commerce/camisaria</h4>
                  <p class="item-intro text-muted">Hipsters.pano Camisaria</p>

                  <img class="primeira img-thumbnail rounded float-left" src= "img/jeans.png" alt="" width= "250" height= "320">
                  <img class="segunda img-thumbnail rounded float-right" src= "img/xadrez.jpg" alt="" width= "360" height= "260">
                  <img class="terceira img-thumbnail rounded float-right" src= "img/roupas.jpg" alt="" width= "340" height= "340">
                  <img class="quarta img-thumbnail rounded float-left" src= "img/sapato.jpg" alt="" width= "350" height= "270">



                  <div class= "textao">
                  <p>Vamos oferecer camisas sob-medida para todo Brasil. Vamos trabalhar com uma vasta gama de combinações, que permitem total liberdade para que o cliente crie a camisa que mais se adeque ao seu estilo. A partir da obtenção de suas medidas, através de um prático procedimento online, a camisa é confeccionada respeitando a forma do corpo, minimizando imperfeições e acentuando atributos positivos.</p>
                  <ul class="list-inline">
                    <li>Data da publicação: 15/10/2018</li>
                    <li>Cliente: MiTavares</li>
                    <li>Categoria: E-commerce de vestuário</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    FECHAR</button>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Café Dog Friendly</h2>
                  <p class="item-intro text-muted">Cafésta!</p>

                  <img class="primeira img-thumbnail rounded float-left" src= "img/bolo.jpg" alt="" width= "300" height= "250">
                  <img class="segunda img-thumbnail rounded float-right" src= "img/apple.jpg" alt="" width= "300" height= "100">
                  <img class="quarta img-thumbnail rounded float-left" src= "img/cocoa.jpg" alt="" width= "350" height= "270">
                  <img class="quarta img-thumbnail rounded float-right" src= "img/baked.jpg" alt="" width= "250" height= "200">
                  <img class="terceira img-thumbnail rounded float-right" src= "img/fofura.jpg" alt="" width= "200" height= "150">

                  <div class= "textao">
                  <p>Mais de 500m² destinados à convivência entre pessoas e cachorros, uma carta de cafés aprovadas pelos melhores baristas da cidade e guloseimas de fazer virar os olhinhos e procurar com o  focinho. Fazemos ativismo em defesa dos animais, buscamos tudo que pode melhorar a vida entre cães e pessoas, sim, somos um laboratório de experiências de coisas felizes com nossos amigos de 4 patas!</p>
                  <ul class="list-inline">
                    <li>Data de publicação: 05/11/2018</li>
                    <li>Cliente: PabloSossa</li>
                    <li>Category: E-commerce de eventos</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    FECHAR</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Causas Sociais/E-commerce de flores/Rede Social</h2>
                  <p class="item-intro text-muted">E Vejo Flores Em VC</p>

                  <img class="primeira img-thumbnail rounded float-left" src= "img/flores1.jpg" alt="" width= "350" height= "410">
                  <img class="segunda img-thumbnail rounded float-right" src= "img/vitima.jpg" alt="" width= "230" height= "200">
                  <img class="terceira img-thumbnail rounded float-right" src= "img/flor.jpg" alt="" width= "300" height= "190">
                  <!-- <img class="quarta img-thumbnail rounded float-left" src= "img/sapato.jpg" alt="" width= "350" height= "270"> -->

                  <div class= "textao">
                  <p>Sororidade é nosso foco. Nosso projeto visa a conexão entre mulheres com o intuito de encorajar e fortalecer aquelas que sofrem violêcia doméstica. Fazer a denúncia de seu agressor e continuar o processo policial que é muitas vezes moroso e machista exige apoio e força. Através de um financiamneto coletivo mandamos flores a elas, em gratidão por dividirem sua história conosco e como um símbolo de sororidade e amor-próprio.</p>
                  <ul class="list-inline">
                    <li>Data de publicação: 08/11/2018</li>
                    <li>Cliente: SomosUma</li>
                    <li>Category: Social</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
