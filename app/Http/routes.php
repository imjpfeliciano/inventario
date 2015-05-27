<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('usuarios/', 'UsuariosController@index');
Route::get('usuarios/nuevo', 'UsuariosController@create');
Route::post('usuarios/nuevo', 'UsuariosController@store');

Route::get('productos/', 'ProductosController@index');
Route::get('productos/nuevo', 'ProductosController@create');
Route::post('productos/nuevo', 'ProductosController@store');
Route::get('productos/{id}/editar', 'ProductosController@edit');
Route::post('productos/{id}/editar','ProductosController@update');
Route::get('productos/{id}/eliminar', 'ProductosController@destroy');
Route::get('productos/get/{id}', ['as' => 'getentry', 'uses' => 'ProductosController@show']);

Route::get('categorias/', 'CategoriaController@index');
Route::get('categorias/nuevo', 'CategoriaController@create');
Route::post('categorias/nuevo', 'CategoriaController@store');
Route::get('categorias/{id}', ['as' => 'getcategoria', 'uses' => 'CategoriaController@show']);
//Route::resource('categorias', 'CategoriaController');
//Route::resource('productos', 'ProductosController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
