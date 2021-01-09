<?php

use Illuminate\Support\Facades\Route;

use App\Categoria;
use App\Promo;
use App\Comentario;
use App\User;
use App\Carrito;
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

Route::get('catalogo-UC', function () {
    $categoriass = Categoria::all();
    return view('Cliente/catalogoCC', compact('categoriass'));
});

Route::get('/prom/{id}', function ($id) {
     $item = Categoria::find($id);
    return view('Cliente/producto', compact('item'));
});

Route::get('/promd/{id}', function ($id) {
    $item = Categoria::find($id);
   return view('Usuario/producto', compact('item'));
});

Route::get('/prod/{id}', function ($id) {
    $item = Categoria::find($id);
   return view('admi/producto', compact('item'));
});

Route::get('catalogoU', function () {
    $categoriass = Categoria::all();
    return view('Usuario/catalogoU', compact('categoriass'));
});

Route::get('Promos-UC', function () {
    $promos = Promo::all();
    return view('Usuario/prom', compact('promos'));
});


Route::get('/ComentU/{id}', function ($id) {
    $comentarios = Comentario::all();
    $item = Categoria::find($id);
    return view('Usuario/comentarios', compact('comentarios', 'item'));
});

Route::get('/ComentA/{id}', function ($id) {
    $comentarios = Comentario::all();
    $item = Categoria::find($id);
    return view('admi/comentarios', compact('comentarios','item'));
});

Route::get('/ComentC/{id}', function ($id) {
    $comentarios = Comentario::all();
    $item = Categoria::find($id);
    return view('Cliente/comentarios', compact('comentarios','item'));
});


Route::get('carritos', function () {
    $carritos = Carrito::all();
    $usuarios = User::all();
    $categorias = Categoria::all();
    return view('admi/carritos', compact('categorias','carritos','usuarios'));
});

Route::get('usuarioss', function () {
   
    $usuarios = User::all();
    return view('admi/usuarios', compact('usuarios'));
});

Route::resource('categorias', 'CategoriasController');
Route::resource('promociones', 'PromocionesController'); 
Route::resource('comentarios', 'ComentariosController');

Route::resource('carrito', 'CarritoController'); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
