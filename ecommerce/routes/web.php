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
    return view('index');
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
//registrarse
Route::get('/registrarse', function (){
    return view('auth/register');
});

//Lista basica de productos sin logearse
Route::get('/listadoProductos', "ProductoController@listaProductos");
//logearse

/*
Route::get('/login', function () {
    return view('login');
});
*/

//una vez que se logea puede acceder a la galeria y a su carrito consecuentemente
Route::get('/carrito',"ProductoController@listaProductosCliente");
//Este seria el detalle del producto
Route::get('/listadoProductos/{id}', "ProductoController@detalleProducto");

#### ABM PARA LOS ADMINISTRADORES ####

Route::get('/admIndex',function(){
    return view('admIndex');
  })->middleware('admin');

############# Marca  ############

#LIST
Route::get('/adminMarcas', 'MarcasController@index')->middleware('admin');
#FORMULARIO AGREGAR
Route::get('/formAgregarMarca', 'MarcasController@create')->middleware('admin');
#ACCION AGREGAR
Route::post('/agregarMarca', 'MarcasController@store')->middleware('admin');
#ACCION BAJAR MARCA
Route::get('/eliminarMarca/{id}','MarcasController@destroy')->middleware('admin');

#FORMULARIO MODIFICAR MARCA
Route::get('/formModificarMarca/{id}', 'MarcasController@edit')->middleware('admin');
#ACCION EDITAR MARCA
Route::post('/editarMarca/{id}','MarcasController@update')->middleware('admin');

############# Categoria  ############

#LIST
Route::get('/adminCategorias', 'CategoriaController@index')->middleware('admin');
#FORMULARIO AGREGAR
Route::get('/formAgregarCategoria', 'CategoriaController@create')->middleware('admin');
#ACCION AGREGAR
Route::post('/agregarCategoria', 'CategoriaController@store')->middleware('admin');
#ACCION BAJAR MARCA
Route::get('/eliminarCategoria/{id}','CategoriaController@destroy')->middleware('admin');

#FORMULARIO MODIFICAR MARCA
Route::get('/formModificarCategoria/{id}', 'CategoriaController@edit')->middleware('admin');
Route::post('/editarCategoria/{id}','CategoriaController@update')->middleware('admin');


############# Stock  ############

#LIST
Route::get('/adminMarcas', 'MarcasController@index')->middleware('admin');
#FORMULARIO AGREGAR
Route::get('/formAgregarMarca', 'MarcasController@create')->middleware('admin');
#ACCION AGREGAR
Route::post('/agregarMarca', 'MarcasController@store')->middleware('admin');
#ACCION BAJAR MARCA
Route::get('/eliminarMarca/{id}','MarcasController@destroy')->middleware('admin');

#FORMULARIO MODIFICAR MARCA
Route::get('/formModificarMarca/{id}', 'MarcasController@edit')->middleware('admin');
Route::post('/editarMarca/{id}','MarcasController@update')->middleware('admin');


############# Producto  ############

#LIST
Route::get('/adminProductos', 'ProductoController@index')->middleware('admin');
#FORMULARIO AGREGAR
Route::get('/formAgregarProducto', 'ProductoController@create')->middleware('admin');
#ACCION AGREGAR
Route::post('/agregarProducto', 'ProductoController@store')->middleware('admin');
#ACCION BAJAR PRODUCTO
Route::get('/eliminarProducto/{id}','ProductoController@destroy')->middleware('admin');

#FORMULARIO MODIFICAR PRODUCTO
Route::get('/formModificarProducto/{id}', 'ProductoController@edit')->middleware('admin');
Route::post('/editarProducto/{id}','ProductoController@update')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
