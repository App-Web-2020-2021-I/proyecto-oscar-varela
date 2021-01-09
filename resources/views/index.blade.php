
@extends('layout.ap')
   

@section('content')
    <div>

    <h1 class="text-center p-3">Bienvenido!!</h1>
                    
                    <div class="container py-2 d-col-12 d-md-col-6" id="carrucel">
                        <div class="carousel slide" id="carrusel" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="imag/bicicletaA.jpg" alt="Slide 01" class="d-block w-100 img-thumbnail">
                                </div>
                                <div class="carousel-item">
                                    <img src="imag/bicicletaA.jpg" alt="Slide 02" class="d-block w-100 img-thumbnail">
                                </div>
                                <div class="carousel-item">
                                    <img src="imag/bicicletaA.jpg"alt="Slide 03" class="d-block w-100 img-thumbnail">
                                </div>
                            </div>
                            <a href="#carrusel" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a href="#carrusel" class="carousel-control-next" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                </div> 



             <div class="row px-5 py-5">
                <a href="http://127.0.0.1:8000/catalogoU" class="col-12"> <button class="col-12">Catalogo</button> </a>   
             </div>
              
             <div class="text-center">
                 <p>    av.anaya #324 </p>  
                 <p>   en el cento de san Luis Potosi</p>
                 <p>   dentro de un horario de 8am-8pm </p> 
             </div>

 
                          
       
    </div>

@endsection
