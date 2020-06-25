@extends ('layout')

@section ('content')
<div class="container-fluid" style="display: flex; flex-wrap: wrap; justify-content: space-between; padding-bottom: 6rem; width: 100%;">
  <div class="card text-left" style="width: 12rem;margin-bottom: 1rem; box-shadow: 2px 2px 6px 2px rgba(0,0,0,0.4); ">
    <img class="card-img-top" src="https://img.pokemondb.net/sprites/home/normal/{{$pokemon->name}}.png" alt="{{$pokemon->name}}">
    <div class="card-body">
      <h4 class="card-title text-center">{{$pokemon->name}}</h4>
      <hr>
      <p>Abilities:</p>
      @foreach($pokemon->abilities as $ability)
      <p>{{$ability->ability->name}}</p>
      @endforeach
    </div>
  </div>
</div>
@endsection