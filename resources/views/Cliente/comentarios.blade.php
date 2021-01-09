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

    <div class="row">
             <div class="col-2">
                <a href="javascript: history.go(-1)"><img class="w-75 p-md-4" src="/imag/flecha.png"></a>
             </div>
   
             <div class="text-center col-8 m-4 border">
                <h1>comentarios</h1>  
                <form action="/comentarios" class="form-row p-2" method="POST"> 
                   @csrf
                   @method('POST')
                   <div class="form-group col-4">
                          <label for="nombre">Nombre: {{ Auth::user()->name }}</label>
                        <input type="text" name="nombre" class="form-control d-none d-md-none"  value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group none">
                          <input type="number" name="id" class="form-control d-none d-md-none" value="{{$item->id}}">
                     </div>

                    <div class="form-group col-12">
                        <label for="comentario">Comentario</label>
                        <input type="text" name="comentario" class="form-control">
                    </div>  
                                 <div><button class="btn btn-outline-dark bg-primay" type="submit">Agregar</button></div>
                 </form>
                
                @foreach($comentarios as $ithem)
                @if($ithem->id_Categoria == $item->id)
                 <div class="border"> 
                   <p>{{$ithem->comentario}}</p>  
                    <h3 class="align-self-end">{{$ithem->nomUsuario}}</h3>
                 </div>
                 @endif
                 @endforeach



             </div>

             <div class="col-2"></div>
   </div>

@endsection