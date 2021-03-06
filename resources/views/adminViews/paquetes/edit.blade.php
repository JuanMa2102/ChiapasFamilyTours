@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
            <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->
            {!!Form::model($info,array('method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data','files'=>'true','action'=>['AdminPaquetesController@update',$info->id_paquete]))!!} 
            {{Form::token()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Editando paquete - {{$info->nombre}}</strong></h3>
                </div>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nombre</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="nombrePaquete" type="text" class="form-control" value="{{$info->nombre}}" />
                            </div>
                            {!! $errors->first('nombrePaquete','<span class="help-block">Es necesario introducir un título</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Descripción</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <textarea name="descPaquete" id="descPaquete" class="form-control summernote" cols="30" rows="15">{{$info->descripcion}}</textarea>
                            </div>
                            {!! $errors->first('descPaquete','<span class="help-block">Es necesario introducir una descripción</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Precio de paquete</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="precio" type="text" class="form-control" value="{{$info->precio}}"/>
                            </div>
                            {!! $errors->first('precio','<span class="help-block">Es necesario introducir un precio</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Precio de tachado</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="preciotachado" type="text" class="form-control" value="{{$info->preciotachado}}"/>
                            </div>
                            {!! $errors->first('preciotachado','<span class="help-block">Es necesario introducir un precio tachado</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Subtítulo de precio de paquete</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="subtituloprecio" type="text" class="form-control" value="{{$info->subtituloprecio}}"/>
                            </div>
                            {!! $errors->first('subtituloprecio','<span class="help-block">Es necesario introducir un subtítulo de precio</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Imagen de paquete</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="file" name="imgPaquete" class="file" accept="image/*" data-preview-file-type="any" />
                            {!! $errors->first('imgPaquete','<span class="help-block">Es necesario introducir una imagen</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Título de imagen</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="titleImg" type="text" class="form-control" value="{{$info->titulo_imagen}}"/>
                            </div>
                            {!! $errors->first('titleImg','<span class="help-block">Es necesario introducir un título de imagen</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Guía rápida</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="file" name="guia" class="file" data-preview-file-type="any" />
                        </div>
                    </div>

                    

                </div>
                <div class="panel-footer">
                    <a href="{{URL::action('AdminPaquetesController@index')}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
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