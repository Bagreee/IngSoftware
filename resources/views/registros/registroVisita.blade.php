@include('registros/home-header')

<div class="container" style="width: 750px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Departamento</th>
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td>{{$visita->nombre}}</td>
                <td>{{$visita->departamentos->numero}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

</div>

@include('registros/home-footer')