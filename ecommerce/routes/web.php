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
//registrarse
Route::get('/registrarse', function (){
    return view('auth/register');
});

//Lista basica de productos sin logearse
Route::get('/listadoProductos', "ProductoController@listaProductos");
//logearse
Route::get('/login', function () {
    return view('login');
});

//una vez que se logea puede acceder a la galeria y a su carrito consecuentemente
Route::get('/carrito',"ProductoController@listaProductosCliente");
//Este seria el detalle del producto
Route::get('/listadoProductos/{id}', "ProductoController@detalleProducto");

#### ABM PARA LOS ADMINISTRADORES ####

Route::get('/admIndex',function(){
    return view('admIndex');
  });

############# Marca  ############

#LIST
Route::get('/adminMarcas', 'MarcasController@index');
#FORMULARIO AGREGAR
Route::get('/formAgregarMarca', 'MarcasController@create');
#ACCION AGREGAR
Route::post('/agregarMarca', 'MarcasController@store');
#ACCION BAJAR MARCA
Route::get('/eliminarMarca/{id}','MarcasController@destroy');

#FORMULARIO MODIFICAR MARCA
Route::get('/formModificarMarca/{id}', 'MarcasController@edit');
#ACCION EDITAR MARCA
Route::post('/editarMarca/{id}','MarcasController@update');

############# Categoria  ############

#LIST
Route::get('/adminCategorias', 'CategoriaController@index');
#FORMULARIO AGREGAR
Route::get('/formAgregarCategoria', 'CategoriaController@create');
#ACCION AGREGAR
Route::post('/agregarCategoria', 'CategoriaController@store');
#ACCION BAJAR MARCA
Route::get('/eliminarCategoria/{id}','CategoriaController@destroy');

#FORMULARIO MODIFICAR MARCA
Route::get('/formModificarCategoria/{id}', 'CategoriaController@edit');
Route::post('/editarCategoria/{id}','CategoriaController@update');


############# Stock  ############

#LIST
Route::get('/adminMarcas', 'MarcasController@index');
#FORMULARIO AGREGAR
Route::get('/formAgregarMarca', 'MarcasController@create');
#ACCION AGREGAR
Route::post('/agregarMarca', 'MarcasController@store');
#ACCION BAJAR MARCA
Route::get('/eliminarMarca/{id}','MarcasController@destroy');

#FORMULARIO MODIFICAR MARCA
Route::get('/formModificarMarca/{id}', 'MarcasController@edit');
Route::post('/editarMarca/{id}','MarcasController@update');


############# Producto  ############

#LIST
Route::get('/adminProductos', 'ProductoController@index');
#FORMULARIO AGREGAR
Route::get('/formAgregarProducto', 'ProductoController@create');
#ACCION AGREGAR
Route::post('/agregarProducto', 'ProductoController@store');
#ACCION BAJAR PRODUCTO
Route::get('/eliminarProducto/{id}','ProductoController@destroy');

#FORMULARIO MODIFICAR PRODUCTO
Route::get('/formModificarProducto/{id}', 'ProductoController@edit');
Route::post('/editarProducto/{id}','ProductoController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
