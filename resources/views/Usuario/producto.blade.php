@extends('layout.ap')




@section('content')


    <!--contenido-->
    <div class="row">
        
            <div class="col-2 text-center">
                <a href="javascript: history.go(-1)"><img class="w-75 p-md-4" src="/imag/flecha.png"></a>
            </div>

            <div class="  col-5 px-4 py-4 row ">
                <img class="w-100 p-4" src="/{{$item->path}}"> 

                <div class="row d-flex-inline d-md-none ">
                    <div class="row">
                      <img class="w-100 p-1 col-3" src="/imag/bicicletaA.jpg"> 
                      <img class="w-100 p-1 col-3" src="/imag/bicicletaA.jpg">
                    </div>
                   
              </div>
                  <p>Nombre:{{$item->nomBici}}<br>
                  Descripcion:{{$item->descrip}}<br>
                  Precio:$ {{$item->precio}}</p>
             </div>
              
             <div class="items-center col-3 row">
                  <div class="row d-none d-md-flex ">
                      <div class="col-12 row">
                        <img class="w-50 p-4" src="/imag/bicicletaA.jpg"> 
                        <img class="w-50 p-4" src="/imag/bicicletaA.jpg"> 
                      </div>
                  </div>

                  <div>
                      <a href="/ComentU/{{$item->id}}"><button class="btn btn-outline-dark bg-info col-12" >comentarios</button></a>
                  </div>
             </div>

 
                          
       
    </div>




@endsection