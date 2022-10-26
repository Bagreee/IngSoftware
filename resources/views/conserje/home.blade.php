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

                <a class="header-registro" href="{{ url('/conserje') }}"><img src="../logo-gesta.jpg" class="logo-gesta"></a>

                <a class="header-registro" href="{{ url('conserje/visita') }}">Visitas</a>

                <a class="header-registro" href="{{ url('conserje/encomienda') }}">Encomiendas</a>

                <a class="header-registro" href="{{ url('conserje/trabajadorMantenimiento') }}">Trabajadores de mantenimiento</a>

                <a class="header-registro" href="{{ url('conserje/salaEvento') }}">Eventos</a>

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
                    <a class="list-group-item list-group-item-action" href="{{ url('conserje/visita/create') }}"><p>Registrar visitante</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('conserje/encomienda/create') }}"><p>Registrar encomienda</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('conserje/trabajadorMantenimiento/create') }}"><p>Registrar trabajador de mantenimiento</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('conserje/salaEvento/create') }}"><p>Agendar evento</p></a>
                </div>
            </div>

        </div>
        <div class="box contenido">
            <!--Registro-->
            home conserje
        </div>
        <div class="box footer">
            
            <section class="flex-container">
                <div class="datos-footer">
                    <img src="../gesta-footer.jpg" class="gesta-footer">
                </div>

                <div class="datos-footer">
                    <p>
                        Villaseca 964, Ñuñoa, Santiago - Chile
                        <br>
                        Teléfonos: +56 22225 8712 / +56 22684 9813 / <br> +56 22684 9818
                        <br>
                        Email: administraciones@gestachile.cl
                    </p>
                </div>

                <div class="datos-footer">
                    <p>
                        <strong>Horario de atención:</strong>
                    </p>
                    <p>
                        Lunes a Viernes : 09:00 a 18:00 horas.
                    </p>
                </div>
            </section>

        </div>
</body>
</html>