<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  @yield ('head')
  <style>
    .footer {
      position: fixed;
      bottom: 0;
      padding: 1rem 1rem 0 0;
      font-size: 1.2rem;
      text-align: end;
      width: 100%;
    }
  </style>
</head>

<body>
  <header>
    <div class="jumbotron">
      <h1 class="display-3">Pokedex</h1>
      <p class="lead">All amazing pokemons in one place</p>
      <hr class="my-2">
    </div>
  </header>

  <div class="container-fluid" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    @yield ('content')
  </div>

  <footer class='footer bg-light'>
    <p>2020 Stefan Åhlander</p>
  </footer>
</body>

</html>