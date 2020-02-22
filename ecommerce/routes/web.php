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

Route::get('/compreya', function () {
    return view('index');
});

Route::get('/fqa', function () {
    return view('fqa');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/registrarse', function (){
    return view('auth/register');
});

//Lista basica de productos sin logearse
Route::get('/listadoProductos', "ProductoController@listaProductos");
//logearse
Route::get('/login', function () {
    return view('login');
});

//una vez que se logea puede acceder a su carrito
Route::get('/carrito',"ProductoController@listaProductosCliente");
//Este seria el detalle del producto
Route::get('/listadoProductos/{id}', "ProductoController@detalleProducto");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
