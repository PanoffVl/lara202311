<?php

namespace App\Http\Requests\Brands;

use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'title' => 'required|min:2|max:100',
      'description' => 'required|min:2|max:1000'
    ];
  }

  public function attributes(): array
  {
    return [
      'title' => 'Наименование',
      'description' => 'Описание'
    ];
  }
}
