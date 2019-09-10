<header>
  <nav class="navbar navbar-expand-sm">

    <!-- Logo -->
    <a href="/" class="navbar-brand">
      <img src="{{asset('imgs/imagens_cortadas/torabit_shop.png')}}" width=" 200">
    </a>

    <!-- Menu Hamburguer -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target2">
      <div class="btnH topob"></div>
      <div class="btnH"></div>
      <div class="btnH"></div>
      <!-- <span class="navbar-toggler-icon"></span> -->
    </button>

    <!-- navegação -->
    <div class="collapse navbar-collapse" id="nav-target2">

      <div class="input-group">
      <!--  <input class="form-control" type="text" placeholder="Pesquisar">  -->
        <div class="input-group-append">
         <!-- <button type="button" class="btn search">
            <p>busca</p>
          </button>   -->
        </div>
      </div>

      <ul class="navbar-nav">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
         

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          


          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:40px; height:40px; position:absolute; top:-5px; left:5px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            

                            <ul class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="{{ url('/profile') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Profile') }}
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
                            </ul>
                        </li>

                        














            
            
            

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest

        <li class="nav-item">
          <a href="/carrinho" class="nav-link">
            <img src="{{asset('imgs/imagens_cortadas/carrinho.png')}}" width="30">
          </a>
        </li>
      </ul>

    </div>
  </nav>
</header>

<nav id="nav2">
  <div class="container">
    <div class="navb">

      <span><a href="/sobre">Sobre o Torabit</a></span>
      <span><a href="https://datatorapolitica.torabit.com.br/radar-login.py" target="_blank">DATATORA</a></span>
      <span><a href="http://www.torabit.com.br/" target="_blank">Full Service</a></span>
      <span><a href="{{('profile')}}">Área do Cliente</a></span>
      <span><a href="/contato">Contato</a></span>

    </div>
  </div>
</nav>

</body>

</html>