<div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="../" class="navbar-brand">GUESTBOOK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
          </ul>

          <ul class="nav navbar-nav ml-auto">
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li class="nav-item dropdown">
              <a class="nav-link" href="/login" id="download">Login</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="/register" id="download">Register</a>
          </li>
          @else
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">{{ Auth::user()->name }}</a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="/dashboard">Dashboard</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </div>
            </li>
            @endif
          </ul>

        </div>
      </div>
    </div>