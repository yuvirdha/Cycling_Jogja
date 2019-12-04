 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="/">Cycling Jogja</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Beranda
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Beranda</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Bantuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/login">Masuk</a>
              </li>
              @if (Route::has('masuk'))
              <li class="nav-item">
                    @auth
                    @else
                        <a href="{{ route('masuk') }}" class="nav-link js-scroll-trigger">Masuk</a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Daftar</a>
                        
                        @endif
                    @endauth
            @endif
                  </li>
            </ul>
          </div>
        </div>
      </nav>