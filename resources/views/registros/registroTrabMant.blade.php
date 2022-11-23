@include('registros/home-header')

<div class="container" style="width: 900px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">
    <table class="table table-striped">
        <thead>
            <th>Departamento</th>
            <th>Nombre</th>
            <th>Labor</th>
            <th>Registrado por</th>
        </thead>
        <tbody>
            @foreach($trabajadoresMantenimiento as $trabajadorMantenimiento)
            <tr>
                <td>{{$trabajadorMantenimiento->departamentos->numero}}</td>
                <td>{{$trabajadorMantenimiento->nombre}}</td>
                <td>{{$trabajadorMantenimiento->labor}}</td>
                <td>{{$trabajadorMantenimiento->trabajador}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content: center;">
        {!! $trabajadoresMantenimiento->links() !!}
    </div>
    <br>

</div>

@include('registros/home-footer')