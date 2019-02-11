@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            {!!Form::model($hotel,array('method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data','action'=>['AdminHotelesController@update',$hotel->idHotel]))!!} 
             {{Form::token()}}
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
                                <input value="{{$hotel->nombreHotel}}" name="nombre" type="text" class="form-control" />
                            </div>

                            {!! $errors->first('nombre','<span class="help-block">Es necesario introducir un nombre</span>')!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">URL de Google Maps</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input value="{{$hotel->direccionHotel}}" name="url" type="text" class="form-control" />
                            </div>

                            {!! $errors->first('url','<span class="help-block">Es necesario introducir una url</span>')!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Página web</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input value="{{$hotel->paginaHotel}}" name="pagina" type="text" class="form-control" />
                            </div>

                            {!! $errors->first('pagina','<span class="help-block">Es necesario introducir una descripcion</span>')!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Tipo de hotel</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <select class="form-control" name="tipo" id="tipo">
                                    <option value="{{$hotel->idTipoHotel}}">{{$hotel->tipoHotel}}</option>
                                    @foreach($tipoHoteles as $item)
                                    <option value="{{$item->id_tipoHotel}}">{{$item->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>

                            {!! $errors->first('tipo','<span class="help-block">Es necesario seleccionar un tipo de hotel</span>')!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Seleccion ubicación del hotel</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <select class="form-control" name="municipio" id="municipio">
                                        <option selected value="{{$hotel->id_municipio}}">{{$hotel->nombre}}</option>
                                        @foreach($municipio as $item)
                                        <option value="{{$item->id_municipio}}">{{$item->nombre}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">¿Desea recomendar este hotel?</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <input name="recomendado" class="checkbox" {{$hotel->recomendado == 1 ? 'checked' : ''}} type="checkbox">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Imagen de hotel</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="file" name="imagenHotel" class="file" accept="image/*" data-preview-file-type="any" /> {!! $errors->first('img','<span class="help-block">Es necesario introducir una imagen</span>')!!}
                        </div>
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

@endpush