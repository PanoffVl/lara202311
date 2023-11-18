<x-layout.main title="Brands" h1="Список брендов">
        <a href="{{ route('brands.create') }}">Добавить новый бренд</a>
        <hr>
        <ul>
          @foreach($brands as $brand)
                <a href="{{ route('brands.show', [$brand->id]) }}"><li>{{ $brand->title }} - {{ $brand->description }}</li></a>
          @endforeach
        </ul>
</x-layout.main>