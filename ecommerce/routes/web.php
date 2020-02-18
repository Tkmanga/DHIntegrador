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

Route::get('/registrarse', function () {
    return view('registrarse');
});

Route::get('/listadoProductos', function () {
    return view('listadoProductos');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/carrito',function(){
  return view('shoppingCart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
