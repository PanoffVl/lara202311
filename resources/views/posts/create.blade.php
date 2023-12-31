<x-layout.main title="Create post" h1="Создание нового поста" activeMenu="Posts">
  <form method="post" action="/posts">
    @csrf
    <div>Title: <input name="title" value="{{ old('title') }}"></div>
    <div>Content: <textarea name="content">{{ old('content') }}</textarea></div>
    <hr>
    @if ($errors->any())
      <div style="color: red">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <hr>
    <button>Send</button>
  </form>
</x-layout.main>