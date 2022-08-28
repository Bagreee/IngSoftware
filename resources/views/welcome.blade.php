@include('header')

<div class="container">
    <div id="list-example" class="list-group">
    <a class="list-group-item list-group-item-action" href="{{ url('visita/create') }}">Registrar visitante</a>
    <a class="list-group-item list-group-item-action" href="{{ url('encomienda/create') }}">Registrar encomienda</a>
    <a class="list-group-item list-group-item-action" href="{{ url('trabajadorMantenimiento/create') }}">Registrar trabajador de mantenimiento</a>
    <a class="list-group-item list-group-item-action" href="{{ url('salaEvento/create') }}">Agendar evento</a>
    </div>
</div>

@include('footer')