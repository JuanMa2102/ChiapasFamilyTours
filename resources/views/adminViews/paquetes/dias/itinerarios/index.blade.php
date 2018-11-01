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
                                    {{$info != null ? $info : 'No se ha asignado itinerario corto' }}
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
                @endif
                @foreach($infoLarga as $item)
                <div class="itinerarioLargoContainer">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="imageItinerario">
                                <figure>
                                    <img src="{{$item->imagen != null  ? $item->imagen : ''}}" alt="imagen_{{$item->imagen != null ? $item->imagen : 'No se ha asignado imagen'}}">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="texto">
                                <p>
                                    {{$item->texto1 != null ? $item->texto1 : 'No se ha asignado texto'}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="texto">
                                <p>
                                {{$item->texto2 != null ? $item->texto2 : 'No se ha asignado texto'}}
                                </p>
                            </div>
                        </div>
                    </div>

                    
                </div>
                @endforeach
                <div class="itinerarioLargoActions">
                <a href="{{route('editarLargo',$diaActual)}}"><button style="display: block; margin: auto;" class="btn btn-primary">Editar Itinerario Largo</button></a>
                <a href="{{route('addSection',$diaActual)}}"><button style="display: block; margin: auto;" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir nueva sección</button></a>
                </div>
                
                
                <a href="{{URL::action('AdminDiasController@show',$paqueteActual)}}"><button type="button" style="margin: 2%;" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>

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