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
        $pokemons = json_decode(PokemonApiService::getInstance()->get());
        return view('index', compact('pokemons'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = json_decode(PokemonApiService::getInstance()->getById($id));
        return view('show', compact('pokemon'));
    }
}
