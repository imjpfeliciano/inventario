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

Route::get('home/usuarios/', 'UsuariosController@index');
Route::get('home/usuarios/nuevo', 'UsuariosController@create');
Route::post('home/usuarios/nuevo', 'UsuariosController@store');

Route::get('productos/', 'ProductosController@index');
Route::get('home/productos/', 'ProductosController@index');
Route::get('home/productos/nuevo', 'ProductosController@create');
Route::post('home/productos/nuevo', 'ProductosController@store');
Route::get('home/productos/{id}/editar', 'ProductosController@edit');
Route::post('home/productos/{id}/editar','ProductosController@update');
Route::get('home/productos/{id}/eliminar', 'ProductosController@destroy');
Route::get('home/productos/get/{id}', ['as' => 'getentry', 'uses' => 'ProductosController@show']);

Route::get('home/categorias/', 'CategoriaController@index');
Route::get('home/categorias/nuevo', 'CategoriaController@create');
Route::post('home/categorias/nuevo', 'CategoriaController@store');
Route::get('home/categorias/{id}', ['as' => 'getcategoria', 'uses' => 'CategoriaController@show']);
//Route::resource('categorias', 'CategoriaController');
//Route::resource('productos', 'ProductosController');

Route::get('current', function(){
	return URL::current();
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
