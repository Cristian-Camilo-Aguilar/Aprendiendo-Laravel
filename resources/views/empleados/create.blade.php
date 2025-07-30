<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>FORMULARIO PARA CREAR EMPLEADOS</h4>
    <form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('empleados.form');
    </form>
</body>
</html>