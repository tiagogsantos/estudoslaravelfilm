<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AtoresController extends Controller
{
    // Retorna os atores populares
    public function apiAtoresPopulares()
    {
        $client = new Client();

        $url = 'https://api.themoviedb.org/3/person/popular?&language=pt-BR';

        $method = 'GET';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $responseAtores = $client->request($method, $url, [
            'headers' => $headers
        ]);

        return json_decode($responseAtores->getBody(), true)['results'];
    }

    // Retorno de ator pelo id
    public function apiAtoresUnico($id)
    {
        $client = new Client();

        $url = 'https://api.themoviedb.org/3/person/' . $id . '?&language=pt-BR';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $method = 'GET';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $responseAtorUnico = $client->request($method, $url, [
            'headers' => $headers
        ]);

        return json_decode($responseAtorUnico->getBody(), true);
    }

    // Lista todos os filmes que o ator já fez
    public function apiFilmesAtor ($id)
    {
        $client = new Client();

        $url = 'https://api.themoviedb.org/3/person/'.$id.'/tv_credits?&language=pt-BR';

        $token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4';

        $method = 'GET';

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ];

        $responseFilmesAtor = $client->request($method, $url, [
            'headers' => $headers
        ]);

        return json_decode($responseFilmesAtor->getBody(), true)['cast'];
    }

    // Retorna a página de atores populares
    public function index()
    {
        $responseAtores = $this->apiAtoresPopulares();

        return view('atores.index', [
            'responseAtores' => $responseAtores
        ]);
    }

    public function show($id)
    {
        $responseAtorUnico = $this->apiAtoresUnico($id);
        $responseFilmesAtor = $this->apiFilmesAtor($id);

        return view('atores.show', [
            'responseAtorUnico' => $responseAtorUnico,
            'responseFilmesAtor' => $responseFilmesAtor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
