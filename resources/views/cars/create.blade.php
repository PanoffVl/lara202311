<h1>Create new car</h1>
<form method="post" action="/cars">
  @csrf
  <div>Brand: <input type="text" name="brand" value="{{ old('brand') }}"></div>
  <div>Model: <input type="text" name="model" value="{{ old('model') }}"></div>
  <div>Price: <input type="number" name="price" value="{{ old('price') }}"></div>
  @if ($errors->any())
    <div style="color: red">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <button>Send</button>
</form>