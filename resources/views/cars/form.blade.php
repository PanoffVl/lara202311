<div class="mb-2">
  <x-form-input name="brand" label="Бренд" />
</div>
<div class="mb-2">
  <x-form-input name="model" label="Модель" />
</div>
<div class="mb-2">
  <x-form-input name="price" label="Цена" />
</div>
<div class="mb-2">
  <x-form-select name="transmission" label="Коробка передач" :options="$transmission" placeholder="тип коробки" />
</div>
<div class="mb-2">
  <x-form-input name="vin" label="Vin" />
</div>