@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
            <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->
            {!!Form::model($itinerarioActual,array('method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data','files'=>'true','action'=>['AdminItinerariosController@update',$itinerarioActual->id_itinerario]))!!} 
            {{Form::token()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Editando sección</strong></h3>
                </div>
                <div class="panel-body">
                <input name="tipoItinerario" type="hidden" value="largo">
                <input name="idDiaItinerario" name="idDiaItinerario" type="hidden" value="{{$itinerarioActual->id_dias}}">
                <input name="idPaqueteActual" name="idPaqueteActual" type="hidden" value="{{$paqueteActual}}">

                    <div class="seccionItinerario">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Texto lateral</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <textarea class="form-control summernote" name="textolateral" id="textolateral" cols="30" rows="15">{{$itinerarioActual->texto1}}</textarea>
                                    {!! $errors->first('textolateral','<span class="help-block">Es necesario introducir un texto lateral</span>')!!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Texto de pié</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <textarea class="form-control summernote" name="textopie" id="textopie" cols="30" rows="15">{{$itinerarioActual->texto2}}</textarea>
                                    {!! $errors->first('textopie','<span class="help-block">Es necesario introducir un texto de pié</span>')!!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Imagen de sección</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="file" name="imagenSeccion" class="file" accept="image/*" data-preview-file-type="any" />
                                {!! $errors->first('imagenSeccion','<span class="help-block">Es necesario introducir una imagen</span>')!!}
                            </div>
                        </div>
                    </div>                  

                </div>
                <div class="panel-footer">
                    <a href="{{route('verItinerario',[$itinerarioActual->id_dias,$paqueteActual])}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
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