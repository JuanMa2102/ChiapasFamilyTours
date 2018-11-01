@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
            <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->
            {!!Form::open(array('method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','action'=>'AdminDiasController@store'))!!} 
            {{Form::token()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Crear nuevo día</strong></h3>
                </div>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Cantidad</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="cantidad" type="text" class="form-control" value="{{old('cantidad')}}" />
                            </div>
                            {!! $errors->first('cantidad','<span class="help-block">Es necesario introducir una cantidad</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Descripción</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input name="descDia" type="text" class="form-control" value="{{old('descDia')}}"/>
                            </div>
                            {!! $errors->first('descDia','<span class="help-block">Es necesario introducir una descripción</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Itinerario corto</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <textarea class="form-control" name="itCorto" id="itCorto" cols="30" rows="5">{{old('itCorto')}}</textarea>
                            </div>
                            {!! $errors->first('itCorto','<span class="help-block">Es necesario introducir un itinerario</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Inclusiones del día</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <textarea class="form-control" name="inclusiones" id="inclusiones" cols="30" rows="5">{{old('inclusiones')}}</textarea>
                            </div>
                            {!! $errors->first('inclusiones','<span class="help-block">Es necesario introducir inclusiones</span>')!!}
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                    <a href="{{URL::action('AdminDiasController@show',$diaActual)}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
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