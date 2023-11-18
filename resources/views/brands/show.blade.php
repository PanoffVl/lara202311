<x-layout.main title="Show Brand" h1="Детали бренда {{ $brand->title }}" activeMenu="Brands">
  <a href="{{ route('home.index') }}">Домой</a>
  <a href="{{ route('brands.index') }}">Список брендов</a>
  <hr>
  <h2>Наименование - {{ $brand->title }}</h2>
  <h2>Описание - {{ $brand->description }}</h2>
  <a href="{{ route('brands.edit', [$brand->id]) }}">Редактировать</a>
  <form method="post" action="{{ route('brands.destroy', [$brand->id]) }}">
    @method('DELETE')
    @csrf
    <button>Удалить</button>
  </form>
</x-layout.main>