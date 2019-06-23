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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/pagos', 'HomeController@pagos')->name('pagos');
Route::get('/pago/crear', 'HomeController@crear_pago')->name('crear_pago');
Route::post('/pago/guardar', 'HomeController@guardar_pago')->name('guardar_pago');
Route::get('/pago/respuesta/{reference}', 'HomeController@respuesta_pago')->name('respuesta_pago');
Route::get('/pago/detalle/{pago}', 'HomeController@detalles_pago')->name('detalles_pago');

Route::get('/clientes','ClientController@index')->name('clientes');
Route::get('/clientes/crear','ClientController@create')->name('crear_cliente');
Route::get('/clientes/editar/{id}','ClientController@create')->name('editar_cliente');
Route::get('/clientes/eliminar/{id}','ClientController@create')->name('eliminar_cliente');
Route::post('/clientes/store/','ClientController@store')->name('store_cliente');


