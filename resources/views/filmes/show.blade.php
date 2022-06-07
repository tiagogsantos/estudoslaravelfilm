@extends('layout.master')

@section('content')

    <div class="container-fluid mt-5">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="img-fluid" src="https://image.tmdb.org/t/p/w500/{{ $responseBodyFilme->poster_path }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $responseBodyFilme->title }}</h5>
                        <p class="card-text">Sinopse: {{ $responseBodyFilme->overview }}</p>
                        <p>Lançamento: {{ date('d/m/Y', strtotime($responseBodyFilme->release_date)) }}</p>
                        @foreach($responseBodyFilme->genres as $categoria)
                            <button class="btn btn-outline-info btn-sm">{{$categoria->name}}</button>
                        @endforeach
                        <br/><br/>

                        <?php $count = 0; ?>
                        Elenco:
                        @foreach($responseAtores as $atores)
                            <?php if ($count == 10) break; ?>
                            <span>{{ $atores['name'] }}, </span>
                            <?php $count++; ?>
                        @endforeach

                        <div class="mt-3 embed-responsive embed-responsive-16by9">
                            @foreach($responseBodyTrailer as $video)
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/{{ $video['key'] }}"
                                        allowfullscreen></iframe>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Filmes similares</h3>

        <?php $contagem = 0; ?>
        <div class="row">
            @foreach($responseBodyFilmeSimilar as $similar)
                <?php if ($contagem == 6) break; ?>
                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://image.tmdb.org/t/p/w500/{{ $similar['poster_path'] }}"
                                 class="card-img-top"
                                 alt="{{ $similar['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $similar['title'] }}</h5>
                                <i class="bi bi-star-half"></i> <span>{{ $similar['vote_average'] }}</span> |
                                <span>{{ date('d/m/Y', strtotime($similar['release_date'])) }}</span> <br/><br/>
                                <a class="mt-5" href="{{ route('filmes.show', $similar['id'] ) }}">
                                    <button class="btn btn-outline-warning btn-sm">Visualizar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $contagem++; ?>
            @endforeach
        </div>
    </div>

@endsection
