@extends('layouts.app')

@extends('layouts.structure')

@section('section')

<section id="Stock">
    <div class="col-12 border-bottom border-1 border-secondary">
        <h2 class="text-light">Stock</h2>
        <button class="btn btn-info text-light fw-bold mb-3">Añadir sucursal</button>
    </div>
    <div class="container row">
        <div class="text-light">
            <div class="col-12 my-3">
                <h3>Sucursales</h3>
            </div>
            <div class="col-12">
                <div class="d-flex flex-row justify-content-between border-bottom border-1 border-secondary mb-3">
                    <div>
                        <i class="bi bi-shop"></i> | <span class="text-arg fw-bold">Lavalleja 40, Ituzaingó</span>
                    </div>
                    <div>
                        <form class="d-flex" role="search">
                        <a class="btn btn-info text-light fw-bold" href="{{route('branch')}}" type="submit">Ingresar</a>
                        </form>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between border-bottom border-1 border-secondary mb-3">
                    <div>
                        <i class="bi bi-shop"></i> | <span class="text-arg fw-bold">Belgrano 501, San Miguel</span>
                    </div>
                    <div>
                        <form class="d-flex" role="search">
                        <button class="btn btn-info text-light fw-bold" type="submit">Ingresar</button>
                        </form>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between border-bottom border-1 border-secondary mb-3">
                    <div>
                        <i class="bi bi-shop"></i> | <span class="text-arg fw-bold">Av. Corrientes 1464, CABA</span>
                    </div>
                    <div>
                        <form class="d-flex" role="search">
                        <button class="btn btn-info text-light fw-bold" type="submit">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example" data-bs-theme="dark">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link">Previo</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
              </li>
            </ul>
        </nav>
    </div>
</section>

@endsection