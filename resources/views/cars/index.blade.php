<x-layout.main title="Cars" h1="Список авто">
        <x-notifications />
        <a href="{{ route('cars.create') }}">Добавить новую машину</a>
        <hr>
        <ul>
          @foreach($cars as $car)
                <a href="{{ route('cars.show', [$car->id]) }}"><li>{{ $car->brand }} - {{ $car->model }}: {{ $car->price }}</li></a>
          @endforeach
        </ul>
</x-layout.main>