<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {

    $request->session()->put('carrito',[]);

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

Route::get('catalogoU2/{cat}', function ($cat) {
    $categoriass = Categoria::all();
    $cate = $cat;
    return view('Usuario/catalogoU2', compact('categoriass','cate'));
});

Route::get('catalogoC2/{cat}', function ($cat) {
    $categoriass = Categoria::all();
    $cate = $cat;
    return view('Cliente/catalogoC2', compact('categoriass','cate'));
});

Route::get('catalogo2/{cat}', function ($cat) {
    $categoriass = Categoria::all();
    $cate = $cat;
    return view('admi/catalogo2', compact('categoriass','cate'));
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


Route::get('carrito/iniciar', function (Request $request) {
    //session(['carrito' => $id]);
    $request->session()->put('carrito',[]);

    return session()->all();
});

Route::get('carrito/agregar/{id}/{cant}', function (Request $request, $id, $cant) {
    //session(['carrito' => $id]);
    $objeto=["id" => $id , "cant" => $cant];
    //$ca=$id;
    $carrito=session('carrito');
    $nuevo_carrito =[];
    
    $agregar=true;
    
    foreach($carrito as $item){
        if($item["id"] === $objeto["id"])
        { 
           
            $item["cant"] += $objeto["cant"];
             
            if($cant == 0)
            {
                $item["cant"] = $objeto["cant"];
            }
            $agregar =false;
        }
       $nuevo_carrito[] = $item;
    }

    if($agregar){
        $nuevo_carrito[] = $objeto;
       // $car[]=$ca; 
    }

    $request->session()->put('carrito' , $nuevo_carrito);
    $carritos = Carrito::all();
    $producto = Categoria::all();
    //return session()->all();
      $car = session('carrito');
    return view('cliente/carrito', compact('carritos','producto','car'));
});


Route::get('carrito/eliminar/{id}/{cant}', function (Request $request, $id,$cant) {
    //session(['carrito' => $id]);
    $objeto=["id" => $id , "cant" => $cant];
    //$ca=$id;
    $carrito=session('carrito');
    $nuevo_carrito =[];
    
    
    foreach($carrito as $item){
        if($item["id"] === $objeto["id"])
        { 
           if($cant == -1)
            {
                $item["id"] = 0;
            }
        }
       $nuevo_carrito[] = $item;
    }

    $request->session()->put('carrito' , $nuevo_carrito);
    $carritos = Carrito::all();
    $producto = Categoria::all();
    //return session()->all();
      $car = session('carrito');
    return view('cliente/carrito', compact('carritos','producto','car'));
});

Route::resource('categorias', 'CategoriasController');
Route::resource('promociones', 'PromocionesController'); 
Route::resource('comentarios', 'ComentariosController');
Route::resource('carrito', 'CarritoController'); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
