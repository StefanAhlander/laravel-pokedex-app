@extends ('layout')

@section ('content')
<div class="container-fluid" style="display: flex; flex-wrap: wrap; justify-content: center; padding-bottom: 6rem; width: 100%;">
  <div class="card text-left" style="width: 16rem;margin-bottom: 1rem; box-shadow: 2px 2px 6px 2px rgba(0,0,0,0.4); ">
    <img class="card-img-top p-2" src="https://img.pokemondb.net/artwork/large/{{$pokemon->name}}.jpg" alt="{{$pokemon->name}}">
    <div class="card-body">
      <h4 class="card-title text-center">{{$pokemon->name}}</h4>
      <div class="card-header text-center">
        Abilities
      </div>
      <ul class="list-group list-group-flush text-center">
        @foreach($pokemon->abilities as $ability)
        <li class="list-group-item">{{$ability->ability->name}}</li>
        @endforeach
      </ul>
      <hr>
      <a class="btn btn-primary text-center" href="{{ url()->previous() }}" role="button">Go Bck</a>
    </div>
  </div>
</div>
@endsection