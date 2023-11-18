<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brands\Store as BrandsStore;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
      $brands = Brand::orderByDesc('created_at')->get();
      return view('brands.index', compact('brands'));
    }

    public function create()
    {
      return view('brands.create');
    }

    public function store(BrandsStore $request)
    {
      $brand = Brand::create($request->validated());
      return redirect()->route('brands.show', [$brand->id])->with('alerts', trans('alerts.brands.created'));
    }

    public function show(Brand $brand)
    {
      return view('brands.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
      return view('brands.edit', compact('brand'));
    }

    public function update(BrandsStore $request, Brand $brand)
    {
      $brand->update($request->validated());
      return redirect()->route('brands.show', [$brand->id])->with('alerts', trans('alerts.brands.edited'));
    }

    public function destroy(Brand $brand)
    {
      $brand->delete();
      return redirect()->route('brands.index')->with('alerts', trans('alerts.brand.deleted'))->with('alerts', trans('alerts.brands.deleted'));
    }
}
