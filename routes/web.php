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
    return view('catalogo');
});


Route::get('prom', function () {
    return view('prom');
});

Route::get('comentarios', function () {
    return view('comentarios');
});


Route::get('carrito', function () {
    return view('carrito');
});

Route::get('producto', function () {
    return view('producto');
});

Route::resource('categorias', 'Categorias'); 



