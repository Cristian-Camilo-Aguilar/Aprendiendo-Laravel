<input type="text" value="{{ isset($empleado->Nombres)?$empleado->Nombres:'' }}" name="Nombres" id="Nombres" placeholder="Introduzca el Nombre">
<input type="text" value="{{ isset($empleado->PrimerApel)?$empleado->PrimerApel:'' }}" name="PrimerApel" id="PrimerApel" placeholder="Introduzca el Primer Apellido">
<input type="text" value="{{ isset($empleado->SegundoApel)?$empleado->SegundoApel:'' }}" name="SegundoApel" id="SegundoApel" placeholder="Introduzca el Segundo Apellido">
<input type="text" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" name="Correo" id="Correo" placeholder="Introduzca el Email">
<input type="file" name="Foto" id="Foto">
@if (isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="220" height="220">
@endif
<input type="submit" value="Guardar">