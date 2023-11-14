<h1>{{ $car->model }}</h1>
<hr>
<a href="{{ route('home.index') }}">Домой</a>
<a href="{{ route('cars.index') }}">Список машин</a>
<hr>
<h2>Бренд - {{ $car->brand }}</h2>
<h3>Цена - {{ $car->price }}</h3>
<a href="{{ route('cars.edit', [$car->id]) }}">Редактировать</a>
<form method="post" action="{{ route('cars.destroy', [$car->id]) }}">
  @method('DELETE')
  @csrf
  <button>Удалить</button>
</form>