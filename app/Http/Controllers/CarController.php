<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;

class CarController extends Controller
{
  public function index()
  {
    $cars = Car::all();
    return view('cars.index', compact('cars'));
  }

  public function create()
  {
    return view('cars.create');
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'brand' => 'required|min:4|max:100',
      'model' => 'required|min:2|max:100',
      'price' => 'required|multiple_of:1000',
    ]);

    $car = Car::create($validated);
    return redirect()->route('cars.show', [$car->id]);
  }

  public function show(String $id)
  {
    $car = Car::findOrFail($id);
    return view('cars.show', compact('car'));
  }

  public function edit(String $id)
  {
    $car = Car::findOrFail($id);
    return view('cars.edit', compact('car'));
  }

  public function update(Request $request, $id)
  {
    $car = Car::findOrFail($id);

    $validated = $request->validate([
      'brand' => 'required|min:4|max:100',
      'model' => 'required|min:2|max:100',
      'price' => 'required|multiple_of:1000',
    ]);

    $car->update($validated);
    return redirect()->route('cars.show', [$car->id]);
  }

  public function destroy(String $id)
  {
    $car = Car::findOrFail($id);
    $car->delete();
    return redirect()->route('cars.index');
  }
}
