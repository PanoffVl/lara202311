@props([
  'lable',
  'type',
  'name',
  'value' => ''
])

<div>{{ $lable }}: <input type="{{ $type }}" name="{{ $name }}" value="{{ $errors->any() ? old($name) : $value }}"></div>
<div style="color: red; font-size: 10px">
  @error($name)
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
</div>