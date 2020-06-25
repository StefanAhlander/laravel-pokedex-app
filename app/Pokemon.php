<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public $name;
    public $abilities;
    public $stats;

    protected $fillable = ['name', 'abilities', 'stats'];

    static function saveIfNew($pokemon)
    {
        if (!Pokemon::where('name', $pokemon->name)->first()) {
            $newPokemon = Pokemon::create([
                "name" => $pokemon->name,
                "abilities" => json_encode($pokemon->abilities),
                "stats" => json_encode($pokemon->stats),
            ]);

            try {
                $newPokemon->saveOrFail();
            } catch (\Throwable $e) {
                print("Error: " . $e);
            }
        }
    }
}
