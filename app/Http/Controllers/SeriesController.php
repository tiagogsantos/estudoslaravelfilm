<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    // Retorna os dados da API de Series Popular
    public function apiSeriesPopular()
    {
        $client = new Client();

        $url = 'https://api.themoviedb.org/3/tv/popular?&language=pt-BR';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $method = 'GET';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $retornoSeriesPopular = $client->request($method, $url, [
            'headers' => $headers
        ]);

        return json_decode($retornoSeriesPopular->getBody(), true)['results'];
    }

    // Retorna os dados de series por id
    public function apiSeriesUnico($id, $season = null)
    {
        $client = new Client();

        $url = 'https://api.themoviedb.org/3/tv/' . $id . '?&language=pt-BR';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $method = 'GET';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $responseSeriesUnico = $client->request($method, $url, [
            'headers' => $headers
        ]);

        return json_decode($responseSeriesUnico->getBody());
    }

    // Retorna o trailer da serie
    public function apiSerieTrailer($id, $season = null)
    {
        $client = new Client();

        $url = 'https://api.themoviedb.org/3/tv/' . $id . '/videos?&language=pt-BR';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $method = 'GET';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $responseSerieTrailer = $client->request($method, $url, [
            'headers' => $headers
        ]);

        return json_decode($responseSerieTrailer->getBody(), true)['results'];
    }

    // Retorna o epsodio atrelado a temporada
   /* public function apiSerieEpisodio($id, $season = null, $episode = null)
    {
        $client = new Client();

        $sessao = ($season == null ? '' : '/season/' . $season . '/episode/' . $episode);

        // dd('https://api.themoviedb.org/3/tv/' . $id . $sessao.'');

        $url = 'https://api.themoviedb.org/3/tv/' . $id . $sessao . '?&language=pt-BR';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $method = 'GET';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $responseSerieEpsodio = $client->request($method, $url, [
            'headers' => $headers
        ]);

        return json_decode($responseSerieEpsodio->getBody(), true);
    } */

    // Retorna as sess??es da temporada
    public function apiTrazerSessao($id, $season = null)
    {
        $client = new Client();

        $sessao = ($season == null ? '' : '/season/' . $season . '');

        $url = 'https://api.themoviedb.org/3/tv/' . $id . $sessao . '?&language=pt-BR';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $method = 'GET';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $responseSerieEpsodio = $client->request($method, $url, [
            'headers' => $headers
        ]);

       /* if (empty(['episodes'])) {
            return json_decode($responseSerieEpsodio->getBody(), true);
        } else {
            return json_decode($responseSerieEpsodio->getBody(), true);
        } */

        return json_decode($responseSerieEpsodio->getBody(), true);
    }

    // Retorno da p??gina index
    public function index()
    {
        $retornoSeriesPopular = $this->apiSeriesPopular();

        return view('series.index', [
            'retornoSeriesPopular' => $retornoSeriesPopular
        ]);
    }

    // Retorna os detalhes das series por id
    public function show($id, $season = null)
    {
        $responseSeriesUnico = $this->apiSeriesUnico($id, $season);
        $responseSerieTrailer = $this->apiSerieTrailer($id, $season);
        $responseSerieEpsodio = $this->apiTrazerSessao($id, $season);

       // dd($responseSerieEpsodio);

        return view('series.show', [
            'responseSeriesUnico' => $responseSeriesUnico,
            'responseSerieTrailer' => $responseSerieTrailer,
            'responseSerieEpsodio' => $responseSerieEpsodio
        ]);
    }
}
