<h1>Edit car {{ $car->brand }} - {{ $car->model }}</h1>
<form method="post" action="{{ route('cars.update', [$car->id]) }}">
  @method('PUT')
  @csrf
  <x-input lable="Brand" type="text" name="brand" value="{{ $car->brand }}"/>
  <x-input lable="Model" type="text" name="model" value="{{ $car->model }}"/>
  <x-input lable="Price" type="number" name="price" value="{{ $car->price }}"/>
  <button>Send</button>
</form>