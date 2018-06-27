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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/uf/novo', ['as' => 'uf-novo', 'uses' => 'UFController@novo']);

Route::get('/uf/salvar', ['as' => 'uf-salvar', 'uses' => 'UFController@salvar']);

Route::get('/uf/excluir/{id}', ['as' => 'uf-excluir', 'uses' => 'UFController@excluir']);

Route::get('/uf/editar/{id}', ['as' => 'uf-editar', 'uses' => 'UFController@editar']);

Route::get('/uf', ['as' => 'uf', 'uses' => 'UFController@getAll']);

Route::get('/municipios/novo', ['as' => 'municipios-novo', 'uses' => 'MunicipiosController@novo']);

Route::get('/municipios/salvar', ['as' => 'municipios-salvar', 'uses' => 'MunicipiosController@salvar']);

Route::get('/municipios/excluir/{id}', ['as' => 'municipios-excluir', 'uses' => 'MunicipiosController@excluir']);

Route::get('/municipios/editar/{id}', ['as' => 'municipios-editar', 'uses' => 'MunicipiosController@editar']);

Route::get('/municipios', ['as' => 'municipios', 'uses' => 'MunicipiosController@getAll']);

Route::get('/', 'UFController@getAll');
