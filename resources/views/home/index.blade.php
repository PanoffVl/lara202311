<x-layout.main title="Home" h1="Домашняя страница">
  <ul>
    <li><a href="{{ route('cars.index') }}">Машины</a></li>
    <li><a href="{{ route('posts.index') }}">Посты</a></li>
  </ul>
</x-layout.main>