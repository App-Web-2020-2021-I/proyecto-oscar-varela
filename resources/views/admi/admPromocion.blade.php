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

    <div>
        <div class="row p-3">
            <div class="h3 col-4">
                Promociones
                </div>
            <div class="col-3"> 
               <a href=" promociones/create" class="bg-white"> <button class="btn btn-outline-dark bg-info col-12" type="submit" >Agregar</button></a>
               </div>
         </div>       
      

     
    <div class="categoria-items row">
            @foreach($promos as $item) 
                <div class="categoria-item col-12 col-md-4">
                    <div class="card">
                        <img class="w-100" src="{{$item->path}}" alt="">
                        <div class="card-body">
                            <div class="card-title">
                            {{$item->nomProm}}
                            </div>
                            <div class="card-text">
                                <i class="fas fa-thumbs-up"></i> 
                                <p>Decripcion:<a>{{$item->descrip}}</a></p> 
                                <p>Vigencia :<a>{{$item->fin}}</a></p> 
                                <p>Precio: $<a>{{$item->precio}}</a></p> 
                                <a href="promociones/{{$item->id}}/edit"> <button class="btn btn-outline-dark bg-dark text-light" type="bottom">editar</button> </a>

              
                               <form action="/promociones/{{$item->id}}" method="POST"> 
                                 @csrf
                                 @method('DELETE')
                                 <div><button class="btn btn-outline-dark bg-danger" type="submit">X</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach   

      </div> 
    



    
@endsection

  