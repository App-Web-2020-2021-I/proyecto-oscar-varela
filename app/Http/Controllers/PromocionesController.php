<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;

class PromocionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promos = Promo::all();
        return view('admi/admPromocion', compact('promos'));
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
        return view('admi/admPromC',compact('error'));
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
        $item = new Promo;
  
        $item->nomProm = $request->nombre;
        $item->descrip = $request->descripcion;
        $item->fin = $request->fin;
        $item->precio = $request->costo; 
        if($imagen = $request->file('imagen')){
            $nombre_imagen = $item->nombre . "_" . date("Y_m_d_H_i_s") . "." . $imagen->extension();
             $imagen->move("imgenes", $nombre_imagen);
             $item->path = "imgenes/" . $nombre_imagen;
        }
        $item->save();
        return redirect()->route('promociones.index');
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
        $item = Promo::find($id);
        $error = "";
        return view('admi/admPromA' , compact('error' , 'item'));
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
        $item = Promo::find($id);
        
        $item->nomProm = $request->nombre;
        $item->descrip = $request->descripcion;
        $item->fin = $request->fin;
        $item->precio = $request->costo; 
        if($imagen = $request->file('imagen')){
            $nombre_imagen = $item->nombre . "_" . date("Y_m_d_H_i_s") . "." . $imagen->extension();
             $imagen->move("imgenes", $nombre_imagen);
             $item->path = "imgenes/" . $nombre_imagen;
        }
       
        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al actualizar";
            return view('promociones.editar', compact('error', 'item'));
        }
        return redirect()->route('promociones.index');
    
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
        Promo::destroy($id);
       
        return redirect()->route('promociones.index');
    }
}
