@props([
  'title',
  'activeMenu' => $title,
  'h1' => null
])

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  @vite(['resources/css/app.scss', 'resources/fontawesome/css/fontawesome.css', 'resources/fontawesome/css/brands.css', 'resources/fontawesome/css/solid.css'])
</head>
<body>
  <div class="container">
    <div class="position-absolute top-2 right-2 d-md-none">
      <a href="/" class="d-block link-dark" aria-expanded="false">
        <img src="{{ '/img/ghost.png' }}" alt="mdo" width="50" height="50" class="rounded-circle  z-depth-0">
      </a>
    </div>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="d-flex align-items-center col-md-3 mb-2 mb-md-0 logo-text fw-lighter">
        <span class="text-dark">Vanilla</span>Desert
      </div>
      <ul class="nav col-12 col-md-7 mb-2 mb-md-0 justify-content-center justify-content-md-end mb-md-0">
        @foreach(config('menuConfig.menu') as $k => $v)
          <li><a href="{{ route("$v[2]") }}" class="nav-link px-2 {{ $activeMenu === $v[1] ? 'run-color' : 'link-secondary' }}">{{ $v[1] }}</a></li>
        @endforeach
      </ul>

      <div class="text-end col-md-auto d-none d-md-block">
        <a href="/" class="d-block link-dark" aria-expanded="false">
          <img src="{{ '/img/ghost.png' }}" alt="mdo" width="50" height="50" class="rounded-circle  z-depth-0">
        </a>
      </div>
    </header>
  </div>
<div class="container">
  <div class="col text-end">
    <a href="#" class="mx-1"><i class="fa-brands fa-vk  run-color fa-xl"></i></a>
    <a href="#" class="mx-1"><i class="fa-brands fa-whatsapp  run-color fa-xl"></i></a>
    <a href="#" class="mx-1"><i class="fa-brands fa-instagram  run-color fa-xl"></i></a>
  </div>
  <h1>{{ $h1 ?? $title }}</h1>
  {{ $slot }}
</div>
  <x-notifications />
<div class="container">
  <footer class="container text-center text-secondary border-top mt-2 pt-2">
    <i class="fa-regular fa-copyright text-center"></i> Все права защищены.
  </footer>
</div>
@vite(['resources/js/app.js'])
</body>
</html>
