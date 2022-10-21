  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <img src="lte/dist/img/porto.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle elevation-3">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="navbar-brand"><b>Ailsa's Portofolio</b></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/about" class="nav-link">About</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/edus" class="nav-link">Education</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/projects" class="nav-link">Post Project</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <img src="lte/dist/img/porto.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
      </li>  
      <li class="nav-item">
        <a href="/home" class="nav-link d-block">Ailsa Isnania</a>
      </li>
      @guest
      <li class="nav-item">
      <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
      </li>
      @endguest
      @auth
      <li class="nav-item">
      <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
      </li>
      @endauth
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
</nav>