<h1>Значение Some: {{ $some }}</h1>
<ul>
  @foreach($posts as $post)
    <li>{{ $post['id'] }}</li>
  @endforeach
</ul>