<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cars\Save as SaveRequest;
use App\Models\Car;

class CarController extends Controller
{
  public function index()
  {
    $cars = Car::orderByDesc('created_at')->get();
    return view('cars.index', compact('cars'));
  }

  public function create()
  {
    $transmission = config('carConfig.transmission');
    return view('cars.create', compact('transmission'));
  }

  public function store(SaveRequest $request)
  {
    $car = Car::create($request->validated());
    return redirect()->route('cars.show', [$car->id]);
  }

  public function show(Car $car)
  {
    return view('cars.show', compact('car'));
  }

  public function edit(Car $car)
  {
    $transmission = config('carConfig.transmission');
    return view('cars.edit', compact('car', 'transmission'));
  }

  public function update(SaveRequest $request, Car $car)
  {
    $car->update($request->validated());
    return redirect()->route('cars.show', [$car->id]);
  }

  public function destroy(Car $car)
  {
    $car->delete();
    return redirect()->route('cars.index')->with('alerts', trans('alerts.cars.deleted'));
  }
}
