@extends('layouts.app')
@section('content')
<div class="container">
    <h4>FORMULARIO PARA ACTUALIZAR LOS DATOS DE LOS EMPLEADOS</h4>
    <a href="{{ url('/empleados') }}" class="btn btn-primary">Regresar</a>
    <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('empleados.form',['modo'=>'Actualizar'])
    </form>
</div>
@endsection