@extends('layout.ap')

@guest
@if (Route::has('register'))
<meta http-equiv="refresh" content="0;http://127.0.0.1:8000">
 @endif
        @else
        @if (Route::has('register'))
           @if ( Auth::user()->tipo == 0)
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
                  <a href="http://127.0.0.1:8000/catalogoC2/1"><button class="dropdown-item" type="button">Deportiva</button></a>
                  <a href="http://127.0.0.1:8000/catalogoC2/2"><button class="dropdown-item" type="button">Antigua</button></a>
                  <a href="http://127.0.0.1:8000/catalogoC2/3"><button class="dropdown-item" type="button">Moderna</button></a>
                  <a href="http://127.0.0.1:8000/catalogoC2/4"><button class="dropdown-item" type="button">Niños</button></a>
                  <a href="http://127.0.0.1:8000/catalogoC2/5"><button class="dropdown-item" type="button">Otros</button></a>
                </div>
               </div>
               
              </div>


        </div>
             <div class="row px-2 py-2">
             <div class="categoria-items row col-12">
             @foreach($categoriass as $item) 

             @if($item->categ == $cate)
             
                <div class="categoria-item col-12 col-md-4 pb-2">
                    <div class="card">
                    <a href="http://127.0.0.1:8000/prom/{{$item->id}}"><img class="w-100" src="/{{$item->path}}"></a>
                        <div class="card-body">
                            <div class="card-title">
                            <a>{{$item->nomBici}}</a>
                            </div>
                            <div class="card-text">
                                <i class="fas fa-thumbs-up"></i>
                                <p> costo  $<a>{{$item->precio}}</a> </p>
               
               <a href="carrito/agregar/{{$item->id}}/1"><button class="btn btn-outline-dark bg-success text-light" type="submit">Agregar</button></a>
               
               <!-- <form action="/carrito" class="form-row p-2" method="POST"> 
                @csrf
                @method('POST')
                <div><button class="btn btn-outline-dark bg-success text-light" type="submit">Agregar</button></div>
                <div class="form-group none">
                          <input type="number" name="id" class="form-control d-none d-md-none" value="{{$item->id}}">
                     </div>
                     <div class="form-group col-4">
                        <input type="number" name="idU" class="form-control d-none d-md-none"  value="{{ Auth::user()->id }}">
                    </div>
                     <div class="form-group none">
                          <input type="number" name="idP" class="form-control d-none d-md-none" value="{{$item->id}}">
                     </div>
               </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
             </div>


             </div>  


    



@endsection