<?php

namespace App\Http\Requests\Cars;

use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Save extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
      return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
      return [
        'brand' => 'required|min:4|max:100',
        'model' => 'required|min:2|max:100',
        'price' => 'required|multiple_of:1000',
        'transmission' => ['required', Rule::in(array_keys(config('carConfig.transmission')))],
        'vin' => ['required', 'min:4', 'max:14' , Rule::unique(Car::class, 'vin')->ignore($this->car->id ?? '')]
      ];
  }

  public function attributes(): array
  {
    return [
      'brand' => 'Бренд',
      'model' => 'Модель',
      'price' => 'Цена',
      'transmission' => 'Коробка передач',
      'vin' => 'Вин'
    ];
  }
}
