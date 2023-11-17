<x-layout.main title="Edit car" h1="Edit car: {{ $car->brand }} {{ $car->model }}"  activeMenu="Cars">
  <x-form action="{{ route('cars.update', [$car->id]) }}" method="put">
    @bind($car)
      @include('cars.form')
    @endbind
    <div class="mb-2">
      <button class="btn btn-success">Отправить</button>
    </div>
  </x-form>
</x-layout.main>