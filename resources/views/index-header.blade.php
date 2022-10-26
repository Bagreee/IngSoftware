<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="grid-layout">
        <div class="box header">
            <div class="header-flex-container">

                <a class="header-registro" href="{{ url('/') }}"><img src="../logo-gesta.jpg" class="logo-gesta"></a>

                @if(auth()->user()->role == 'conserje' or auth()->user()->role == 'mayordomo')

                    <a class="header-registro" href="{{ url('visita') }}">Visitas</a>

                    <a class="header-registro" href="{{ url('encomienda') }}">Encomiendas</a>

                    <a class="header-registro" href="{{ url('trabajadorMantenimiento') }}">Trabajadores de mantenimiento</a>

                    <a class="header-registro" href="{{ url('salaEvento') }}">Eventos</a>

                @endif

                @if(auth()->user()->role == 'mayordomo')

                    <a class="header-registro" href="{{ url('propietario') }}">Propietarios</a>

                @endif

                @if(auth()->check())

                <div class="header-session">
                    <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>

                    <button type="button" class="btn btn-warning"><a style="text-decoration: none; color: black"  href="{{ route('login.destroy') }}">Cerrar sesion</a></button>
                </div>

                @endif

            </div>
        </div>
        <div class="box menu-lateral">
            
            <div class="container">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="{{ url('visita/create') }}"><p>Registrar visitante</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('encomienda/create') }}"><p>Registrar encomienda</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('trabajadorMantenimiento/create') }}"><p>Registrar trabajador de mantenimiento</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('salaEvento/create') }}"><p>Agendar evento</p></a>

                @if(auth()->user()->role == 'mayordomo')
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('propietario/create') }}"><p>Registrar propietario</p></a>
                @endif
                </div>
            </div>

        </div>
        <div class="box contenido">