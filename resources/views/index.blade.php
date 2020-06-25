@extends ('layout')

@section ('head')
<title>Pokemon index</title>
@endsection

@section ('content')

<div class="container-fluid" style="display: flex; flex-wrap: wrap; justify-content: space-between; padding-bottom: 6rem; width: 100%;">
  @foreach ($pokemons->results as $pokemon)
  <a href="http://pokemon.test/pokemon/{{$pokemon->name}}">
    <div class="card text-left" style="width: 12rem;margin-bottom: 1rem; box-shadow: 2px 2px 6px 2px rgba(0,0,0,0.4);">
      <img class="card-img-top p-2" src="https://img.pokemondb.net/artwork/large/{{$pokemon->name}}.jpg" alt="{{$pokemon->name}}">
      <div class="card-body">
        <h4 class="card-title text-center">{{$pokemon->name}}</h4>
      </div>
    </div>
  </a>
  @endforeach
  <div style="width: 100%; display:flex; justify-content: space-between">
    @if ($pokemons->previous)
    <p><a href="pokemon<?php echo substr($pokemons->previous, (strpos($pokemons->previous, "?"))) ?>">&lt;&lt; previous</a></p>
    @else
    <p>...</p>
    @endif
    @if (true)
    <p><a href="pokemon<?php echo substr($pokemons->next, (strpos($pokemons->next, "?"))) ?>">next &gt;&gt;</a></p>
    @endif
  </div>
</div>

@endsection