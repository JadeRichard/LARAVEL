<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $car = Car::all();
        return view('back.cars.all', compact('car'));
    }

    public function destroy($id){
        $car = Car::find($id);
        $car->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function edit($lid){
        $car = Car::find($lid);
        return view('back.cars.edit', compact('car'));
    }

    public function update($id, Request $request) {
        $car = Car::find($id);
        $car->brand = $request->brand;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->price = $request->price;
        $car->reduction = $request->reduction;
        $car->updated_at = now();
        $car->save();
        return redirect()->route("back.cars.all")->with('message', 'Element updated');
    }

    public function create(){
        return view("back.cars.create");
    }

    public function store(Request $request){
        $car = new Car;
        $validated = $request->validate([
            'brand' => 'required',
            'year' => 'required',
            'color' => 'required',
            'price' => 'required',
            'reduction' => 'required',
        ]);
        $car->brand = $request->brand;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->price = $request->price;
        $car->reduction = $request->reduction;
        $car->updated_at = now();
        $car->save();
        return redirect()->route("back.cars.all")->with('message', 'Element created');
    }
}
