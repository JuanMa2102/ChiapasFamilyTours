@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
            <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->
            {!!Form::open(array('method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','autocomplete'=>'off','action'=>'AdminPreguntasFrecuentesDetalleController@store','files'=>'true'))!!} 
            {{Form::token()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Agregar informacion Secundaria</strong></h3>
                </div>
                <div class="panel-body">

                    <div class="seccionItinerario">

                        <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Titulo De Respuesta Secundaria</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="titulo" type="text" class="form-control" />
                            </div>
                            {!! $errors->first('titulo','<span class="help-block">Es necesario introducir un titulo</span>')!!}
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Imagen de sección</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="file" name="imagenSeccion" class="file" accept="image/*" data-preview-file-type="any" />
                                {!! $errors->first('imagenSeccion','<span class="help-block">Es necesario introducir una imagen</span>')!!}
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Pie de Imagen</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="tituloImagen" type="text" class="form-control" />
                            </div>
                            {!! $errors->first('tituloImagen','<span class="help-block">Es necesario introducir un texto</span>')!!}
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">fuente de Informacion</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="fuente" type="text" class="form-control" />
                            </div>
                            {!! $errors->first('fuente','<span class="help-block">Es necesario introducir una fuente</span>')!!}
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Respuesta secundaria</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <textarea class="form-control summernote" name="descripcion" id="textolateral" cols="30" rows="15"></textarea>
                                    {!! $errors->first('descripcion','<span class="help-block">Es necesario introducir una descripcion</span>')!!}
                                </div>
                            </div>
                        </div>

                        
                    </div>                  

                </div>
                <div class="panel-footer">
                    <a href="{{ url('administrador/preguntasFrecuentes/PreguntaDetalle') }}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
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