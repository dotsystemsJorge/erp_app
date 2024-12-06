@extends('layouts.app')

@extends('layouts.structure')

@section('section')

<section id="Warehouse">

    <div class="container-fluid">
        <div>
            @include('layouts.navigation_panel')
        </div>
        <div>
            <div class="container-fluid row">
                <div class="col-6">
                    <div class="col-12 container">
                        <div id="carouselExampleCaptions" class="carousel slide text-dark row">
                            <div class="carousel-inner col-12 d-inline border border-2 rounded-3 border-secondary p-3">
                              <div class="carousel-item carousel-img active">
                                <img src="{{asset('img/product_thumbnail/apple_iphone13.png')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item carousel-img">
                                <img src="{{asset('img/product_thumbnail/apple_iphone13_1.png')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item carousel-img">
                                <img src="{{asset('img/product_thumbnail/apple_iphone13_2.png')}}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <div class="col-12 d-inline mt-2">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-dark border border-2 border-arg rounded-2 p-2" aria-current="true" aria-label="Slide 1">
                                    <img src="{{asset('img/product_thumbnail/apple_iphone13.png')}}" class="prod-thumbnail" alt="...">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="bg-dark border border-2 border-secondary rounded-2 p-2">
                                    <img src="{{asset('img/product_thumbnail/apple_iphone13_1.png')}}" class="prod-thumbnail" alt="...">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="bg-dark border border-2 border-secondary rounded-2 p-2">
                                    <img src="{{asset('img/product_thumbnail/apple_iphone13_2.png')}}" class="prod-thumbnail" alt="...">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h2 class="text-arg">Código <span class="text-light">IP13P256RS</span></h2>
                    <h4 class="text-light">iPhone 13 pro</h4>
                    <p class="price-text text-warning">590.00 USD</p>
                    <p class="text-lightgreen fw-bold fs-5">En stock<span class="text-danger"> / Bloqueado por jperez</span></p>
                    <p class="mt-3 fs-3">Características:</p>
                    <p class="text-arg fw-bold">Memoria: <span class="text-light fw-normal">256GB</span></p>
                    <p class="text-arg fw-bold">Batería: <span class="text-light fw-normal">85%</span></p>
                    <p class="text-arg fw-bold">Color: <span class="badge text-dark bg-pink-iphone">Pink</span></p>
                    <p class="text-arg fw-bold">Estado: <span class="badge text-bg-secondary">Usado</span></p>
                    <p class="text-arg fw-bold">IMEI: <span class="text-warning">123456789012345</span></p>
                    <p class="text-arg fw-bold">Almacén: <span class="text-light fw-normal">Stock - Suc Ituzaingó</span></p>
                    <p class="text-arg fw-bold">Posición: <span class="text-light fw-normal">Estantería 3</span></p>
                </div>
            </div>
            <div class="container-row">
                <div>
                    <div class="container">
                        <ul class="nav nav-underline mt-2" data-bs-theme="dark" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active mb-3 product-detail-nav" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Descripción
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link mb-3 product-detail-nav" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Especificaciones
                            </button>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p>
                              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic suscipit cupiditate culpa facilis sapiente asperiores aspernatur, accusantium doloribus quod eum, ut alias voluptatibus aliquam sit. Corporis, quo beatae? Provident, asperiores.
                            </p>
                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-dark table-striped-columns">
                                <tbody class="">
                                  <tr>
                                    <th scope="row">Modelo</th>
                                    <td>iPhone 13 Pro</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Memoria interna</th>
                                    <td>256BG</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Sistema Operativo</th>
                                    <td>iOS15</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Procesador</th>
                                    <td>Chip A15 Bionic 6-core</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
        
    </div>

</section>

@endsection