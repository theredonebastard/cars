<?php

use Illuminate\Http\Request;

use App\Car;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cars', 'CarsController@index')->name('cars');
Route::get('cars/{id}', 'CarsController@show')->name('car');
Route::post('cars', 'CarsController@store')->name('car-store');
Route::put('cars/{id}', 'CarsController@update')->name('car-update');
Route::delete('cars/{id}', 'CarsController@delete')->name('car-delete');
