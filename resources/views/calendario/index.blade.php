<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
    <script src="js/calendario.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    <!--<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script type="text/javascript">

        var baseURL = {!! json_encode(url('/')) !!}

    </script>


    <title>Document</title>

</head>
<body class="grid-layout">
        <div class="box header">
            <div class="header-flex-container">

                <a class="header-registro" href="{{ url('/') }}"><img src="../logo-gesta.jpg" class="logo-gesta"></a>

                <a class="header-registro" href="{{ url('visita') }}">Visitas</a>

                <a class="header-registro" href="{{ url('encomienda') }}">Encomiendas</a>

                <a class="header-registro" href="{{ url('trabajadorMantenimiento') }}">Trabajadores de mantenimiento</a>

                <a class="header-registro" href="{{ url('salaEvento') }}">Eventos</a>

                <a class="header-registro" href="{{ url('propietario') }}">Propietarios</a>

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
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('propietario/create') }}"><p>Registrar propietario</p></a>
                </div>
            </div>

        </div>
        <div class="box contenido">
            <!--Contenido-->

            
            <div id='calendar' class="calendar"></div>

            <!--Modal-->

            <div class="modal fade" id="calendario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- Formulario -->

                            <form action="{{ url('/calendario') }}" > <!-- method="post" -->

                            @csrf
                            <div class="container">

                                <label for="id_dpto">Departamento del solicitante</label>
                                    <select name="id_dpto" id="id_dpto" class="form-control">
                                    <option value="">Seleccione el departamento</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}">{{ $departamento->numero }}</option>
                                        @endforeach
                                    </select>

                                    <div class="form-group">
                                        <label for="title">Nombre del solicitante</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Nombre" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="asistentes">Cantidad de asistentes</label>
                                        <input type="text" name="asistentes" class="form-control" id="asistentes" placeholder="Asistentes" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="start">Fecha de inicio del evento</label>
                                        <input type="date" name="start" class="form-control" id="start" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="end">Fecha de fin del evento</label>
                                        <input type="date" name="end" class="form-control" id="end" required>
                                    </div>

                                </div>

                            </form>

                            <!-- Formulario Fin -->

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
                            <!--<button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>-->
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal Fin-->
        

            <!--Contenido Fin-->
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