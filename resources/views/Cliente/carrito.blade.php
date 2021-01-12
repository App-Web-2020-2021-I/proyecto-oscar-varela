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

    <h2 class="p-3 ">Mi carrito</h2>

    <div>
    <?php 
$id2 = [];
$cant = [];
foreach($car as $item){
    $id2[] =  $item["id"];
    $cant2[] =  $item["cant"];
}    $in=0;
    ?>

            
             <div class="categoria-items row col-12 p-2">
             
            
             @foreach($id2 as $ite)
             @foreach($producto as $ithem) 
               
                @if($ithem->id == $ite)
                
                <div class="categoria-item col-12 col-md-3">
                    <div class="card">
                       <img class="w-100" src="/{{$ithem->path}}">
                        <div class="card-body">
                            <div class="card-title">
                            <p>Nombre:<a>{{$ithem->nomBici}}</a> </p>
                            
                            <p>catidad:<a>{{$cant2[$in]}}</a> </p>    
                            </div>
                            <div class="card-text">
                            @if($cant2[$in] == 0)
                            <button class="btn btn-outline-dark bg-secondary text-light" type="submit">Comprado</button>  
                            @endif 

                            @if($cant2[$in] != 0)
                              <form action="/carrito" class="form-row p-2" method="POST"> 
                @csrf
                @method('POST')
                <div><button class="btn btn-outline-dark bg-success text-light" type="submit">Comprar</button></div>
                <div class="form-group none">
                          <input type="number" name="id" class="form-control d-none d-md-none" value="{{$ithem->id}}">
                     </div>
                     <div class="form-group col-4">
                        <input type="number" name="idU" class="form-control d-none d-md-none"  value="{{ Auth::user()->id }}">
                    </div>
                     <div class="form-group none">
                          <input type="number" name="idP" class="form-control d-none d-md-none" value="{{$ithem->id}}">
                     </div>

                     <div class="form-group none">
                          <input type="number" name="cantidad" class="form-control d-none d-md-none" value="{{$cant2[$in]}}">
                     </div>
               </form> @endif
                        
                         <a href="/carrito/eliminar/{{$ithem->id}}/-1"><button class="btn btn-outline-dark bg-secondary text-light" type="submit">Eliminar</button></a>
                              
                            </div>
                        </div>
                    </div>
                </div>

                 @endif
                
                @endforeach 
                <?php  $in += 1; ?>
                @endforeach

                
               
                
            </div>
        </div>
       
    </div>



@endsection