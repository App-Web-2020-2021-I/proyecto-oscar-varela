@extends('layout.ap')


@section('content')


    <!--contenido-->
    <div class="row">
             
        
            <div class="col-2 text-center">
                <a href="javascript: history.go(-1)"><img class="w-75 p-md-4" src="./imagen/flecha.png"></a>
            </div>

            <div class="  col-5 px-4 py-4 row ">
                <img class="w-100 p-4" src="./imagen/bicicletaA.jpg"> 

                <div class="row d-flex-inline d-md-none ">
                    <div class="row">
                      <img class="w-100 p-1 col-3" src="./imagen/bicicletaA.jpg"> 
                      <img class="w-100 p-1 col-3" src="./imagen/bicicletaA.jpg">
                      <img class="w-100 p-1 col-3" src="./imagen/bicicletaA.jpg"> 
                      <img class="w-100 p-1 col-3" src="./imagen/bicicletaA.jpg"> 
                    </div>
                   
                </div>
               
                <p>bicicleta Moderna</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, eaque asperiores, necessitatibus hic sit et nulla nostrum beatae praesentium temporibus culpa voluptate amet laboriosam, fugiat accusantium odit veritatis explicabo! Voluptatibus.</p>
             </div>
              
             <div class="items-center col-3 row">
                  <div class="row d-none d-md-flex ">
                      <div class="col-12 row">
                        <img class="w-50 p-4" src="./imagen/bicicletaA.jpg"> 
                        <img class="w-50 p-4" src="./imagen/bicicletaA.jpg"> 
                      </div>
                      <div class="col-12 row">
                        <img class="w-50 p-4" src="./imagen/bicicletaA.jpg"> 
                        <img class="w-50 p-4" src="./imagen/bicicletaA.jpg"> 
                      </div>
                  </div>

                  <div>
                      <a href="comentarios"><button>comentarios</button></a>
                  </div>
             </div>

 
                          
       
    </div>




@endsection