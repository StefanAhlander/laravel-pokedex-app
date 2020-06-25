<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PokemonApiService;
use App\Pokemon;


class PokemonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryString = "";
        if ($request->has('offset')) {
            $offset = $request->get('offset');
            $queryString .= "?offset=" . $offset . "&limit=20";
        }

        $pokemons = json_decode(PokemonApiService::getInstance()->get($queryString));
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

        if (!Pokemon::where('name', $pokemon->name)->first()) {
            $newPokemon = Pokemon::create([
                "name" => $pokemon->name,
                "abilities" => json_encode($pokemon->abilities),
                "stats" => json_encode($pokemon->stats),
            ]);

            try {
                $newPokemon->save();
            } catch (\Throwable $e) {
                print("Error: " . $e);
            }
        }
        return view('show', compact('pokemon'));
    }
}
