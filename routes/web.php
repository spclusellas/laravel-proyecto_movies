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

Route::get('/peliculas', 'PeliculasController@listado');

Route::get('/lasMejores', 'PeliculasController@lasMejores');

// Route::get('/agregarPelicula', function(){
//   return view('agregarPelicula');
// });

Route::get('/detallePelicula/{id}', 'PeliculasController@detalle');

Route::get('/agregarPelicula', 'PeliculasController@formulario');

Route::post('/agregarPelicula', 'PeliculasController@agregar');

Route::get('/eliminarPelicula/{id}', 'PeliculasController@eliminar');
