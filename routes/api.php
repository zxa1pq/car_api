<?php

use Illuminate\Http\Request;

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


//List cars
Route::get('cars', 'CarController@index');

//List single car
Route::get('car/{id}', 'CarController@show');

//create new car
Route::post('car', 'CarController@store');

//update car
Route::put('car', 'CarController@store');

//delete car
Route::delete('car/{id}', 'CarController@destroy');
