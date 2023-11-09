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
    return view('cars.index', ['cars' => $cars]);
  }

  public function create()
  {
    return view('cars.create');
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'brand' => 'required|min:2|max:100',
      'model' => 'required|min:2|max:100',
      'price' => 'required|multiple_of:1000',
    ]);

    $car = Car::create($validated);
    return redirect("/cars/{$car->id}");
  }

  public function show(String $id)
  {
    $car = Car::findOrFail($id);
    return view('cars.show', ['car'=>$car]);
  }

  /**
   * Update the specified resource in storage.
   *
   * public function update(Request $request, Car $car)
   * {
   * //
   * }
   *
   * /**
   * Remove the specified resource from storage.
   *
   * public function destroy(Car $car)
   * {
   * //
   * }
   */
}
