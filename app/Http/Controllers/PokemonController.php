<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PokemonApiService;


class PokemonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = PokemonApiService::getInstance();
        return view('index', ["pokemons" => $client->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = PokemonApiService::getInstance();
        return view('index', ["pokemons" => $client->getById($id)]);
    }
}
