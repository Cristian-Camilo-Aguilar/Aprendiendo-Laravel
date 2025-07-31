@extends('layouts.app')
@section('content')
<div class="container">
    <h4>FORMULARIO PARA CREAR EMPLEADOS</h4>
    <a href="{{ url('/empleados') }}" class="btn btn-primary">Listar Empleados</a>
    <form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('empleados.form',['modo'=>'Guardar'])
    </form>
</div>
@endsection
