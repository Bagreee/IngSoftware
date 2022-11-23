@include('registros/home-header')

<div class="container" style="width: 950px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">
    <table class="table table-striped">
        <thead>
            <th>Departamento</th>
            <th>Nombre</th>
            <th>Fecha de ingreso</th>
            <th>Registrado por</th>
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td>{{$visita->departamentos->numero}}</td>
                <td>{{$visita->nombre}}</td>
                <td>{{$visita->fecha_ingreso}}</td>
                <td>{{$visita->trabajador}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content: center;">
        {!! $visitas->links() !!}
    </div>
    <br>

</div>

@include('registros/home-footer')