<x-layout.main title="Create new car" activeMenu="Cars">
  <x-form action="{{ route('cars.store') }}">
    @include('cars.form')
    <div class="mb-2">
    <button class="btn btn-success">Отправить</button>
    </div>
  </x-form>
</x-layout.main>