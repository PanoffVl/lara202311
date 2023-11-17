<x-layout.main title="Post" activeMenu="Posts">
  <h2>{{ $post->title }}</h2>
  <div>
    {{ $post->content }}
  </div>
</x-layout.main>