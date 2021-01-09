@extends('layout.ap')


@section('content')

    <div>
        <div class="categoria">
            <div class="h3 p-3">
                Promociones
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
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach   

       
    </div>

    @endsection