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

    <div class="row">
             <div class="col-2">
                <a href="javascript: history.go(-1)"><img class="w-75 p-md-4" src="/imag/flecha.png"></a>
             </div>
   
             <div class="text-center col-8 m-4 border">
                <h1>Comentarios</h1>
              
                @foreach($comentarios as $ithem)
                @if($ithem->id_Categoria == $item->id)
                 <div class="border"> 
                   <p>{{$ithem->comentario}}</p>  
                    <h3 class="align-self-end">{{$ithem->nomUsuario}}</h3> 
                    <form action="/comentarios/{{$ithem->id}}" method="POST"> 
                                 @csrf
                                 @method('DELETE')
                                 <div><button class="btn btn-outline-dark bg-danger" type="submit">X</button></div>
                                </form>
                </div>
                 @endif

                 @endforeach
               </div> 
             <div class="col-2"></div>
   </div>

@endsection