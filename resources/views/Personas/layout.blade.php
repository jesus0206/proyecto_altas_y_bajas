<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Personas</title>
</head>
<body>
  <h1>Personas</h1>
  <nav class="navbar-btn"><ul>
    <a href="{{route('Personas.index')}}" class="btn btn-info">Lista Personas</a>
    <a href="{{route('Personas.create')}}" class="btn btn-info">Registrar</a>
    <a href=""></a>
    <a href=""></a>
  </ul></nav>

  @yield('contenido')
  
  <footer>{{now()}}</footer>
</body>
</html>