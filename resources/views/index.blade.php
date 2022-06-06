@extends('layout.master')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($responseBody as $resultado)
                <div class="col-md-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $resultado['poster_path'] }}" class="card-img-top"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $resultado['title'] }}</h5>
                            <input type="text" name="idFilmes" id="idFilme" data-teste="{{ $resultado['id'] }}">
                            <a href="{{ route('filmes.show', $resultado['id'] ) }}">
                                <button id="idFilme" class="btn btn-warning valor">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
