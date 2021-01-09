@extends('layout.ap')

@guest
@if (Route::has('register'))
<meta http-equiv="refresh" content="0;http://127.0.0.1:8000">
 @endif
        @else
        @if (Route::has('register'))
           @if ( Auth::user()->tipo == 1)
           <meta http-equiv="refresh" content="0;http://127.0.0.1:8000">
            @endif 
         @endif       
  @endguest 


@section('content')
   
<h3>Editar Bicicleta</h3>


<form action="/categorias/{{$item->id}}" class="form-row p-2" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group col-9">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{$item->nomBici}}">
    </div>

    <div class="form-group col-9">
        <label for="descripcion">descripcion</label>
        <input type="text" name="descripcion" class="form-control" value="{{$item->descrip}}">
    </div>

    <div class="form-group col-4">
        <label for="categoria">categoria</label>
        <select name="categoria" class="form-control" value="{{$item->categ}}">
              <option value="1">Deportiva</option>
              <option value="2">Antigua</option>
              <option value="3">Moderna</option>
              <option value="4">Niños</option>
              <option value="5">Otros</option>
        </select>
    </div>

    <div class="form-group col-4">
        <label for="costo">costo</label>
        <input type="number" step="0.01" name="costo" class="form-control" value="{{$item->precio}}">
    </div>

    <div class="form-group col-10">
            <labe for="imagen">Imagen</labe>
            <input type="file" name="imagen" class="form-control">
    </div>


    <div class="col-12 text-center">
        <button class="btn btn-success" type="submit">Guardar Cambios</button>
    </div>
</form>


@endsection
