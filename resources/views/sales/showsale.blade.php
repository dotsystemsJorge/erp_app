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
                <div class="col-8">
                    <div>
                        <h2 class="text-light">ID #1</h2>
                        <h5>Cliente #123 - <a class="text-arg text-decoration-none" href="#" target="_blank">Juan Carlos Fulano</a></h5>
                        <hr>
                    </div>
                    <div data-bs-theme="dark">
                        <div class="mb-4 d-flex align-items-baseline ">
                            <table class="table table-dark table-hover text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Productos</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="col-12 row">
                                                <div class="col-2">
                                                    <button type="button" class="active bg-dark border border-1 border-arg rounded-2 p-1 position-relative">
                                                        <img src="{{asset('img/product_thumbnail/apple_iphone13.png')}}" class="mini-prod-thumbnail" alt="...">
                                                    </button>
                                                </div>
                                                <div class="col-10 my-auto text-start ms-0 ps-0">
                                                    <span class="me-2 text-arg">iPhone 13 pro 256GB 85%</span>
                                                    <span class="badge text-dark bg-pink-iphone">Pink</span>
                                                </div>                            
                                            </div>
                                        </td>
                                        <td>
                                            <span>USD 590</span>
                                        </td>
                                        <td>
                                            <a class="text-decoration-none text-warning" href="" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <i class="bi bi-trash"></i>
                                              </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12 row">
                                                <div class="col-2">
                                                    <button type="button" class="active bg-dark border border-1 border-arg rounded-2 p-1 position-relative">
                                                        <img src="{{asset('img/product_thumbnail/apple_iphone13.png')}}" class="mini-prod-thumbnail" alt="...">
                                                    </button>
                                                </div>
                                                <div class="col-10 my-auto text-start ms-0 ps-0">
                                                    <span class="me-2 text-arg">iPhone 13 pro 256GB 85%</span>
                                                    <span class="badge text-dark bg-pink-iphone">Pink</span>
                                                </div>                            
                                            </div>
                                        </td>
                                        <td>
                                            <span>USD 590</span>
                                        </td>
                                        <td>
                                            <a class="text-decoration-none text-warning" href="" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <i class="bi bi-trash"></i>
                                              </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12 row">
                                                <div class="col-2">
                                                    <button type="button" class="active bg-dark border border-1 border-arg rounded-2 p-1 position-relative">
                                                        <img src="{{asset('img/product_thumbnail/apple_iphone13.png')}}" class="mini-prod-thumbnail" alt="...">
                                                    </button>
                                                </div>
                                                <div class="col-10 my-auto text-start ms-0 ps-0">
                                                    <span class="me-2 text-arg">iPhone 13 pro 256GB 85%</span>
                                                    <span class="badge text-dark bg-pink-iphone">Pink</span>
                                                </div>                            
                                            </div>
                                        </td>
                                        <td>
                                            <span>USD 590</span>
                                        </td>
                                        <td>
                                            <a class="text-decoration-none text-warning" href="" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <i class="bi bi-trash"></i>
                                              </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 row">
                        <div class="col-6">
                            <h4>Detalles de facturación</h4>
                            <div>
                                <div class="my-3">
                                    <span class="d-block"><i class="bi bi-person"> Cliente</i></span>
                                    <a href="" class="d-block ms-4 text-decoration-none text-arg">Juan Carlos Fulanito</a>
                                </div>
                                <div class="my-3">
                                    <span class="d-block"><i class="bi bi-envelope"> Email</i></span>
                                    <a mailto="" class="d-block ms-4 text-decoration-none text-arg">fulanito@mail.com</a>
                                </div>
                                <div class="my-3">
                                    <span class="d-block"><i class="bi bi-envelope"> Teléfono</i></span>
                                    <a href="wa.me/+541111111" target="_blank" class="d-block ms-4 text-decoration-none text-arg">+5411 1122 3344</a>
                                </div>
                                <div class="my-3">
                                    <span class="d-block"><i class="bi bi-envelope"> Dirección</i></span>
                                    <span class="d-block ms-4 text-decoration-none text-arg">Av. Falsa 123, Ciudad de Buenos Aires, ARG</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4>Detalles de entrega</h4>
                            <div class="my-3">
                                <span class="d-block"><i class="bi bi-truck"> Tipo envío</i></span>
                                <span class="d-block ms-4 text-decoration-none text-arg">Entrega en sucursal</span>
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
                            <h4 class="text-arg mb-4">Sumario</h4>
                            <div class="d-flex mb-3">
                                <div class="w-50 text-start text-lightgray fw-bold">
                                    <span class="">Items subtotal:</span>
                                </div>
                                <div class="w-50 text-end">
                                    <span class="">USD 1500</span>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="w-50 text-start text-lightgray fw-bold">
                                    <span class="">Descuento:</span>
                                </div>
                                <div class="w-50 text-end">
                                    <span class="text-danger fw-bold">-USD 75</span>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="w-50 text-start text-lightgray fw-bold">
                                    <span class="">Impuestos:</span>
                                </div>
                                <div class="w-50 text-end">
                                    <span class="text-primary fw-bold">USD 103,53</span>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="w-50 text-start text-lightgray fw-bold">
                                    <span class="">Subtotal:</span>
                                </div>
                                <div class="w-50 text-end">
                                    <span class="fw-bold">USD 1321,47</span>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="w-50 text-start text-lightgray fw-bold">
                                    <span class="">Envío:</span>
                                </div>
                                <div class="w-50 text-end">
                                    <span class="">USD 0 (AR$ 0)</span>
                                </div>
                            </div>
                            <hr style="border-top:dashed 1px;">
                            <div class="d-flex mb-3 fw-bold fs-5">
                                <div class="w-50 text-start text-arg">
                                    <span class="">Total:</span>
                                </div>
                                <div class="w-75 text-end">
                                    <span class="">USD 1321,47</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-2 border border-secondary bg-dark rounded">
                        <div class="my-3 mx-3">
                            <h4 class="text-arg mb-4">Estado de la orden</h4>
                            <div class="mb-3">
                                <h6 class="text-lightgray fw-bold">Estado del pago</h6>
                                <div class="btn-group d-flex mb-3">
                                    <button type="button" class="btn btn-dark border-secondary text-start fst-italic">Pendiente Acreditación</button>
                                    <ul class="dropdown-menu" data-bs-theme="dark"></ul>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-lightgray fw-bold">Estado de la entrega</h6>
                                <div class="btn-group d-flex mb-3">
                                    <button type="button" class="btn btn-dark border-secondary text-start fst-italic">Pendiente</button>
                                    <ul class="dropdown-menu" data-bs-theme="dark"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="row">

        </div>

    </div>

</section>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-dark">
        <div class="modal-header" data-bs-theme="dark">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar producto <span class="text-info">iPhone 13 pro 256GB 85%</span></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Está seguro de eliminar el registro seleccionado?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Volver</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

@endsection