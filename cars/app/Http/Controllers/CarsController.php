<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
//	TODO: tax output in all methods
    public function index() {
		return Car::all();
	}

	public function show($id) {
		return Car::findOrFail($id);
	}


	public function store(Request $request) {
		return Car::create($request->all());
	}

	public function update(Request $request, $id) {
		$car = Car::findOrFail($id);
		$car->update($request->all());
		return $car;
	}

	public function delete($id) {
		$car = Car::findOrFail($id);
		$car->delete();
		return 204;
	}
}
