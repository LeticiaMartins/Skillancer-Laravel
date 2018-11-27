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
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/faq">FAQ</a>
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
