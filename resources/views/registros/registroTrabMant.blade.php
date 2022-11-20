@include('registros/home-header')

<div class="container" style="width: 900px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Labor</th>
        </thead>
        <tbody>
            @foreach($trabajadoresMantenimiento as $trabajadorMantenimiento)
            <tr>
                <td>{{$trabajadorMantenimiento->nombre}}</td>
                <td>{{$trabajadorMantenimiento->departamentos->numero}}</td>
                <td>{{$trabajadorMantenimiento->labor}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

</div>

@include('registros/home-footer')