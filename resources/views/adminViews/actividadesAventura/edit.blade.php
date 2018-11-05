@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                        
                {!!Form::model($informacion,array('method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data','action'=>['adminActividadAventuraController@update',$informacion->id_actividadAventura]))!!} 
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
                                        
                            {!! $errors->first('nombreAventura','<span class="help-block">Es necesario introducir una nombre</span>')!!}                                          
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label class='col-md-3 col-xs-12 control-label'>Imagen</label>
                                    <div class='col-md-6 col-xs-12'>
                                        <input type='file' name='img' class='file' accept='image/*' data-preview-file-type='any' multiple /> 
                                    </div>
                                </div>

                                @foreach($informacionDetalle as $item)
                                <div class='form-group'>
                                <label class='col-md-3 col-xs-12 control-label'>Inclusiones</label>
                                <div class='col-md-4 col-xs-12'>
                                    <div class='input-group'>
                                        <span class='input-group-addon'>
                                            <span class='fa fa-pencil'></span>
                                        </span>
                                         
                                        <input type='text' class='form-control' name='inlclusion[]' value="{{$item->inclusion}}" /></div></div>
                                       
                                        <div class='col-md-2'>
                                            <button type='button' class='removeProduct'><i class='fa fa-times'></i></button>
                                        </div>
                                </div>    
                                 @endforeach

                                 <div class="InlcusionesContainer">

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="addInclusiones"><i class="fa fa-plus-circle"></i>Añadir Inclusiones</button>
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