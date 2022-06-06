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

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Algum problema para criar a marca.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid my-5">
    <div class="card mt-5">
        <h5 class="card-header">Carros</h5>
        <div class="card-body">
            <form method="post" action="{{ route('marcas.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nome da Marca</label>
                    <input type="text" name="marcas" class="form-control" {{ old('marcas') }}>
                </div>
                <div class="form-group">
                    <label>Imagem do logo</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success">Adicionar marca</button>
                </div>
            </form>
        </div>
    </div>
</div>
