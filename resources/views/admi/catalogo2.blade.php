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
<!--contenido -->
    <div>
        <div >
             <div class="row p-3">
                  <div class="col-4"><h2>Categorias</h2></div>

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  categorias
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="http://127.0.0.1:8000/catalogo2/1"><button class="dropdown-item" type="button">Deportiva</button></a>
                  <a href="http://127.0.0.1:8000/catalogo2/2"><button class="dropdown-item" type="button">Antigua</button></a>
                  <a href="http://127.0.0.1:8000/catalogo2/3"><button class="dropdown-item" type="button">Moderna</button></a>
                  <a href="http://127.0.0.1:8000/catalogo2/4"><button class="dropdown-item" type="button">Niños</button></a>
                  <a href="http://127.0.0.1:8000/catalogo2/5"><button class="dropdown-item" type="button">Otros</button></a>
                </div>
               </div>
               <div class="col-3"> 
               <a href="http://127.0.0.1:8000/categorias/create" class="bg-white"> <button class="btn btn-outline-dark bg-info col-12" type="submit" >Agregar</button></a>
               </div>
              
              </div>


        </div>
             <div class="row px-2 py-2">
             <div class="categoria-items row p-3 col-12">
             @foreach($categoriass as $item) 
             @if($item->categ == $cate)
                <div class="categoria-item col-12 col-md-4 pb-2">
                    <div class="card">
                    <a href="categorias/{{$item->id}}"><img class="w-100 " src="/{{$item->path}}"></a>
                        <div class="card-body">
                            <div class="card-title">
                            <a>{{$item->nomBici}}</a>
                            </div>
                            <div class="card-text">
                                <i class="fas fa-thumbs-up"></i>
                                <p> costo  $<a>{{$item->precio}}</a> </p>
                              
                                <a href="http://127.0.0.1:8000/categorias/{{$item->id}}/edit"> <button class="btn btn-outline-dark bg-dark text-light" type="bottom">editar</button> </a>

              
               <form action="/categorias/{{$item->id}}" method="POST"> 
                @csrf
                @method('DELETE')
                <div><button class="btn btn-outline-dark bg-danger text-light" type="submit">Eliminar</button></div>
               </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
             </div>

             </div>  


    



@endsection