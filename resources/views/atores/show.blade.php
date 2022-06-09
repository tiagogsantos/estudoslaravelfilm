@extends('layout.master')

@section('content')
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="https://image.tmdb.org/t/p/w500/{{ $responseAtorUnico['profile_path'] }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $responseAtorUnico['name'] }}</h5>
                        <p class="card-text">Biográfia: {{ $responseAtorUnico['biography'] }}</p>
                        <i class="bi bi-calendar-date"></i> {{ date('d-m-Y', strtotime($responseAtorUnico['birthday'])) }}
                        / {{ $responseAtorUnico['place_of_birth'] }}
                    </div>
                </div>
                <div class="col-md-12">
                    <ul>
                        @foreach($responseFilmesAtor as $filmeator)
                            <li>{{ $filmeator['name'] }} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
