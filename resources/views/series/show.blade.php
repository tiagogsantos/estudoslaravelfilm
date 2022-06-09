@extends('layout.master')

@section('content')

    <div class="container-fluid mt-5">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="img-fluid"
                         src="https://image.tmdb.org/t/p/w500/{{ $responseSeriesUnico->poster_path }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $responseSeriesUnico->original_name }}</h5>
                        <p class="card-text">Sinopse: {{ $responseSeriesUnico->overview }}</p>
                        <p>Lançamento: {{ date('d/m/Y', strtotime($responseSeriesUnico->first_air_date)) }}</p>
                        @foreach($responseSeriesUnico->genres as $categoria)
                            <button class="btn btn-outline-info btn-sm">{{$categoria->name}}</button>
                        @endforeach
                        <br/><br/>

                        @foreach($responseSeriesUnico->seasons as $season)
                            <button id="valor" value="{{ $season->id }}" class="btn btn-outline-primary puxamodal"
                                    data-toggle="modal"
                                    data-target="#staticBackdrop{{ $season->id }}">{{ $season->name }}</button>

                            <div class="modal fade" id="staticBackdrop{{ $season->id }}" data-backdrop="static"
                                 data-keyboard="false"
                                 tabindex="-1"
                                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-black-50"
                                                id="staticBackdropLabel">{{ $responseSeriesUnico->original_name }}
                                                / {{ $season->name }} - <strong>{{ $season->id }}</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-dark">
                                            @if(empty($season->overview))
                                                <div class="alert alert-warning" role="alert">
                                                    Não existe sinopse cadastrada para esta temporada!
                                                </div>
                                            @else
                                                Sinopse da <strong>{{ $season->name }}</strong>: {{ $season->overview }}
                                            @endif

                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    @if(!empty($responseSerieEpsodio))
                                                        @foreach($responseSerieEpsodio['seasons'] as $episodios)
                                                            <a class="nav-link text-dark" id="nav-profile-tab"
                                                               data-toggle="tab"
                                                               href="#nav-profile{{ $episodios->episode_number }}"
                                                               role="tab"
                                                               aria-controls="nav-profile"
                                                               aria-selected="false">{{ $episodios->episode_number }}</a>
                                                        @endforeach
                                                    @else
                                                    @endif
                                                </div>
                                            </nav>

                                            <div class="tab-content" id="nav-tabContent">
                                                @foreach($responseSerieEpsodio['seasons'] as $episodios)
                                                    <div class="tab-pane fade"
                                                         id="nav-profile{{ $episodios->episode_number }}"
                                                         role="tabpanel"
                                                         aria-labelledby="nav-profile-tab">
                                                        <p class="text-dark">{{ $episodios->name }}</p> <br/>
                                                        <p class="text-dark">{{ $episodios->overview }}</p>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Fechar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="mt-3 embed-responsive embed-responsive-16by9">
                            @foreach($responseSerieTrailer as $video)
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

    <script type="text/javascript">

        /* $(".puxamodal").focusout(function () {
             let valorSelecionado = $("#valor").val();
             alert(valorSelecionado);
         }); */

        /*  $(".puxamodal").on("click", function () {
             alert(pegaValor);
          }); */

    </script>

@endsection
