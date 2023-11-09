<h1>Cars</h1>
<ul>
  @foreach($cars as $car)
    <li>{{ $car->brand }} - {{ $car->model }}: {{ $car->price }}</li>
  @endforeach
</ul>