@extends('layouts.app')
@section('content')

    <!-- header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">

          <div class="intro-lead-in">Skillancers<img class="big-logo" src = "img/logos/logo.png" alt = "Skillancers"></div>
          <div class="intro-heading text-uppercase">O FREELA IDEAL PARA VOCE</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contact">fale com a gente</a>
        </div>
      </div>
    </header>

    <!-- nossos servicos -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">NOSSOS SERVIÇOS</h2>

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

    <!-- projetos e equipe -->
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">projetos em fase de construção</h2>
            <h3 class="section-subheading text-muted">três projetos, três propostas diferentes, veja como a publicação de um projeto na Skillancers fala muito sobre seu potencial...depois disso é só escolher o/a desenvolvedor ideal para você</h3>
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

    <!-- passo a passo -->
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

    <!-- equipe -->
    <section  id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Skillancers</h2>
            <h3 class="section-subheading text-muted">Tudo começou na Digital House</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="team-member">
              <img class="rounded-circle" src="images/nathalia.jpg" alt="">
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
          <div class="col-sm-3 col-lg-3">
            <div class="team-member">
              <img class="rounded-circle" src="images/luana.jpg" alt="">
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
          <div class="col-sm-3 col-lg-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="images/leticia.jpg" alt="">
              <h4>Leticia Martins</h4>
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
                  <a href="www.linkedin.com/in/leticia-martins-b8026a16a">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="team-member">
              <img class="rounded-circle" src= "images/bruno.jpg" alt="">
              <h4>Bruno Alves</h4>
              <p class="text-muted">Desenvolvedor</p>
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
        </div>
        
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- parcerias -->
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

    <!-- entre em contato -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Fale com a Skillancers</h2>
            <h3 class="section-subheading text-muted">A qualquer momento, não hesite em entrar em contato.</h3>
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

    <!-- projeto modals -->
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

                  <!-- detalhes do projeto -->
                  <div class="container center">
                    <div class="projeto-exibir">
                      <h4 class="text-uppercase text-center">{{$projeto->titulo}}</h4>
                        <p class="item-intro text-muted text-center">{{$projeto->descricao}}</p>
                          <img class="primeira img-thumbnail rounded mx-auto d-block" src= "{{$projeto->imagem_url}}" alt="" width= "500" height= "500">
                          <br>
                        <div class= "textao">
                          <ul class="list-inline">
                            <li>Data da publicação: 15/10/2018</li>;
                            <li>Categoria: {{$projeto->tipo_servico}}</li>
                          </ul>
                        </div>
                    </div>
                  </div>
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

    <!-- modal 2 -->
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

                  <!-- detalhes do projeto -->
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
    </div>

    <!-- modal 3 -->
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
                  <!-- detalhes do projeto -->
                  <h2 class="text-uppercase">Causas Sociais/E-commerce de flores/Rede Social</h2>
                  <p class="item-intro text-muted">E Vejo Flores Em VC</p>

                  <img class="primeira img-thumbnail rounded float-left" src= "img/flores1.jpg" alt="" width= "350" height= "410">
                  <img class="segunda img-thumbnail rounded float-right" src= "img/vitima.jpg" alt="" width= "230" height= "200">
                  <img class="terceira img-thumbnail rounded float-right" src= "img/flor.jpg" alt="" width= "300" height= "190">

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

    <!-- modal 4 -->
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
                  <!-- detalhes do projeto -->
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

    <!-- modal 5 -->
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
                  <!-- detalhes do projeto -->
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

    <!-- modal 6 -->
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
                  <!-- detalhes do projeto -->
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

    


@stop
