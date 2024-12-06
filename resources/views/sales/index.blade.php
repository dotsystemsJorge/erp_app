@extends('layouts.app')

@extends('layouts.structure')

@section('section')

<section>
    <div class="container-fluid">
        <div>
            <h2 class="text-light">Órdenes de venta</h2>
        </div>
        <div>
            <h3 class="text-arg">Dashboard</h3>
            <div class="m-3">
                <a href="{{route('newsale')}}" class="btn btn-success me-2" style="white-space: nowrap;">Crear venta</a>
                <div class="col-12">
                    <canvas id="globalSalesYear" style="height:30%!important;width:50%"></canvas>
                </div>
                <div class="d-flex flex-row mt-3">
                    <div class="container-fluid border border-secondary bg-dark rounded p-3 me-2">
                        <h6>Total Ordenes mensuales <span class="badge badge-pending rounded-5"> +1.1% </i></span></h6>
                        <div>
                            <canvas id="totalVentasMes" style="height:200px!important;width:200px"></canvas>
                        </div>
                    </div>
                    <div class="container-fluid border border-secondary bg-dark rounded p-3 ms-2">
                        <h6>Estado Ordenes <span class="badge badge-oncourse rounded-5"> Var +3% </i></span></h6>
                        <div>
                            <canvas id="estadoGlobalOrdenes" style="height:100%!important;width:100%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container-fluid d-inline">
                    <form class="row co-12 g-3 align-items-center" role="search">
                        <div class="col-4 d-flex">
                            <a href="{{route('newsale')}}" class="btn btn-success me-2" style="white-space: nowrap;">Crear venta</a>
                            <div class="dropdown">
                                <button type="button" class="btn-left btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                                  Sucursal
                                </button>
                                <ul class="dropdown-menu" data-bs-theme="dark">
                                  <li><a class="dropdown-item" href="#">Sucursal 1</a></li>
                                  <li><a class="dropdown-item" href="#">Sucursal 2</a></li>
                                  <li><a class="dropdown-item" href="#">Sucursal 3</a></li>
                                  <li><a class="dropdown-item" href="#">Sucursal 4</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn-center btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" >
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
                                  Estado
                                </button>
                                <ul class="dropdown-menu" data-bs-theme="dark">
                                  <li><a class="dropdown-item" href="#">Completo</a></li>
                                  <li><a class="dropdown-item" href="#">Pendiente</a></li>
                                  <li><a class="dropdown-item" href="#">En curso</a></li>
                                  <li><a class="dropdown-item" href="#">Cancelado</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-8 d-flex" data-bs-theme="dark">
                            <input class="form-control me-2" type="search" placeholder="Ingresar texto a buscar" aria-label="Buscar producto">
                            <button class="btn btn-dark border-secondary text-arg fw-bold" type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-hover text-center">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Monto</th>
                        <th scope="col">CódProd</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Estado orden</th>
                        <th scope="col">Forma pago</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{route('showsale')}}" class="text-arg fw-bold text-decoration-none align-self-center my-auto py-auto">#1</a>
                            </td>
                            <td class="fw-bold">U$D 590</td>
                            <td class="fw-light">IP13P256RS</td>
                            <td class="fw-light">Juan Carlos Fulano</td>
                            <td>
                                <img src="{{ asset('favicon.png') }}" class="rounded-circle" alt="..." style="height: 2.5rem;"> Jorge Falcón
                            </td>
                            <td class="fw-light">
                                <span class="badge badge-complete">Completo <i class="bi bi-check-lg"></i></span>
                            </td>
                            <td class="fw-light fst-italic">
                                Efectivo U$D
                            </td>
                            <td>
                                10/9/2024
                            </td>
                            <td class="text-center">
                            <a class="text-decoration-none text-info" href="{{route('showsale')}}">
                                <i class="bi bi-eye"></i>
                            </a>
                            <div class="vr"></div>
                            <a class="text-decoration-none text-success" href="">
                                <i class="bi bi-pencil"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <a href="{{route('showsale')}}" class="text-arg fw-bold text-decoration-none align-self-center my-auto py-auto">#2</a>
                            </th>
                            <td class="fw-bold">U$D 590</td>
                            <td class="fw-light">IP13P256RS</td>
                            <td class="fw-light">Juan Carlos Fulano</td>
                            <td>
                                <img src="{{ asset('favicon.png') }}" class="rounded-circle" alt="..." style="height: 2.5rem;"> Matias Orue
                            </td>
                            <td class="fw-light">
                                <span class="badge badge-pending">Pendiente Validación <i class="bi bi-hourglass-split"></i></span>
                            </td>
                            <td class="fw-light fst-italic">
                                Transferencia 3ros
                            </td>
                            <td>
                                10/9/2024
                            </td>
                            <td class="text-center">
                            <a class="text-decoration-none text-info" href="{{route('showsale')}}">
                                <i class="bi bi-eye"></i>
                            </a>
                            <div class="vr"></div>
                            <a class="text-decoration-none text-success" href="">
                                <i class="bi bi-pencil"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <a href="{{route('showsale')}}" class="text-arg fw-bold text-decoration-none align-self-center my-auto py-auto">#3</a>
                            </th>
                            <td class="fw-bold">U$D 590</td>
                            <td class="fw-light">IP13P256RS</td>
                            <td class="fw-light">Juan Carlos Fulano</td>
                            <td>
                                <img src="{{ asset('favicon.png') }}" class="rounded-circle" alt="..." style="height: 2.5rem;"> Antonio Lezcano
                            </td>
                            <td class="fw-light">
                                <span class="badge badge-cancel">Cancelado <i class="bi bi-x-circle"></i></span>
                            </td>
                            <td class="fw-light fst-italic">
                                Trans
                            </td>
                            <td>
                                10/9/2024
                            </td>
                            <td class="text-center">
                            <a class="text-decoration-none text-info" href="{{route('showsale')}}">
                                <i class="bi bi-eye"></i>
                            </a>
                            <div class="vr"></div>
                            <a class="text-decoration-none text-success" href="">
                                <i class="bi bi-pencil"></i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <a href="{{route('showsale')}}" class="text-arg fw-bold text-decoration-none align-self-center my-auto py-auto">#4</a>
                            </th>
                            <td class="fw-bold">U$D 590</td>
                            <td class="fw-light">IP13P256RS</td>
                            <td class="fw-light">Juan Carlos Fulano</td>
                            <td>
                                <img src="{{ asset('favicon.png') }}" class="rounded-circle" alt="..." style="height: 2.5rem;"> Antonio Lezcano
                            </td>
                            <td class="fw-light">
                                <span class="badge badge-oncourse">En curso <i class="bi bi-info-circle"></i></span>
                            </td>
                            <td class="fw-light fst-italic">
                                TC / Trans / Efectivo
                            </td>
                            <td>
                                10/9/2024
                            </td>
                            <td class="text-center">
                            <a class="text-decoration-none text-info" href="{{route('showsale')}}">
                                <i class="bi bi-eye"></i>
                            </a>
                            <div class="vr"></div>
                            <a class="text-decoration-none text-success" href="">
                                <i class="bi bi-pencil"></i>
                            </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
</section>
@include('sales.charts')

@endsection