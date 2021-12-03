<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app.css">
  </head>
  <body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">First Laravel Project</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{ route('reg') }}" class="nav-link">Регистрация</a></li>
        <li class="nav-item"><a href="{{ route('reader') }}" class="nav-link">Админка</a></li>
      </ul>
    </header>

      @yield('fill')

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"></svg>
        </a>
        <span><p>Текущая сессия: {{ session()->get('name') }}</p></span>
      </div>
    </footer>

  </body>
</html>
