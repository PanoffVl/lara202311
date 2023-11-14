<h1>Cars</h1>
<hr>
<a href="{{ route('cars.create') }}">Добавить новую машину</a>
<hr>
<ul>
  @foreach($cars as $car)
        <a href="{{ route('cars.show', [$car->id]) }}"><li>{{ $car->brand }} - {{ $car->model }}: {{ $car->price }}</li></a>
  @endforeach
</ul>