<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Categorias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriass = DB::select('SELECT * FROM categoriass');

        return view('admi/catalogo', compact('categoriass'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admi/registrobici');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $nombre = $request->nombre;
        if($nombre == "") {
            $error = "nombre vacío";

            return view('admi/registrobici', compact('error'));
        }

        $descripcion = $request->descripcion;
        if($descripcion == "") {
            $error = "descripcion vacía";

            return view('admi/registrobici', compact('error'));
        }

        $categoria = $request->categoria;
        if($categoria == 0) {
            $error = "categoria vacío";

            return view('admi/registrobici', compact('error'));
        }

        $costo = $request->costo;
        if($costo == 0) {
            $error = "costo vacío";

            return view('admi/registrobici', compact('error'));
        }

        DB::insert('INSERT INTO categoriass(nomBici, categ, descrip, precio) VALUES(?, ?, ?, ?)', [$nombre,$categoria,$descripcion, $costo]);

        return redirect()->route('categorias.index');

    /*     return $request;  */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoria = DB::select('SELECT * FROM categoriass WHERE id = ?',[$id]);

        $item = $categoria[0];

        $error = "";
         return view('admi/editarBici' , compact('error' , 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $categoria = DB::select('SELECT * FROM categoriass WHERE id = ?',[$id]);

        $item = $categoria[0];


        $nombre = $request->nombre;
        if($nombre == "") {
            $error = "nombre vacío";

            return view('admi/editarBici', compact('error', 'item'));
        }

        $descripcion = $request->descripcion;
        if($descripcion == "") {
            $error = "descripcion vacía";

            return view('admi/editarBici', compact('error', 'item'));
        }

        $categoria = $request->categoria;
        if($categoria == 0) {
            $error = "admi/categoria vacío";

            return view('admi/editarBici', compact('error', 'item'));
        }

        $costo = $request->costo;
        if($costo == 0) {
            $error = "costo vacío";

            return view('admi/editarBici', compact('error', 'item'));
        }

        $respuesta = DB::update('UPDATE categoriass SET nomBici = ?, categ = ?, descrip = ?, precio = ? WHERE id = ?', [$nombre,$categoria,$descripcion, $costo ,$id]);

        if($respuesta == 0) {
            $error = "Error al actualizar el registro, inténtelo de nuevo";

            return view('admi/editarBici', compact('error', 'item'));
        
        }

        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      DB::delete('DELETE FROM categoriass WHERE id = ?', [$id]);
        return redirect()->route('categorias.index');
    }
}
