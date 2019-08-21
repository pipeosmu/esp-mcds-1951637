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

// Route::post('/hola-mundo', function(){
//     return 'Hola esto es una prueba de una ruta basica utilizando laravel POST';
// });


// Route::get('contacto/{nombre?}/{edad?}',function($nombre="felipe", $edad = 23){
//     return view('contacto', array(
//     	"nombre" => $nombre,
//     	"edad" => $edad
//     ));
// });
