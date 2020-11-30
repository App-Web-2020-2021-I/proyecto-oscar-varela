@extends('layout.ap')


@section('content')

    <div class="row">
             <div class="col-2">
                <a href="javascript: history.go(-1)"><img class="w-75 p-md-4" src="imag/flecha.png"></a>
             </div>
   
             <div class="text-center col-8 m-4 border">
                <h1>comentarios</h1>  

                <div class="row p-4">
                    <textarea class="form-control col-8 col-md-10" placeholder="Comentario"></textarea> 
                    <button class="btn btn-outline-primary col-2 p-3">agregar</button>
                </div>
                
                 <div class="border"> 
                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero iusto culpa sunt architecto? Eveniet aperiam adipisci deserunt iste, autem accusamus, aliquid consectetur fugit inventore laudantium cum tenetur? Quis, deleniti quos!</p>  
                    <h3 class="align-self-end">Xhino</h3>
                 </div>

                 <div class="border"> 
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, esse saepe, quo ut reiciendis assumenda aliquam ad velit corrupti soluta porro, tempora suscipit temporibus repellat iste eos ipsum. Ipsa, quisquam!</p>  
                     <h3 class="align-self-end">Diana</h3>
                  </div>

                  <div class="border"> 
                    <p> ipsum dolor sit amet consectetur adipisicing elit. Vero iusto culpa sunt architecto? Eveniet aperiam adipisci deserunt iste, autem accusamus, aliquid consectetur fugit inventore laudantium cum tenetur? Quis, deleniti quos!</p>  
                     <h3 class="align-self-end">Ramiro</h3>
                  </div>
                  
                  <div class="border"> 
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero iusto culpa sunt architecto? Eveniet aperiam adipisci deserunt iste, autem accusamus, aliquid consectetur adipisicing elit. Ducimus reiciendis deserunt animi eveniet fugiat quod commodi ad dolorem, cupiditate hic, possimus facilis corporis eum quibusdam inventore accusantium cum consectetur mollitia! fugit inventore laudantium cum tenetur? Quis, deleniti quos!</p>  
                     <h3 class="align-self-end">Rosy</h3>
                  </div>
             </div>

             <div class="col-2"></div>
   </div>

@endsection