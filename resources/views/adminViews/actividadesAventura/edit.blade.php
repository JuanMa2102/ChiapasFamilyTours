@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                        <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
                        <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->
                    {!!Form::model($informacion,array('method'=>'PATCH','class'=>'form-horizontal' ))!!} 
                    {{Form::token()}}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Editar Actividad Aventura</strong></h3>
                            </div>
                            <div class="panel-body">                                                                        
                                
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Actividad Aventura</label>
                                    <div class="col-md-6 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input value="{{ $informacion->titulo }}" name="nombreActividad" type="text" class="form-control"/>
                                        </div>                                          
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tags</label>
                                        <div class="col-md-6 col-xs-12">                                         @foreach($informacionDetalle as $item)                                                 
                                            <input type="text" class="tagsinput" value="{{$item->inclusion}}" />
                                        @endforeach
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Teléfono de la empresa</label>
                                    <div class="col-md-6 col-xs-12">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input value="" name="telefono" type="text" class="form-control"/>
                                        </div>            
                                                                     
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Logo de la empresa</label>
                                    <div class="col-md-6 col-xs-12"> 
                                        <input type="file" class="fileinput btn-primary" name="logo" id="logo" title="Browse file"/>
                                        @if(!empty($informacion->imagen))
                                            <img src="{{asset($informacion->imagen)}}" height="200" width="280">
                                        @else
                                                No Tiene Imagen
                                        @endif
                                    </div>
                                </div>
                                
                                

                            </div>
                            <div class="panel-footer">
                                <a href="{{URL::action('adminActividadAventuraController@index')}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
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