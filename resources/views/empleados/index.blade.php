<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
    
    <!-- Recibe la Funcion mensaje desde el Controlador para mostrar un Mensaje de Confirmacion -->
    @if((Session::has('mensaje')))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}
        </div>  
    @endif

        <h4>LISTA LOS DATOS DE LOS EMPLEADOS</h4>
        <a href="{{ ('/empleados/create') }}" class="btn btn-primary">Registrar Nuevo Empleado</a>
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
                    <td><img src="{{ asset('storage').'/'.$datos->Foto }}" alt="" width="220px" height="220px"></td>
                    <td>{{ $datos->Nombres }}</td>
                    <td>{{ $datos->PrimerApel }}</td>
                    <td>{{ $datos->SegundoApel }}</td>
                    <td>{{ $datos->Correo }}</td>
                    <td>
                        <a href="{{ url('/empleados/'.$datos->id.'/edit') }}" class="btn btn-warning"> 
                            Editar</a> | 

                        <form action="{{ url('/empleados/'.$datos->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Deseas Eliminar?')" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $empleados->Links() !!}
    </div>
    @endsection
</body>
</html>