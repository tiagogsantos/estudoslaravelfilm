@extends('layout.master')

@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="img-fluid" src="https://image.tmdb.org/t/p/w500/{{ $responseBodyFilme->poster_path }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $responseBodyFilme->title }}</h5>
                        <p class="card-text">{{ $responseBodyFilme->overview }}</p>
                        <p>Data de Lançamento: {{ date('d/m/Y', strtotime($responseBodyFilme->release_date)) }}</p>
                        <div class="embed-responsive embed-responsive-16by9">
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

@endsection
