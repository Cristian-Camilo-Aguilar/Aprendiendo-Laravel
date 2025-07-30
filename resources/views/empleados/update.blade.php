<h4>FORMULARIO PARA ACTUALIZAR LOS DATOS DE LOS EMPLEADOS</h4>
<form action="{{ url('/empleados/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('empleados.form');
</form>