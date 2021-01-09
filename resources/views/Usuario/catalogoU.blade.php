@extends('layout.ap')




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
                  <button class="dropdown-item" type="button">Deportiva</button>
                  <button class="dropdown-item" type="button">Antigua</button>
                  <button class="dropdown-item" type="button">Moderna</button>
                  <button class="dropdown-item" type="button">Niños</button>
                  <button class="dropdown-item" type="button">Otros</button>
                </div>
               </div>
               
              </div>


        </div>
             <div class="row px-2 py-2">
             <div class="categoria-items row">
             @foreach($categoriass as $item) 
             
                <div class="categoria-item col-12 col-md-4">
                    <div class="card">
                    <a href="http://127.0.0.1:8000/promd/{{$item->id}}"><img class="w-100" src="{{$item->path}}"></a>
                        <div class="card-body">
                            <div class="card-title">
                            <a>{{$item->nomBici}}</a>
                            </div>
                            <div class="card-text">
                                <i class="fas fa-thumbs-up"></i>
                                <p> costo  $<a>{{$item->precio}}</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             </div>


             </div>  


    



@endsection