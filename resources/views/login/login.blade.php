
@extends('layouts.app')

@section('login_content')

    <section id="loginForm" class="login-box-container">
        <div class="d-flex justify-content-center pt-5">
            <div class="login-box">
                <div class="px-3 my-3 text-light">
                    <div class="text-center mb-3">
                        <h1 class="login-title">Sign in</h1>
                        <span class="login-subtitle">Por favor, valide sus datos para ingresar al sistema.</span>
                    </div>
                    <form action="{{ route('dashboard') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-center">
                            <label for="exampleInputEmail1" class="form-label">Dirección de email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 text-center">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-light mb-3 ">Enviar</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection