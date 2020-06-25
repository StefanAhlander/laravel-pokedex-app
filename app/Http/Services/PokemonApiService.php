<?php

namespace App\Http\Services;

use GuzzleHttp\Client;

class PokemonApiService
{
  private static $instance = null;

  private function __construct()
  {
    $this->client = new Client(['base_uri' => 'https://pokeapi.co/api/v2/']);
  }

  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new PokemonApiService();
    }

    return self::$instance;
  }

  public function get($queryString)
  {
    $uri = "pokemon" . $queryString;
    return $this->client->request('GET', $uri)->getBody()->getContents();
  }

  public function getById($id)
  {
    return $this->client->request('GET', "pokemon/${id}")->getBody()->getContents();
  }
}
