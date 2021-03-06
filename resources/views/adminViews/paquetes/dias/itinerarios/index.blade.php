@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="panel-heading">
        <h3 class="panel-title">ITINERARIO CORTO</h3>
    </div>
    <div class="row">
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="itinerarioCortoContainer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="itinerarioCortoInfo">
                                <p class="formatParraf">
                                    {!!$info != null ? $info : 'No se ha asignado itinerario corto' !!}
                                </p>
                                <a href="{{route('editarCorto',$diaActual)}}"><button class="btn btn-primary">Editar Itinerario Corto</button></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">ITINERARIO LARGO</h3>
                </div>
                @if($infoLarga->isEmpty())
                <p style="text-align: center;">No se ha asignado itinerario largo</p>
                @endif @foreach($infoLarga as $item)
                <div class="itinerarioLargoContainer">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="imageItinerario" style="background-image: url({{$item->imagen}})">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="texto">
                                <p>
                                    {!!$item->texto1 != null ? $item->texto1 : 'No se ha asignado texto'!!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="texto">
                                <p>
                                    {!!$item->texto2 != null ? $item->texto2 : 'No se ha asignado texto'!!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itinerarioLargoActions">
                    <a href="{{route('editarLargo',$item->id_itinerario)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i> Editar esta sección</button></a>
                    <a href="" data-target="#message-box-danger-{{$item->id_itinerario}}" data-toggle="modal"><button class="btn btn-danger deleteSection"><i class="fa fa-trash-o"></i> Eliminar esta sección</button></a>
                </div>

                @include('adminViews.paquetes.dias.itinerarios.deleteSection') @endforeach
                <br>
                <a href="{{route('addSection',$diaActual)}}" style="display: block; margin-top: 1%; margin: auto;"><button style="display: block; margin: auto;" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir nueva sección</button></a>
                <div class="row">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>HOTELES INCLUIDOS</strong></h3>
                        <table class="table">
                            <thead>
                                <th>Hotel</th>
                                <th>Página web</th>
                                <th>Tipo de hotel</th>
                                <th>Sumplemento</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach($hoteles as $item)
                                <tr>
                                    <td>{{$item->nombreHotel}}</td>
                                    <td>{{$item->paginaHotel}}</td>
                                    <td>{{$item->tipoHotel}}</td>
                                    <td style="{{$item->asociado == 0 ? 'color: #f00' : 'color:     #0f0'}}">{{$item->asociado == 0 ? 'No' : 'Sí' }}</td>
                                    <td>
                                        <ul>
                                        <a href="{{route('editAddedHotel',$item->idHotelDia)}}">
                                                        <button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                            <a href="" data-target="#message-box-danger-{{$item->idHotelDia}}" data-toggle="modal">
                                                <button class="btn btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                        </ul>
                                    </td>
                                    @include('adminViews.paquetes.dias.itinerarios.deleteHotel')
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                <div class="itinerarioLargoActions">
                <a href="{{route('addHotel',$diaActual)}}" style="display: block; margin-top: 1%; margin: auto;"><button style="display: block; margin: auto;" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Incluir hotel</button></a>
                        <a href="{{route('editDescHotel',['dia' => $diaActual, 'url'=> url()->current()])}}" style="display: block; margin-top: 1%; margin: auto;"><button style="display: block; margin: auto;" class="btn btn-primary"><i class="fa fa-edit"></i> Editar descripción de la tabla</button></a>
                </div>
                        
                    </div>
                    <a href="{{URL::action('AdminDiasController@show',$paqueteActual)}}"><button type="button" style="margin: 2%;" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->



        </div>
    </div>


</div>
<!-- PAGE CONTENT WRAPPER -->
@endsection @push('infoEmpresa')
<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='{{asset("js/plugins/icheck/icheck.min.js")}}'></script>
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<!-- END PAGE PLUGINS -->
@endpush