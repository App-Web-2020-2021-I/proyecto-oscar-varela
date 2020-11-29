<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>A rodar!</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body >
 <div class="bg-danger collapse" id="men">
        <a href="index.blade.php"> <li class="list-group-item list-group-item-action">Inicio</li> </a>
        <a href="catalogo">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
         <a href="prom">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
    </div>

    <div class="bg-success row">
        <div class="col-6 py-3">
            <div class="d-inline-block" id="logo">
                <img src="./imagen/logo.png" alt="Logo" class="img-fluid">
            </div>
            <div class="d-none d-md-inline-block text-white h2">
                bicicletas para ti
            </div>
        </div>
            
        <div class="d-md-none d-block">
            <button class="btn" data-toggle="collapse" data-target="#men"> <img src="./imagen/menu.png" alt="Logo" class="w-50"> </button>
         </div>
        
        <div class="d-none d-md-block col-3 p-2">
            <div class="mt-2">
                <ul class="list-group list-group-horizontal text-center">
                   <a href="categorias"> <li class="list-group-item list-group-item-action">Inicio</li> </a>
                   <a href="/">  <li class="list-group-item list-group-item-action">Catalogo</li> </a>
                    <a href="prom">  <li class="list-group-item list-group-item-action">Promociones</li> </a>
                </ul>
            </div>
        </div>

        <div class=" text-right">
            <div class="ml-3 text-right d-inline-block">
                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalLogin">
                    Inicio
                </button>
                |
                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalRegistro">
                    Registro
                </button>
            </div>
        </div>
    </div>

@yield('content')

 <!--d-none d-md-block-->
    <!--d-none d-md-block-->
    <div class="bg-success  row text-white ">
        <div class="col-4 my-3" id="redes">

            <img src="./imagen/facebook.png">
            <img src="./imagen/instagram.png">
            <img src="./imagen/whatsapp.png">

            
        </div>
        <div class="col-4 text-right my-3">
            Conectate con nosotros
        </div>

        <div>
            <a href="carrito" class="col-5 col-md-4"> <img class="w-50" src="./imagen/carrito.png"></a>
            
        </div>
    </div>

 <!-- Modal de login -->
 <div class="modal fade" id="modalLogin" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Iniciar sesión</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="login_email">Correo</label>
                            <input type="text" id="login_email" name="login_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="login_pass">Contraseña</label>
                            <input type="password" id="login_pass" name="login_pass" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">
                        Aceptar
                    </button>
                    <button class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal de registro -->
    <div class="modal fade" id="modalRegistro" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="name">Nombre (s)</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group col-6">
                                <label for="lastname">Apellidos</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group col-6">
                                <label for="password2">Confirmar contraseña</label>
                                <input type="password2" class="form-control" id="lastname2" name="lastname2">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">
                        Aceptar
                    </button>
                    <button class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>