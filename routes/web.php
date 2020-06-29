<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/imoveis', 'PropertyController@index')->name('property.index');

Route::get('/imoveis/cadastro', 'PropertyController@create')->name('property.create');
Route::post('/imoveis/store', 'PropertyController@store')->name('property.store');

Route::get('imoveis/{name}', 'PropertyController@show')->name('property.show');

Route::get('imoveis/editar/{name}', 'PropertyController@edit')->name('property.edit');
Route::put('imoveis/update/{id}', 'PropertyController@update')->name('property.update');

Route::get('Imoveis/delete/{name}', 'PropertyController@destroy')->name('property.destroy');
