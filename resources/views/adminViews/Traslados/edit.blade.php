@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                        
                {!!Form::model($traslados,array('method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data','action'=>['AdminTrasladosController@update',$traslados->id_traslados]))!!} 
                    {{Form::token()}}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Editar Traslados</strong></h3>
                            </div>
                            <div class="panel-body">                                                                        
                                
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Traslados</label>
                                    <div class="col-md-6 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input value="{{ $traslados->nombre }}" name="nomTraslado" type="text" class="form-control"/>
                                        </div>
                                        
                            {!! $errors->first('nomTraslados','<span class="help-block">Es necesario introducir un nombre</span>')!!}                                          
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label class='col-md-3 col-xs-12 control-label'>Imagen</label>
                                    <div class='col-md-6 col-xs-12'>
                                        <input type='file' name='img' class='file' accept='image/*' data-preview-file-type='any' multiple /> 
                                    </div>
                                </div>

                                @foreach($trasladosdetalle as $item)
                                <div class='row'>
                                    <div class='form-group'>
                                        <label class='col-md-3 col-xs-12 control-label'>Personas</label>
                                            <div class='col-md-2 col-xs-6'>
                                                <div class='input-group'>
                                                    <span class='input-group-addon'>
                                                        <span class='fa fa-pencil'></span>
                                                    </span>
                                                        <input type='text' class='form-control' name='personas[]' value="{{$item->personas}}"/>
                                                </div>
                                                {!! $errors->first('personas[]','<span class="help-block">Es necesario introducir un número de personas</span>')!!}
                                            </div>
                                                <label class='col-md-1 col-xs-6 control-label'>Precio</label>
                                                    <div class='col-md-2 col-xs-6'>
                                                        <div class='input-group'>
                                                            <span class='input-group-addon'>
                                                                <span class='fa fa-pencil'></span>
                                                            </span>
                                                                <input type='text' class='form-control' name='precio[]' value="{{$item->precio}}"/>
                                                        </div>
                                                        
                                                    </div>
                                                        <div class='col-md-2'>
                                                            <button type='button' class='removeProduct'><i class='fa fa-times'></i></button>
                                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                                <div class="InclusionesTrasladosContainer"></div>                       
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="addInclusionesTraslados btn-primary"><i class="fa fa-plus-circle"></i> Añadir</button>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-footer">
                                <a href="{{URL::action('AdminTrasladosController@index')}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
                                <button class="btn btn-primary pull-right">Guardar</button>
                            </div>
                        </div>
                        {!!Form::close()!!} 
                        
                    </div>
                </div>                    
                
            </div>
            <!-- END PAGE CONTENT WRAPPER --> 
@endsection
@push('insertar')

<script type="text/javascript" src="{{ asset('js/addInclusionTraslados.js') }}"></script>

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