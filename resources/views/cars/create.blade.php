<h1>Create new car</h1>
<form method="post" action="{{ route('cars.store') }}">
  @csrf
  <x-input lable="Brand" type="text" name="brand"/>
  <x-input lable="Model" type="text" name="model"/>
  <x-input lable="Price" type="number" name="price"/>
  <button>Send</button>
</form>