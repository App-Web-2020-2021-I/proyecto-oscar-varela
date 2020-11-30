@extends('layout.ap')


@section('content')
   
<h3>Agregar Bicicleta</h3>


  

  
<form action="/categorias" class="form-row p-2" method="POST">
    @csrf
    @method('POST')

    <div class="form-group col-9">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>

    <div class="form-group col-9">
        <label for="descripcion">descripcion</label>
        <input type="text" name="descripcion" class="form-control">
    </div>

    <div class="form-group col-4">
        <label for="categoria">categoria</label>
        <input type="number" name="categoria" class="form-control">
    </div>

    <div class="form-group col-4">
        <label for="costo">costo</label>
        <input type="number" step="0.01" name="costo" class="form-control">
    </div>



    <div class="col-12 text-center">
        <button class="btn btn-success" type="submit">Guardar</button>
    </div>
</form>


@endsection
