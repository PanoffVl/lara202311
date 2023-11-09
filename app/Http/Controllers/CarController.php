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
      'brand' => 'required|min:4|max:100',
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

  public function edit(String $id)
  {
    $car = Car::findOrFail($id);
    return view('cars.edit', ['car'=>$car]);
  }

  public function update(Request $request, $id)
  {
    $validated = $request->validate([
      'brand' => 'required|min:4|max:100',
      'model' => 'required|min:2|max:100',
      'price' => 'required|multiple_of:1000',
    ]);

    $car = Car::find($id);
    if($car->brand !== $validated['brand']) $car->brand = $validated['brand'];
    if($car->model !== $validated['model']) $car->model = $validated['model'];
    if($car->price !== $validated['price']) $car->price = $validated['price'];
    $car->save();

    return redirect("/cars/{$car->id}");
  }

  public function destroy(String $id)
  {
    Car::destroy($id);
    return redirect("/cars/");
  }
}
