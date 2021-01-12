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

    <h2 class="p-3">Clientes</h2>

    <div>
              
             <div class="categoria-items row">
             
             @foreach($usuarios as $ite) 
               
                <div class="categoria-item col-12 col-md-2 pb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                nombre: {{$ite->name}}
                                
                            </div>
                            <div class="card-text">
                                email: {{$ite->email}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
               
                
            </div>
        </div>
       
    </div>



@endsection