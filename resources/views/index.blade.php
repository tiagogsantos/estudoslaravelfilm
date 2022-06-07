@extends('layout.master')

@section('content')

    <div class="container">
        <h1 class="mt-4 text-warning font-weight-bold">Filmes Populares</h1>
        <div class="row">
            @foreach($responseBody as $resultado)
                <div class="col-md-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $resultado['poster_path'] }}" class="card-img-top"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $resultado['title'] }}</h5>
                            <i class="bi bi-star-half"></i> <span>{{ $resultado['vote_average'] }}</span> |
                            <span>{{ date('d/m/Y', strtotime($resultado['release_date'])) }}</span> <br/><br/>
                            <a class="mt-5" href="{{ route('filmes.show', $resultado['id'] ) }}">
                                <button class="btn btn-outline-warning btn-sm">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
