<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
     public function index()
    {
        $cars = Car::latest()->get();
        $availableCount = $cars->where('status', 'available')->count();

        return view('admin.cars.index', compact('cars', 'availableCount'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'plate_number' => 'required|unique:cars',
            'price_per_day' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable|image',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('cars', 'public');
        }

        Car::create([
            'car_name' => $request->car_name,
            'plate_number' => $request->plate_number,
            'price_per_day' => $request->price_per_day,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => 'available',
        ]);

        return redirect('/admin/cars');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $car->update($request->only([
            'car_name',
            'plate_number',
            'price_per_day',
            'description',
            'status',
        ]));

        return redirect('/admin/cars');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return back();
    }
}
