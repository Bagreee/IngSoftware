     <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="../logo-gesta.jpg" class="logo-gesta"></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('propietario') }}">Propietarios</a>
                </li>
            </ul>
        </div>
    </nav>