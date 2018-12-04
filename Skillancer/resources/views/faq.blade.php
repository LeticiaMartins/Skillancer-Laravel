@extends('layouts.app')

@section('css-custom', '/css/faq.css')
@section('content')

    <!-- F.A.Q. -->
        <div class="container main">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">faq</h2>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="list-group help-group">
              <div class="faq-list list-group nav nav-tabs">
                <a href="#tab1" id="a" class="list-group-item active" role="tab" data-toggle="tab">Perguntas Frequentes</a>
                <a href="#tab2" id="b" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-account"></i> Meu Perfil</a>
                <a href="#tab3" id="c" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-account-settings"></i> Minha Conta</a>
                <a href="#tab4" id="d" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-star"></i> Desenvolvedores</a>
                <a href="#tab5" id="e" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-cart"></i> Pagamento</a>
              </div>
            </ul>
          </div>
          <div class="col-md-8">
            <div class="tab-content panels-faq">
              <div class="tab-pane active" id="tab1">
                <div class="panel-group" id="help-accordion-1">
                  <div class="panel panel-help">
                    <a href="#help-one" data-toggle="collapse" data-parent="#help-accordion-1">
                      <div class="panel-heading" id="t1">
                        <h2>Só uma empresa que se importa com o cliente criaria uma plataforma tão completa que responda todas suas perguntas</h2>
                      </div>
                    </a>
                     <!-- <div id="help-one" class="collapse in"> -->
                      <div class="panel-body">
                      <img class="img-f" src="./image/foto_faq.jpg">
                      </div>
                    <!-- </div> -->
                  </div>
                </div>
              </div>
              <!-- 2 -->
              <div class="tab-pane" id="tab2">
                <div class="panel-group" id="help-accordion-2">
                  <div class="panel panel-help">
                    <a href="#help-two" data-toggle="collapse" data-parent="#help-accordion-2">
                      <div class="panel-heading">
                        <h2>Como alterar foto de perfil?</h2>
                      </div>
                    </a>
                    <div id="help-two" class="collapse in">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-help">
                    <a href="#help-two1" data-toggle="collapse" data-parent="#help-accordion-2">
                      <div class="panel-heading">
                        <h2>Onde configuro a privacidade do meu perfil?</h2>
                      </div>
                    </a>
                    <div id="help-two1" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-help">
                    <a href="#help-two2" data-toggle="collapse" data-parent="#help-accordion-2">
                      <div class="panel-heading">
                        <h2>Preciso cadastrar um novo e-mail.</h2>
                      </div>
                    </a>
                    <div id="help-two2" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 3 -->
              <div class="tab-pane" id="tab3">
                <div class="panel-group" id="help-accordion-3">
                  <div class="panel panel-default panel-help">
                    <a href="#help-three" data-toggle="collapse" data-parent="#help-accordion-3">
                      <div class="panel-heading">
                        <h2>Como alterar minha senha?</h2>
                      </div>
                    </a>
                    <div id="help-three" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-help">
                    <a href="#help-three1" data-toggle="collapse" data-parent="#help-accordion-3">
                      <div class="panel-heading">
                        <h2>Cancelar Conta</h2>
                      </div>
                    </a>
                    <div id="help-three1" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 4 -->
              <div class="tab-pane" id="tab4">
                <div class="panel-group" id="help-accordion-4">
                  <div class="panel panel-default panel-help">
                    <a href="#help-four" data-toggle="collapse" data-parent="#help-accordion-4">
                      <div class="panel-heading">
                        <h2>Como alterar minha senha?</h2>
                      </div>
                    </a>
                    <div id="help-four" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-help">
                    <a href="#help-four1" data-toggle="collapse" data-parent="#help-accordion-4">
                      <div class="panel-heading">
                        <h2>Onde encontro o portifólio?</h2>
                      </div>
                    </a>
                    <div id="help-four1" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 5 -->
              <div class="tab-pane" id="tab5">
                <div class="panel-group" id="help-accordion-5">
                  <div class="panel panel-default panel-help">
                    <a href="#help-five" data-toggle="collapse" data-parent="#help-accordion-5">
                      <div class="panel-heading">
                        <h2>Quando o desenvolvedor disponibiliza o projeto após o pagamento?</h2>
                      </div>
                    </a>
                    <div id="help-five" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-help">
                    <a href="#help-five1" data-toggle="collapse" data-parent="#help-accordion-5">
                      <div class="panel-heading">
                        <h2>Quantos dias tenho para cancelar o pedido e ter o reembolso?</h2>
                      </div>
                    </a>
                    <div id="help-five1" class="collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                        <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
          <div class="clearfix">

          </div>
        </div>

@stop
