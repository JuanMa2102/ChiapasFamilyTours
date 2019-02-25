@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <!-- Form para hacer un update, usamos el método patch para que se vaya directo al controlador en su método update, que recibe una variable de tipo Request y la id -->
            <!-- Hagan todos los formularios de esta manera, para los de create vean en el proyecto de torres batiz cómo hacemos el formulario en el caso del create. -->
            {!!Form::open(array('method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','autocomplete'=>'off','action'=>'AdminItinerariosController@store','files'=>'true'))!!} 
            {{Form::token()}}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Agregando Hotel<strong></h3>
                </div>
                <div class="panel-body">
                <input name="idDiaItinerario" type="hidden" value="EsteNoEsItinerario">
                <input name="idPaqueteActual" type="hidden" value="{{$diaActual}}">

                    <div class="seccionItinerario">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Elija un Hotel</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <select class="form-control" name="hotel">
                                        <option selected value="0">Seleccione...</option>
                                        @foreach($hotel as $item)
                                        <option value="{{$item->id_hotel}}">{{$item->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">¿Desea poner este hotel en como suplemento?</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <input name="asociado" class="checkbox" type="checkbox">
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="panel-footer">
                    
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