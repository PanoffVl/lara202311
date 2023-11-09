<h1>{{ $car->model }}</h1>
<hr>
<a href="/">Домой</a>
<hr>
<h2>Бренд - {{ $car->brand }}</h2>
<h3>Цена - {{ $car->price }}</h3>
<a href="/cars/edit/{{ $car->id }}">Редактировать</a>
<a href="/cars/delete/{{ $car->id }}">Удалить</a>