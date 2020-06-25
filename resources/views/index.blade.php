@extends ('layout')

@section ('head')
<title>Pokemon index</title>
@endsection

@section ('content')

@foreach ($pokemons->results as $pokemon)
<div class="container-fluid" style="display: flex; flex-wrap: wrap; justify-content: space-between; padding-bottom: 6rem; width: 100%;">
  <a href="http://pokemon.test/pokemon/{{$pokemon->name}}">
    <div class="card text-left" style="width: 12rem;margin-bottom: 1rem; box-shadow: 2px 2px 6px 2px rgba(0,0,0,0.4);">
      <img class="card-img-top" src="https://img.pokemondb.net/sprites/home/normal/{{$pokemon->name}}.png" alt="{{$pokemon->name}}">
      <div class="card-body">
        <h4 class="card-title text-center">{{$pokemon->name}}</h4>
      </div>
    </div>
  </a>
</div>
@endforeach

@endsection