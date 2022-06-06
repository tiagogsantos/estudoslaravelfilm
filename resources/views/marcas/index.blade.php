<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">SegerCars</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Comprar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Alugar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container>">
    <a class="btn btn-success float-right" href="{{ route('marcas.create') }}">Adicionar nova marca</a>
</div>

<div class="container-fluid my-5">
    <div class="card mt-5">
        <h5 class="card-header">Carros</h5>
        <div class="card-body">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    @endif
                </div>

                @foreach($montadoras as $montadora)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                @if(!empty($montadora->image))
                                    <img style="width: 100px; height: 100px;" class="img-fluid"
                                         src="/image/{{ $montadora->image }}">
                                @else
                                    <img style="width: 100px; height: 100px;" class="img-fluid"
                                         src="https://images.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><p>{{ $montadora->marcas }}</p></h5>
                                    <a href="{{ route('marcas.edit', ['id' => $montadora->id]) }}">
                                    <button class="btn btn-warning btn-sm">Editar Marca</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>
