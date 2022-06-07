@extends('layout.master')

@section('content')

    <div class="container">
        <h1 class="mt-4 text-warning font-weight-bold">Atores Populares</h1>
        <div class="row">
            @foreach($responseAtores as $resultadoAtores)
                <div class="col-md-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $resultadoAtores['profile_path'] }}" class="card-img-top img-fluid"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $resultadoAtores['name'] }}</h5>
                            <a class="mt-5" href="{{ route('atores.show', $resultadoAtores['id']) }}">
                                @if($resultadoAtores['gender'] == '1')
                                    <button class="btn btn-outline-warning btn-sm">Visualizar atriz</button>
                                @else
                                    <button class="btn btn-outline-warning btn-sm">Visualizar ator</button>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
