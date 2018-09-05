<?php

Route::get ('/index', 'MovieController@index');

//Filmes
Route::get ('/filmes', 'MovieController@exibirFilmes');
Route::get ('/filmes/cadastrar', 'MovieController@exibirform');
Route::put ('/filmes/cadastrar', 'MovieController@cadastrar');

Route::get ('/filmes/delete/{id}', 'MovieController@delete');

Route::get ('/filmes/edit/{id}', 'MovieController@editform');
Route::put ('/filmes/edit/{id}', 'MovieController@update');

//Atores
Route::get ('/atores', 'ActorController@directory');
Route::get ('/atores/cadform', 'ActorController@exibirform');
Route::put ('/atores/cadastrar', 'ActorController@cadastrar');
Route::get ('/atores/edit/{id}', 'ActorController@editform');
Route::put ('/atores/edit/{id}', 'ActorController@update');
Route::get ('/atores/filmes/{id}', 'ActorController@filmes');

Route::get ('/atores/formbuscar', 'ActorController@formbuscar');
Route::put ('/atores/buscar', 'ActorController@search');
Route::get ('/atores/{id}', 'ActorController@show');
Route::get ('/atores/delete/{id}', 'ActorController@delete');
Route::get ('/atores/procurar/{nome}', 'ActorController@search');
Route::post ('/atores/store', 'ActorController@store');


//Genero
Route::get ('/genres/exibir', 'GenresController@exibirGenres');
Route::get ('/genres/{id}', 'GenresController@show');
Route::get ('/genres/listarfilmes/{id}', "GenresController@exibirFilmes");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
