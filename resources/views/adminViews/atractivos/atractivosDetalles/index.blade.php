@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="panel-heading">
        <h3 class="panel-title">DESCRIPCIÓN DE ATRACTIVO</h3>
    </div>
    <div class="row">
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                @foreach($atractivos as $item)
                <div class="itinerarioLargoContainer">
                    <div class="row title">{{$item->titulo}}</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="imageItinerario" style="background-image: url({{$item->imagen}})">
                            </div>
                            <small>{!!$item->descimagen!!}</small>
                        </div>
                        <div class="col-md-6">
                            <div class="texto">
                                <p>
                                    {!!$item->textolateral!!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="texto">
                                <p>
                                    {!!$item->textopie!!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itinerarioLargoActions">
                    <a href="{{route('editarSeccionAtractivo',$item->id_atractivosdetalles)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i> Editar esta sección</button></a>
                    <a href="" data-target="#message-box-danger-{{$item->id_atractivosdetalles}}" data-toggle="modal"><button class="btn btn-danger deleteSection"><i class="fa fa-trash-o"></i> Eliminar esta sección</button></a>
                </div>

                @include('adminViews.atractivos.atractivosDetalles.deleteSection') 
                @endforeach
                <br>
                <a href="{{route('addSectionAtractivo',$atractivoActual)}}" style="display: block; margin-top: 1%; margin: auto;"><button type="button" style="display: block; margin: auto;" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Añadir nueva sección</button></a>

                <a href="{{URL::action('AdminAtractivosController@index')}}"><button type="button" style="margin: 2%;" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>

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