<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Proyecto</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="../home.png" class="home"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('visita') }}">Visitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('encomienda') }}">Encomiendas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('trabajadorMantenimiento') }}">Trabajadores de mantenimiento</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('salaEvento') }}">Eventos</a>
        </li>
        </ul>
    </div>
    </nav>
