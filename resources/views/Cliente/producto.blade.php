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


    <!--contenido-->
    <div class="row">
        
            <div class="col-2 text-center">
                <a href="javascript: history.go(-1)"><img class="w-75 p-md-4" src="/imag/flecha.png"></a>
            </div>

            <div class=" col-12 col-md-5 px-4 py-4 row ">
                <img class="w-100 p-4" src="/{{$item->path}}"> 

                <div class="row d-flex-inline d-md-none ">
                    <div class="row">
                    </div>
                   
              </div>
                  <p class="p-5">Nombre:{{$item->nomBici}}<br>
                  Descripcion:{{$item->descrip}}<br>
                  Precio:$ {{$item->precio}}</p>
             </div>
              
             <div class="items-center col-1 row">
                  <div class="row d-none d-md-flex ">
                      <div class="col-12 row">
                      </div>
                  </div>

                  
             </div>
             
                   <div class="p-5">
                      <a href="/ComentC/{{$item->id}}"><button class="btn btn-outline-dark bg-info col-12" >comentarios</button></a>
                  </div>

                  <div class="p-5"><a href="/carrito/agregar/{{$item->id}}/1"><button class="btn btn-outline-dark bg-success text-light" type="submit">Agregar</button></a></div>

 
                          
       
    </div>




@endsection