<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>LISTA LOS DATOS DE LOS EMPLEADOS</h4>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>P. Apellido</th>
                <th>S. Apellido</th>
                <th>Correo</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $datos)
            <tr>
                <td>{{ $datos->id }}</td>
                <td><img src="{{ asset('storage').'/'.$datos->Foto }}" alt=""></td>
                <td>{{ $datos->Nombre }}</td>
                <td>{{ $datos->PrimerApel }}</td>
                <td>{{ $datos->SegundoApel }}</td>
                <td>{{ $datos->Email }}</td>
                <td>
                    <a href="{{ url('/empleados/'.$datos->id.'/edit') }}"> 
                        Editar</a> | 

                    <form action="{{ url('/empleados/'.$datos->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Deseas Eliminar?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>