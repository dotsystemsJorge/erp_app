@section('nav')
<nav class="navbar" data-bs-theme="dark">
    <div class="container-fluid">
    <a class="navbar-brand " href="#">
        <img src="{{ asset('favicon.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        Bootstrap
    </a>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-info" type="submit">Buscar</button>
    </form>
    <form class="d-flex" role="search">
        <img src="{{ asset('favicon.png') }}" class="rounded-circle" alt="...">
    </form>
    </div>
</nav>
@endsection