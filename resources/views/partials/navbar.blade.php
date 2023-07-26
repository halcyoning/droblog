<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">DR<i class="bi bi-slack"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'home') ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'about') ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (isset($active)) ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Post Categories') ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'team') ? 'active' : '' }}" href="/team">Our team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Comunity') ? 'active' : '' }}" href="/comunity">Comunity</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout <i class="bi bi-box-arrow-right"></i></button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="nav item">
              <a href="/login" class="nav-link {{ ($title == 'Login') ? 'active' : '' }}">
                Login <i class="bi bi-box-arrow-in-right"></i></a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>