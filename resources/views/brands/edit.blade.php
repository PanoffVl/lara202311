<x-layout.main title="Edit brand" h1="Edit brand: {{ $brand->title }}"  activeMenu="Brands">
  <x-form action="{{ route('brands.update', [$brand->id]) }}" method="put">
    @bind($brand)
      @include('brands.form')
    @endbind
    <div class="mb-2">
      <button class="btn btn-success">Отправить</button>
    </div>
  </x-form>
</x-layout.main>