@extends('layout.master')

@section('content')

    <div class="container">
        <h1 class="mt-4 text-warning font-weight-bold">Séries Populares</h1>
        <div class="row">
            @foreach($retornoSeriesPopular as $seriespopular)
                <div class="col-md-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $seriespopular['poster_path'] }}" class="card-img-top"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $seriespopular['name'] }} - <small>{{ $seriespopular['original_name'] }}</small></h5>
                            <i class="bi bi-star-half"></i> <span>{{ $seriespopular['vote_average'] }}</span> |
                            <span>{{ date('d/m/Y', strtotime($seriespopular['first_air_date'])) }}</span> <br/><br/>
                            <a class="mt-5" href="{{ route('series.show', $seriespopular['id']) }}">
                                <button class="btn btn-outline-warning btn-sm">Visualizar</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
