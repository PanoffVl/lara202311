<x-layout.main title="Posts">
    <ul>
      @foreach($posts as $post)
        <li>{{ $post->id }} <strong>{{ $post->title }}</strong></li>
      @endforeach
    </ul>
</x-layout.main>