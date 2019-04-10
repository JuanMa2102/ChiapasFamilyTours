<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud de Cotización - Chiapas Family Tours</title>
</head>
<style>
    table, table *{
        border: 1px solid #000 !important;
        text-align: center !important;
        padding: 1% 2% !important;
        vertical-align: middle !important;
    }
</style>
<body>

    <h1>Datos de Cliente</h1>
    @php
    $cont = count($datos) - 1;
    @endphp
    <p>Nombre: {{$datos[$cont]['nombre']}}</p>
    <p>Apellido: {{$datos[$cont]['apellido']}}</p>
    <p>Correo: {{$datos[$cont]['email']}}</p>
    <p>Teléfono: {{$datos[$cont]['telefono']}}</p>
    <p>Número de adultos: {{$datos[$cont]['numeroAdultos']}}</p>
    <p>Número de menores: {{$datos[$cont]['numeroMenores']}}</p>
    <p>Fecha de llegada: {{$datos[$cont]['llegada']}}</p>
    <p>Fecha de salida: {{$datos[$cont]['salida']}}</p>
    <p>Mensaje: {{$datos[$cont]['mensaje']}}</p>
    <br>
    <h3>Paquetes solicitados</h3>
    @foreach($datos as $key => $item)
    @if($key != $cont)
        <p>{{$item}}</p>
    @endif
    @endforeach
    <br>
    <br>
    <p>Cualquier inconveniente favor de comunicarse a nuestra oficina.</p>
    
   

</body>
</html>