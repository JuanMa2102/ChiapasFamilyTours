@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            {!!Form::open(array('method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','action'=>'AdminHotelesController@store'))!!} {{Form::token()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Nuevo hotel</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nombre de hotel</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input value="{{old('nombre')}}" name="nombre" type="text" class="form-control" />
                            </div>

                            {!! $errors->first('nombre','<span class="help-block">Es necesario introducir un nombre</span>')!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">URL de Google Maps</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input value="{{old('url')}}" name="url" type="text" class="form-control" />
                            </div>

                            {!! $errors->first('url','<span class="help-block">Es necesario introducir una url</span>')!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Página web</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input value="{{old('pagina')}}" name="pagina" type="text" class="form-control" />
                            </div>

                            {!! $errors->first('pagina','<span class="help-block">Es necesario introducir una descripcion</span>')!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Tipo de hotel</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <select class="form-control" name="tipo" id="tipo">
                                    <option value="0">Seleccione un hotel</option>
                                    @foreach($hotel as $item)
                                    <option value="{{$item->id_tipoHotel}}">{{$item->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>

                            {!! $errors->first('tipo','<span class="help-block">Es necesario seleccionar un tipo de hotel</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Seleccione ubicación del hotel</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <select class="form-control" placeholder="Seleccione..." name="municipio" id="municipio">
                                    
                                    @foreach($municipio as $item)
                                    <option value="{{$item->id_municipio}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {!! $errors->first('municipio','<span class="help-block">Es necesario seleccionar una ubicación</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">¿Desea recomendar este hotel?</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <input name="recomendado" class="checkbox" type="checkbox">
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('prioridad') ? 'has-error':''}}">
                        <label class="col-md-3 col-xs-12 control-label">Prioridad</label>
                        <div class="col-md-4">
                            <div class="distance-title"> Barra de prioridad del hotel: <span></span></div>
                            <div class="distance-radius-wrap fl-wrap">
                                <input id="prioridad" name="prioridad" class="distance-radius rangeslider--horizontal" onchange="updateTextInput(this.value);" type="range" min="1" max="100"
                                step="1" value="50" data-title="Radius around selected destination">
                                {!! $errors->first('prioridad','<span class="help-block">:message</span>')!!}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <span style="font-size: 260%;" class="porcentaje">50%</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Imagen de hotel</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="file" name="imagenHotel" class="file" accept="image/*" data-preview-file-type="any" /> 
                        </div>
                        {!! $errors->first('imagenHotel','<span class="help-block">Es necesario seleccionar una imagen</span>')!!}
                    </div>

                </div>
                <div class="panel-footer">
                    <a href="{{URL::action('AdminHotelesController@index')}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
                    <button class="btn btn-primary pull-right">Guardar</button>
                </div>
            </div>
            {!!Form::close()!!}

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->
@endsection

<!-- THIS PAGE PLUGINS -->
@push('createAventuraScript')

<script type="text/javascript" src="{{ asset('js/addElementsToForm.js') }}"></script>

<script type='text/javascript' src='{{asset("js/plugins/icheck/icheck.min.js")}}'></script>
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/dropzone/dropzone.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/fileinput/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/filetree/jqueryFileTree.js')}}"></script>
<script>

    function updateTextInput(value){
        $(".porcentaje").text(value + "%");
    }
</script>

@endpush