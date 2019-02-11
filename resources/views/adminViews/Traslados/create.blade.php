@extends ('masterPage.master') 

@section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
            <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->
            {!!Form::open(array('method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','action'=>'AdminTrasladosController@store'))!!} {{Form::token()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Nuevo Traslado</strong></h3>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nombre del Traslado</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input value=" " name="nomTraslado" type="text" class="form-control" />
                            </div> 

                        {!! $errors->first('nomTraslado','<span class="help-block">Es necesario introducir un nombre</span>')!!}
                           

                        </div>
                    </div>

                    <div class='form-group'>
                        <label class='col-md-3 col-xs-12 control-label'>Imagen</label>
                        <div class='col-md-6 col-xs-12'>
                        <div class="input-group">
                            <input type='file' name='img' class='file' accept='image/*' data-preview-file-type='any' multiple /> 
                        </div>
                        

                        {!! $errors->first('img','<span class="help-block">Es necesario introducir una imagen</span>')!!}
                        </div>
                    </div>

                

                    <div class="InclusionesTrasladosContainer">
                        
                    </div>
                   
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

<!-- THIS PAGE PLUGINS -->
@push('createTrasladosScript')

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
        