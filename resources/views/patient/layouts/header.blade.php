<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              HOPITAL PRINCIPALE DE DAKAR
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="departments.html">Departement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.html">Nos Docteurs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    @yield('content')
    <!-- end header section -->