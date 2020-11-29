@extends('layout.ap')


@section('content')
    <div>
        <h1>Bienvenido!!</h1>
             <div class="row px-4 py-4">
                
               <a href="producto" class="col-3 col-md-4"> <img class="w-100" src="./imagen/bicicletaA.jpg"></a>
               <a href="producto" class="col-5 col-md-4"> <img class="w-100" src="./imagen/bicicletaA.jpg"></a>
               <a href="producto" class="col-3 col-md-4"> <img class="w-100" src="./imagen/bicicletaA.jpg"></a>
               
             </div>



             <div class="row px-5 py-5">
                <a href="categorias" class="col-12"> <button class="col-12">Catalogo</button> </a>   
             </div>
              
             <div class="text-center">
                 <p>    av.anaya #324 </p>  
                 <p>   en el cento de san Luis Potosi</p>
                 <p>   dentro de un horario de 8am-8pm </p> 
             </div>

 
                          
       
    </div>

@endsection
