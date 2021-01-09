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

    <h1>Mi carrito</h1>

    <div>
              
             <div class="categoria-items row">
             
             @foreach($carrito as $item) 
             @foreach($producto as $ithem) 
               
                @if($ithem->id == $item->idP)
                @if(Auth::user()->id == $item->idU)
                <div class="categoria-item col-12 col-md-2">
                    <div class="card">
                       <img class="w-100" src="/{{$ithem->path}}">
                        <div class="card-body">
                            <div class="card-title">
                                 {{$ithem->nomBici}}
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

                
               
                
            </div>
        </div>
       
    </div>



@endsection