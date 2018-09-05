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

Route::get('/atores', 'ActorController@directory');
Route::get('/atores/{id}', 'ActorController@show');
Route::get('/atores/procurar/{nome}', 'ActorController@search');
Route::post('/atores/store', 'ActorController@store');

Route::get('/movies', 'MovieController@directory');
Route::get('/movies/{id}', 'MovieController@show');
Route::get('/movies/procurar/{title}', 'MovieController@search');
Route::post('/movies/store', 'MovieController@store');