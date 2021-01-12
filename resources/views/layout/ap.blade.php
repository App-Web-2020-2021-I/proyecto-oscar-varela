<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>A rodar!</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body >
<div class="bg-success row">
        <div class="col-3 pl-4">
            <div class="d-inline-block p-2" id="logo">
                <img src="/imag/logo.png" alt="Logo" class="img-fluid ">
            </div>
            <div class="d-none d-md-inline-block text-white h2 p-4">
                Bicicletas para ti
            </div>
        </div>  
            
        <div class="d-md-none d-block">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#men"> <img src="/imag/menu.png" alt="Menu" class="w-50"> </button>
         </div>
        
        <div class="d-none d-md-block col-7 p-2">
            <div class="mt-2">
                <ul class="list-group list-group-horizontal text-center">
                <a href="http://127.0.0.1:8000/"> <li class="list-group-item list-group-item-action">Inicio</li> </a>
                
                @guest
    
    @if (Route::has('register'))
    
    <a href="http://127.0.0.1:8000/Promos-UC">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
    <a href="http://127.0.0.1:8000/catalogoU">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
     @endif
        @else
        @if (Route::has('register'))
           @if ( Auth::user()->tipo == 0)
        <a href="http://127.0.0.1:8000/categorias">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
        <a href="http://127.0.0.1:8000/promociones">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
        <a href="http://127.0.0.1:8000/carritos">  <li class="list-group-item list-group-item-action">Pedidos</li> </a>
        <a href="http://127.0.0.1:8000/usuarioss">  <li class="list-group-item list-group-item-action">Usuarios</li> </a>
           @endif 
           @if ( Auth::user()->tipo == 1)
           <a href="http://127.0.0.1:8000/catalogo-UC">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
           <a href="http://127.0.0.1:8000/Promos-UC">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
            @endif 
         @endif       
                @endguest  
           </ul>
                   
                   
                   
            </div>
        </div>

         
                <div class=" text-right col-1">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalLogin">
                    Inicio
                </button></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalRegistro">
                    Registro
                </button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalRegistro">
                   {{ Auth::user()->name }}
                </button>  
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
          
            <div class="collapse navbar-collapse d-md-none" id="men">
            <a href="http://127.0.0.1:8000/carrito/iniciar"> <li class="list-group-item list-group-item-action">Inicio</li> </a>
                
                @guest
    
    @if (Route::has('register'))
    <a href="http://127.0.0.1:8000/catalogoU">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
    <a href="http://127.0.0.1:8000/Promos-UC">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
     @endif
        @else
        @if (Route::has('register'))
           @if ( Auth::user()->tipo == 0)
           <a href="http://127.0.0.1:8000/categorias">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
        <a href="http://127.0.0.1:8000/promociones">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
        <a href="http://127.0.0.1:8000/carritos">  <li class="list-group-item list-group-item-action">Pedidos</li> </a>
        <a href="http://127.0.0.1:8000/usuarioss">  <li class="list-group-item list-group-item-action">Usuarios</li> </a>
           @endif 
           @if ( Auth::user()->tipo == 1)
        <a href="http://127.0.0.1:8000/catalogoU">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
        <a href="http://127.0.0.1:8000/Promos-UC">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
            @endif 
         @endif       
  @endguest  
    </div>
@yield('content')

<div class="m-5">
   <h6 class="m-5">.</h6>
   
</div>


<div class="bg-success  row text-white fixed-bottom">
        <div class="col-4 my-3 mx-2" id="redes">

            <img src="/imag/facebook.png">
            <img src="/imag/instagram.png">
            <img src="/imag/whatsapp.png">

            
        </div>
        <div class="col-3 text-right my-3">
            Conectate con nosotros
        </div>


        @guest
    
    @if (Route::has('register'))
      @endif
        @else
        @if (Route::has('register'))
           @if ( Auth::user()->tipo == 1)
           <div>
            <a href="http://127.0.0.1:8000/carrito/agregar/0/0" class="col-2 col-md-4"> <img class="w-50" src="/imag/carrito.png"></a>   
           </div>
         @endif 
         @endif       
  @endguest  
        
    </div>


<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>