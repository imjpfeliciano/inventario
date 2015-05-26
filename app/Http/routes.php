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





//Route::get('usuario', 'UsuariosController@create');

Route::get('productos/', 'ProductosController@index');
Route::get('productos/nuevo', 'ProductosController@create');
Route::post('productos/nuevo', 'ProductosController@store');
Route::get('productos/{id}/editar', 'ProductosController@edit');
Route::post('productos/{id}/editar','ProductosController@update');
Route::get('productos/{id}/eliminar', 'ProductosController@destroy');


Route::resource('categorias', 'CategoriaController');
//Route::resource('productos', 'ProductosController');
Route::get('productos/get/{id}', ['as' => 'getentry', 'uses' => 'ProductosController@show']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
