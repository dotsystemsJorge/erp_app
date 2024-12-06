
    <section id="structure">
        <div class="col-12 text-light">
            <div class="d-none d-md-block">
                <div class="row">
                    <div class="col-12 border-bottom border-1 border-gray bg-darkgray">
                        <nav class="navbar" data-bs-theme="dark">
                            <div class="container-fluid">
                            <a class="navbar-brand " href="{{route('dashboard')}}">
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
                    </div>
                    <div class="col-md-3 text-light border-end border-1 border-gray bg-darkgray"  style="height:88vh">
                        <p class="d-inline-flex gap-1 ms-2">
                            <div class="d-grid">
                                <a class="btn btn-sm text-start ps-3 text-white fw-bold fs-6 btn-nav" data-bs-toggle="collapse" href="#collapse-modules" role="button" aria-expanded="true" aria-controls="collapse-modules">
                                    <i class="bi bi-tools me-2"></i>Módulos
                                </a>
                            </div>
                        </p>
                        <div class="collapse show mt-0 mb-2" aria-expanded="true" id="collapse-modules">
                            <div class="d-grid">
                                <a class="btn btn-sm text-start btn-nav" href="{{route('CRM')}}">
                                    <span class="margin-5"><i class="bi bi-people me-2"></i>CRM <span class="badge rounded-pill text-bg-info">4</span></span>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-sm text-start btn-nav" href="{{route('sales')}}">
                                    <span class="margin-5"><i class="bi bi-cash me-2"></i>Sales <span class="badge rounded-pill text-bg-success">4</span></span>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-sm text-start btn-nav" href="{{route('stock')}}">
                                    <span class="margin-5"><i class="bi bi-box me-2"></i>Stock</span>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-sm text-start btn-nav" href="{{route('HR')}}">
                                    <span class="margin-5"><i class="bi bi-person-rolodex me-2"></i>HR</span>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-sm text-start btn-nav" href="{{route('analysis')}}">
                                    <span class="margin-5"><i class="bi bi-graph-up-arrow me-2"></i>Analysis</span>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-sm text-start btn-nav" href="{{route('billing')}}">
                                    <span class="margin-5"><i class="bi bi-receipt me-2"></i>Billing <span class="badge rounded-pill text-bg-danger">4</span>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-sm text-start btn-nav" href="{{route('administration')}}">
                                    <span class="margin-5"><i class="bi bi-gear me-2"></i>Administration <span class="badge rounded-pill text-bg-danger">4</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        @yield('section')
                    </div>
                </div>

            </div>
        </div>
    </section>  