<?php

namespace App\Http\Controllers;

use App\Models\Montadoras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MarcasController extends Controller
{
    public function apiThemeFilmes()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.themoviedb.org/3/movie/popular?&language=pt-BR&imdb_id=tt0137523',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept-Charset: utf-8',
                'Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmZmNhYWNjYThjYzIzMWM0YzJkMDc1ZGJhMTZkM2Q2MiIsInN1YiI6IjVmODM4YzJhOTVjMGFmMDAzOTdkZjU3ZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LPPQ2_7C3rBT4BPC4c3F2SShBkgpyFeS4X20k2oEUO4'
            ),
        ));

        $responseBody = curl_exec($curl);

        curl_close($curl);

        return json_decode($responseBody, true)['results'];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responseBody = $this->apiThemeFilmes();

        return view('index', [
            'responseBody' => $responseBody
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'marcas' => 'required'
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $inputs = $request->all();

        if (!empty($image = $request->file('image'))) {
            $caminhoSalvar = 'image/';
            $perfilImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($caminhoSalvar, $perfilImage);
            $inputs['image'] = "$perfilImage";
        }

        Montadoras::create($inputs);

        return redirect()->route('marcas.index')->with('success', 'Marca foi cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $montadora = Montadoras::where('id', $id)->first();

        return view('marcas.edit', [
            'montadora' => $montadora
        ]);
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
