<x-layout.main title="Create new Brand" activeMenu="Brands">
  <x-form action="{{ route('brands.store') }}">
    @include('brands.form')
    <div class="mb-2">
    <button class="btn btn-success">Отправить</button>
    </div>
  </x-form>
</x-layout.main>