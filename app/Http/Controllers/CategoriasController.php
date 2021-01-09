<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoriass = Categoria::all();
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
        $error = "";
        return view('admi/registrobici',compact('error'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = new Categoria;
  
        $item->nomBici = $request->nombre;
        $item->categ = $request->categoria;
        $item->descrip = $request->descripcion;
        $item->precio = $request->costo; 
        if($imagen = $request->file('imagen')){
            $nombre_imagen = $item->nombre . "_" . date("Y_m_d_H_i_s") . "." . $imagen->extension();
             $imagen->move("imgenes", $nombre_imagen);
             $item->path = "imgenes/" . $nombre_imagen;
        }
        $item->save();
        return redirect()->route('categorias.index');
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
        $item = Categoria::find($id);
        $error = "";
        return view('admi/Producto' , compact('item' , 'error'));
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
        $item = Categoria::find($id);
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
        $item = Categoria::find($id);
        
        $item->nomBici = $request->nombre;
        $item->categ = $request->categoria;
        $item->descrip = $request->descripcion;
        $item->precio = $request->costo;
        if($imagen = $request->file('imagen')){
            $nombre_imagen = $item->nombre . "_" . date("Y_m_d_H_i_s") . "." . $imagen->extension();
             $imagen->move("imgenes", $nombre_imagen);
             $item->path = "imgenes/" . $nombre_imagen;
        }
       
        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al actualizar";
            return view('categorias.editar', compact('error', 'item'));
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
        Categoria::destroy($id);
       
        return redirect()->route('categorias.index');
    }
}
