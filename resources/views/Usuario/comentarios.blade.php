@extends('layout.ap')



@section('content')

    <div class="row">
             <div class="col-2">
                <a href="javascript: history.go(-1)"><img class="w-75 p-md-4" src="/imag/flecha.png"></a>
             </div>
   
             <div class="text-center col-8 m-4 border">
                <h1>comentarios</h1>  

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