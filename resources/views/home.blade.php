<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body style="background: #581845;">
<div class="container">     
<div class="row"> 
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 40px;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Adm_Agos/bovedas">Bovedas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Adm_Agos/divisas">Divisas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Adm_Agos/sector">Sector</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Adm_Agos/bancos">Bancos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Adm_Agos/propiedades">Propiedades</a>
      </li>
    </ul>
  </div>
</nav>
</div> <!-- cierre row -->
<div>
    @yield('contenido')
</div>
</div> <!-- cierre container -->
</body>
</html>