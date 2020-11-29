@extends('layout.ap')


@section('content')
<!--contenido -->
    <div>
        <div >
             <div class="row">
                  <div class="col-4"><h2>categrias</h2></div>

              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  categorias
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button">deportiva</button>
                  <button class="dropdown-item" type="button">lujosa</button>
                  <button class="dropdown-item" type="button">moderna</button>
                  <button class="dropdown-item" type="button">niños</button>
                  <button class="dropdown-item" type="button">otros</button>
                </div>
              </div>
              </div>


        </div>
             <div class="row px-2 py-2">
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                <a href="producto"  class="col-12 col-md-4"><img class="w-100" src="./imagen/bicicletaA.jpg"></a>
                
               

             </div>


        <!--  <div id="categorias">
            <div class="categoria">
                <div class="h3">
                    Categoría 1
                </div>
                <div class="categoria-items row flex-nowrap">
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="categoria">
                <div class="h3">
                    Categoría 2
                </div>
                <div class="categoria-items row flex-nowrap">
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categoria-item col-4 col-md-2">
                        <div class="card">
                            <img src="https://picsum.photos/150/250" alt="">
                            <div class="card-body">
                                <div class="card-title">
                                    Nombre item
                                </div>
                                <div class="card-text">
                                    <i class="fas fa-thumbs-up"></i>
                                    89%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
       
    </div>
-->


    



@endsection