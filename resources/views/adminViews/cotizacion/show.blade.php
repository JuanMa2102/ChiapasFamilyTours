@extends('masterPage.master') @section('content')
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel-body panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-transform: uppercase">COTIZACIÓN DE {{$datos->nombre}}</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Nombre:</strong> </h3>
                        <p>{{$datos->nombre}}</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Apellido:</strong> </h3>
                        <p>{{$datos->apellido}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Correo electrónico:</strong> </h3>
                        <p>{{$datos->email}}</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Teléfono:</strong> </h3>
                        <p>{{$datos->telefono}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Adultos:</strong> </h3>
                        <p>{{$datos->adultos}}</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Menores de 10 años:</strong> </h3>
                        <p>{{$datos->menoresEdad}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Fecha de llegada:</strong> </h3>
                        <p>{{$datos->fechaLlegada}}</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="panel-title"><strong>Fecha de salida:</strong> </h3>
                        <p>{{$datos->fechaSalida}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="panel-title"><strong>Mensaje:</strong> </h3>
                        <p>{{$datos->mensaje}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h3 class="panel-title" style="font-size: 20px; margin-bottom: 2%;">PAQUETES ELEGIDOS</h3>
                    <table class="table">
                        <thead>
                            <th>Nombre de paquete</th>
                            <th>Días de paquete</th>
                        </thead>
                        <tbody>
                            @foreach($paquetesElegidos as $item)
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->cantidad}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>




                <div class="panel-footer">
                    <a href="{{url('administrador/cotizacion')}}"><button class="btn btn-primary pull-right">Atras</button></a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection