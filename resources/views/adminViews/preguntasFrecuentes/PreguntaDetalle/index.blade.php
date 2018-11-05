@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    
    <div class="row">
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h3 class="panel-title">Respuesta Secundaria</h3>
                </div>
                @if($Detalle->isEmpty())
                <p style="text-align: center;">No se ha asignado respuesta secundaria</p>
                @endif 
                @foreach($Detalle as $item)
                <div class="itinerarioLargoContainer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="texto">
                                <p>
                                    {{$item->titulo != null ? $item->titulo : 'No se ha asignado titulo'}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="imageItinerario" style="background-image: url({{$item->imagen}})">

                            </div>
                            <p>
                                    {{$item->infoImagen != null ? $item->infoImagen : 'No se ha asignado pie de imagen'}}
                                    {{$item->fuente != null ? $item->fuente : 'Sin Fuente'}}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="texto">
                                <p>
                                    {{$item->descripcion != null ? $item->descripcion : 'No se ha asignado una descripcion'}}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="itinerarioLargoActions">
                    <a href="{{URL::action('AdminPreguntasFrecuentesDetalleController@edit',$item->id_preguntasFrecuentesDetalle)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i> Editar esta sección</button></a>
                    <a href="" data-target="#message-box-danger-{{$item->id_preguntasFrecuentesDetalle}}" data-toggle="modal"><button class="btn btn-danger deleteSection"><i class="fa fa-trash-o"></i> Eliminar esta sección</button></a> 
                </div>
                 @include('adminViews.preguntasFrecuentes.PreguntaDetalle.delete')
                @endforeach
                <br>
                    <a href="{{URL::action('AdminPreguntasFrecuentesDetalleController@create')}}" style="display: block; margin-top: 1%; margin: auto;"><button style="display: block; margin: auto;" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir nueva sección</button></a>
                
                <a href="{{URL::action('AdminPreguntasFrecuentesController@index')}}"><button type="button" style="margin: 2%;" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>

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