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

    <h2 class="p-3">Pedidos</h2>

    <div>
              
             <div class="categoria-items row">
             
             @foreach($carritos as $item) 
             @foreach($categorias as $ithem)
             @foreach($usuarios as $ite) 
               
                @if($ithem->id == $item->idP)
                @if($ite->id == $item->idU)
                <div class="categoria-item col-12 col-md-4">
                    <div class="card">
                       <img class="w-100" src="/{{$ithem->path}}">
                        <div class="card-body">
                            <div class="card-title">
                                <li> Nombre: {{$ite->name}}       </li>
                                <li> Correo: {{$ite->email}}</li>
                                <li> Producto: {{$ithem->nomBici}}</li>
                                <li> Cantidad: {{$item->cantidad}}</li>
                            </div>
                            <div class="card-text">
                            <form action="/carrito/{{$item->id}}" method="POST"> 
                                 @csrf
                                 @method('DELETE')
                                 <div><button class="btn btn-outline-dark bg-danger" type="submit">X</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
 
                 @endif
                 @endif
                @endforeach
                @endforeach
                @endforeach

                
               
                
            </div>
        </div>
       
    </div>



@endsection