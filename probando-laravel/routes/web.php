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

Route::get('/hola-mundo', function () {
    return view('hola-mundo');
});

Route::post('/hola-mundo', function () {
    return 'Hola Mundo soy Joan Bascur por POST';
});


Route::get('/contact/{nombre?}/{edad?}', function ($nombre = "Joan", $edad = 37) {
    /**
    return view('contact', array(
        "nombre" => $nombre,
        "edad" => $edad
    ));
     */
    return view('contacto.contact')
        ->with('nombre', $nombre)
        ->with('edad', $edad)
        ->with('frutas', array('naranja','pera','sandia','fresa'));

})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'  
]);
