@extends('layouts.app')

@extends('layouts.structure')

@section('section')

<section id="Warehouse">

    <div class="container-fluid">
        <div>
            @include('layouts.navigation_panel')
        </div>
        <div>
            <div class="row">
                <div class="col-8 row">
                    <div class="col-12">
                        <h2 class="text-light">Editar producto</h2>
                    </div>
                    <div class="col-12 container" data-bs-theme="dark">
                        <div class="mb-4">
                            <label for="formFile" class="form-label fs-5 fw-bold">Título</label>
                            <input class="form-control" type="text" id="formFile" placeholder="iPhone 13 pro 256GB 85%" disabled>
                          </div>
                          <div class="mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label"><h5 class="fs-5 fw-bold">Detalle</h5></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic suscipit cupiditate culpa facilis sapiente asperiores aspernatur, accusantium doloribus quod eum, ut alias voluptatibus aliquam sit. Corporis, quo beatae? Provident, asperiores."></textarea>
                          </div>
                          <div class="input-group custom-file-button d-flex flex-column mb-4">
                            <div>
                                <h5 class="fs-5 fw-bold">Añadir imagen</h5>
                                <p class="text-secondary">Añade nuevas imágenes al producto</p>
                            </div>
                            <div>
                                <input type="file" class="form-control form-dotted border-secondary" id="inputGroupFile">
                            </div>
                            <div class="pt-3">
                                <p class="text-light">Imágenes existentes</p>
                                <button type="button" class="active bg-dark border border-2 border-arg rounded-2 p-2 position-relative me-3">
                                    <img src="{{asset('img/product_thumbnail/apple_iphone13.png')}}" class="prod-thumbnail" alt="...">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        <i class="bi bi-x-lg"></i>
                                    </span>
                                </button>
                                <button type="button" class="active bg-dark border border-2 border-arg rounded-2 p-2 position-relative me-3">
                                    <img src="{{asset('img/product_thumbnail/apple_iphone13_1.png')}}" class="prod-thumbnail" alt="...">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        <i class="bi bi-x-lg"></i>
                                    </span>
                                </button>
                                <button type="button" class="active bg-dark border border-2 border-arg rounded-2 p-2 position-relative me-3">
                                    <img src="{{asset('img/product_thumbnail/apple_iphone13_2.png')}}" class="prod-thumbnail" alt="...">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        <i class="bi bi-x-lg"></i>
                                    </span>
                                </button>
                            </div>
                            
                          </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="{{route('warehouse')}}" class="btn btn-dark me-3 border-secondary text-arg fw-bold">Descartar</a>
                        <button class="btn btn-info text-light fw-bold">Guardar cambios</button>
                    </div>
                    <div class="container-fluid mt-5 border border-secondary bg-dark rounded">
                        <div class="my-3 mx-3">
                            <h5 class="text-light">Categorías</h5>
                            <div>
                                <div>
                                    <h6 class="text-arg fw-bold">Modelo</h6>
                                    <div class="btn-group d-flex mb-3">
                                        <button type="button" class="btn btn-dark border-secondary text-start fst-italic">iPhone 13</button>
                                        <button type="button" class="btn btn-dark dropdown-toggle border border-secondary border-start-0 dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        </button>
                                        
                                        <ul class="dropdown-menu" data-bs-theme="dark">
                                        <li><a class="dropdown-item" href="#">iPhone SE</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 8</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 9</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 10</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 11</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 12</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 13</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 14</a></li>
                                        <li><a class="dropdown-item" href="#">iPhone 15</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="text-arg fw-bold">Línea</h6>
                                    <div class="btn-group d-flex mb-3">
                                        <button type="button" class="btn btn-dark border-secondary text-start fst-italic">Pro</button>
                                        <button type="button" class="btn btn-dark dropdown-toggle border border-secondary border-start-0 dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        </button>
                                        
                                        <ul class="dropdown-menu" data-bs-theme="dark">
                                        <li><a class="dropdown-item" href="#">Classic</a></li>
                                        <li><a class="dropdown-item" href="#">Pro</a></li>
                                        <li><a class="dropdown-item" href="#">Pro Max</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="text-arg fw-bold">Capacidad</h6>
                                    <div class="btn-group d-flex mb-3">
                                        <button type="button" class="btn btn-dark border-secondary text-start fst-italic">256 GB</button>
                                        <button type="button" class="btn btn-dark dropdown-toggle border border-secondary border-start-0 dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        </button>
                                        
                                        <ul class="dropdown-menu" data-bs-theme="dark">
                                        <li><a class="dropdown-item" href="#">128 GB</a></li>
                                        <li><a class="dropdown-item" href="#">265 GB</a></li>
                                        <li><a class="dropdown-item" href="#">512 GB</a></li>
                                        <li><a class="dropdown-item" href="#">1 TB</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="text-arg fw-bold">Batería</h6>
                                    <div class="btn-group d-block mb-3">
                                        <input type="range" class="form-range" id="customRange1" value="85" min="0" max="100" step="1">
                                        <p class="fw-bold">Estado: 
                                            <output class="text-warning" id="value"></output><span class="text-warning">%</span>
                                            </p>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="text-arg fw-bold">Color</h6>
                                    <div class="btn-group d-flex mb-3">
                                        <button type="button" class="btn btn-dark border-secondary text-start fst-italic">Pink</button>
                                        <button type="button" class="btn btn-dark dropdown-toggle border border-secondary border-start-0 dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        </button>
                                        
                                        <ul class="dropdown-menu" data-bs-theme="dark">
                                        <li><a class="dropdown-item" href="#">Pink</a></li>
                                        <li><a class="dropdown-item" href="#">Apple Red</a></li>
                                        <li><a class="dropdown-item" href="#">Midnight Blue</a></li>
                                        <li><a class="dropdown-item" href="#">Green</a></li>
                                        <li><a class="dropdown-item" href="#">Space Gray</a></li>
                                        <li><a class="dropdown-item" href="#">Green</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="text-arg fw-bold">Estado</h6>
                                    <div class="btn-group d-flex mb-3">
                                        <button type="button" class="btn btn-dark border-secondary text-start fst-italic">Usado</button>
                                        <button type="button" class="btn btn-dark dropdown-toggle border border-secondary border-start-0 dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        </button>
                                        
                                        <ul class="dropdown-menu" data-bs-theme="dark">
                                        <li><a class="dropdown-item" href="#">Nuevo</a></li>
                                        <li><a class="dropdown-item" href="#">Usado</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="text-arg fw-bold">Garantía</h6>
                                    <div class="btn-group d-flex mb-3">
                                        <button type="button" class="btn btn-dark border-secondary text-start fst-italic" disabled>Local</button>
                                        <button type="button" class="btn btn-dark dropdown-toggle border border-secondary border-start-0 dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                                        </button>
                                        
                                        <ul class="dropdown-menu" data-bs-theme="dark">
                                        <li><a class="dropdown-item" href="#">Local</a></li>
                                        <li><a class="dropdown-item" href="#">Apple</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div data-bs-theme="dark">
                                    <h6 class="text-arg fw-bold">IMEI</h6>
                                    <div class="btn-group d-flex mb-3 text-light">
                                        <input class="form-control border-secondary text-start" type="text" id="formFile" placeholder="123456789123456" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</section>
<script>
    const value = document.querySelector("#value");
const input = document.querySelector("#customRange1");
value.textContent = input.value;
input.addEventListener("input", (event) => {
  value.textContent = event.target.value;
});
</script>

@endsection