@extends('layouts.app')

@extends('layouts.structure')

@section('section')

<section id="Warehouse">

  <div class="container-fluid">
    <div>
        @include('layouts.navigation_panel')
    </div>
    <div>
        <h2 class="text-light">Almacén <span class="text-arg">xxx</span></h2>
    </div>
    <div>
        <h4 class="text-light">Productos disponibles</h4>
        <div>
            <div class="container-fluid d-inline">
                <form class="row g-3 align-items-center" role="search">
                    <div class="col-4 d-flex me-5">
                        <div class="dropdown">
                            <button type="button" class="btn-left btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" >
                              Línea
                            </button>
                            <ul class="dropdown-menu" data-bs-theme="dark">
                              <li><a class="dropdown-item" href="#">Accesorios</a></li>
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
                        <div class="dropdown">
                            <button type="button" class="btn-right btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                              Tipo
                            </button>
                            <ul class="dropdown-menu" data-bs-theme="dark">
                              <li><a class="dropdown-item" href="#">Classic</a></li>
                              <li><a class="dropdown-item" href="#">Plus</a></li>
                              <li><a class="dropdown-item" href="#">Pro</a></li>
                              <li><a class="dropdown-item" href="#">Pro Max</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4 d-flex" data-bs-theme="dark">
                        <input class="form-control me-2" type="search" placeholder="Ingresar texto a buscar" aria-label="Buscar producto">
                        <button class="btn btn-dark border-secondary text-arg fw-bold" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">CódProd</th>
                <th scope="col">Image</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoría</th>
                <th scope="col">Color</th>
                <th scope="col">Tags</th>
                <th scope="col">Acción</th>
              </tr>
            </thead>
            <tbody class="">
              <tr>
                <th>1</th>
                <td class="fw-light">IP13P256RS</td>
                <td><img src="{{asset('img/product_thumbnail/apple_iphone13.png')}}" class="prod-thumbnail rounded-3" alt="..."></td>
                <td>
                  <a href="{{route('product')}}" class="text-arg fw-bold text-decoration-none align-self-center my-auto py-auto">iPhone 13 pro 256GB 85%</a>
                </td>
                <td class="fw-bold">U$D 590</td>
                <td class="fw-light">Teléfono</td>
                <td class="fw-light">
                  <span class="badge text-dark bg-pink-iphone">Pink</span>
                </td>
                <td>
                  <span class="badge text-bg-secondary">USADO</span>
                  <span class="badge text-bg-success">PRO</span>
                </td>
                <td class="text-center">
                  <a class="text-decoration-none text-info" href="{{route('product')}}">
                    <i class="bi bi-eye"></i>
                  </a>
                  <div class="vr"></div>
                  <a class="text-decoration-none text-danger" href="" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="bi bi-trash"></i>
                  </a>
                  <div class="vr"></div>
                  <a class="text-decoration-none text-success" href="{{route('editproduct')}}">
                    <i class="bi bi-pencil"></i>
                  </a>
                </td>
              </tr>
            </tbody>
        </table>
    </div>
    
  </div>

</section>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header" data-bs-theme="dark">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar producto <span class="text-info">IP13P256RS</span></h1>
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