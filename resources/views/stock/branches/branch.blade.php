@extends('layouts.app')

@extends('layouts.structure')

@section('section')

<section id="Store">

    <div class="container">
        <div>
            @include('layouts.navigation_panel')
        </div>
        <div class="">
            <h2 class="text-light">Sucursal <span class="text-arg">xxx</span></h2>
        </div>
        <div class="">
            <h4 class="text-light">Almacenes disponibles</h4>
            <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1001</th>
                    <td>Disponibles</td>
                    <td>
                        <a href="{{route('warehouse')}}"><i class="bi bi-eye text-info"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th>1002</th>
                    <td>Servicio Técnico</td>
                    <td>
                        <a href="{{route('warehouse')}}"><i class="bi bi-eye text-info"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th>1003</th>
                    <td>Inoperativos</td>
                    <td>
                        <a href="{{route('warehouse')}}"><i class="bi bi-eye text-info"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th>1004</th>
                    <td>Reservados</td>
                    <td>
                        <a href="{{route('warehouse')}}"><i class="bi bi-eye text-info"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th>1005</th>
                    <td>Scrap</td>
                    <td>
                        <a href="{{route('warehouse')}}"><i class="bi bi-eye text-info"></i></a>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
        
    </div>

</section>

@endsection