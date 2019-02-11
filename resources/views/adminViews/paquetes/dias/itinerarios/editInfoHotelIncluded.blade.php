@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
            <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->

            {!!Form::model($descripcion,array('method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data','files'=>'true','action'=> ['AdminItinerariosController@update',$descripcion[0]->id_dias] ))!!} {{Form::token()}}
            <input type="hidden" name="url" value="{{$urlPaginaAnterior}}">
            <input name="tipoItinerario" type="hidden" value="descTablas">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Editando información de tabla incluido<strong></h3>
                </div>
                <div class="panel-body">
                    <div class="seccionItinerario">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Descripción de tabla</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                <textarea class="summernote" name="descripcion">{{$descripcion[0]->descripcion}}</textarea>
                                </div>
                            </div>
                        </div>
                        @foreach($tipoHotel as $key => $item)
                        <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Precio de habitación doble en hotel {{$item->descripcion}}</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                    <input type="text" name="precioHotelDoble[{{$item->id_tipoHotel}}]" class="form-control" value="{{$descripcion[$key]->precio}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Precio de habitación cuádruple en hotel {{$item->descripcion}}</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                    <input type="text" name="precioHotelCuadruple[{{$item->id_tipoHotel}}]" class="form-control" value="{{$descripcion[$key]->preciocuadruple}}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        

                </div>
                <div class="panel-footer">
                <a href="{{$urlPaginaAnterior}}"><button type="button" style="margin: 2%;" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
                    
                    <button class="btn btn-primary pull-right">Guardar</button>
                </div>
            </div>
            {!!Form::close()!!}

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->
@endsection @push('insertar')
<script type='text/javascript' src='{{asset("js/plugins/icheck/icheck.min.js")}}'></script>
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/dropzone/dropzone.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/fileinput/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/filetree/jqueryFileTree.js')}}"></script>

@endpush