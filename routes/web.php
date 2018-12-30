<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/flower', 'FlowerController@index');
Route::get('/flower', function ()
{
    return \App\Http\Resources\Flower::collection(\App\Kurier::all());
});

Route::post('/flower/', function ()
{
    return \App\Http\Resources\Flower::collection(\App\Kurier::all());
});

Route::get('/flower/create', 'FlowerController@create');
