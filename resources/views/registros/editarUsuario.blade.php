<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="grid-layout">
        <div class="box header">
            <div class="header-flex-container">

                <a class="header-registro" href="{{ url('/registros') }}"><img src="http://gestachile.cl/wp-content/uploads/2018/07/logo-gesta.jpg" class="logo-gesta"></a>

                @if(auth()->user()->role == 'juntaDeVecinos')

                <a class="header-registro" href="{{ url('/registroTrabMant') }}">Trabajadores de mantenimiento</a>

                <a class="header-registro" href="{{ url('/registroSalaEvento') }}">Eventos</a>

                @endif

                @if(auth()->user()->role == 'admin')

                <a class="header-registro" href="{{ url('/registroVisita') }}">Visitas</a>

                <a class="header-registro" href="{{ url('/registroEncomienda') }}">Encomiendas</a>

                <a class="header-registro" href="{{ url('/registroTrabMant') }}">Trabajadores de mantenimiento</a>

                <a class="header-registro" href="{{ url('/registroSalaEvento') }}">Eventos</a>

                <a class="header-registro" href="{{ url('/registroPropietario') }}">Propietarios</a>

                <a class="header-registro" href="{{ url('/usuarios') }}">Trabajadores</a>

                @endif

                @if(auth()->check())

                <div class="header-session">
                    <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>

                    <button type="button" class="btn btn-warning"><a style="text-decoration: none; color: black"  href="{{ route('login.destroy') }}">Cerrar sesion</a></button>
                </div>

                @endif

            </div>
        </div>

        <div class="box contenido">
            <!--Registro-->

            <form action="{{ route('register.update', $trabajador->id) }}" method="post">

                @csrf
                @method('PUT')
                <div class="container" style="width: 700px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $trabajador->name }}" readonly>
                    </div>
                    <br>
                    <label for="role">Rol</label>
                    <select name="role" id="role" class="form-control">
                        <option value="conserje">Conserje</option>
                        <option value="mayordomo">Mayordomo</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $trabajador->email }}">
                    </div>

                    <br>

                    <input type="submit" class="btn btn-primary" value="Editar">


                </div>

            </form>

        </div>
        <div class="box footer">
            
            <section class="flex-container">
                <div class="datos-footer">
                    <img src="http://gestachile.cl/wp-content/uploads/2018/07/gesta-footer.jpg" class="gesta-footer">
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