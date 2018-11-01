@extends('masterPage.master')

@section('content')
{!!Form::open(array('url'=>'administrador/adminTraslados','method'=>'POST','autocomplete'=>'off','files' => 'true'))!!} 
                <div class="form-horizontal">
                <div class="panel panel-default">
                                                               
                                <div class="panel-body">                                                                                                        
                                   
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Imagen</label>
                                        <div class="col-md-6 col-xs-12">                               
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="file"  name="file" id="file"  class="file" accept="image/*" data-preview-file-type="any"/>
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>                                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nombre del Traslado</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nomstraslado" value=""/>
                                            </div>                                            
                                            <span class="help-block"></span>
                                            
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Personas</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="personas" value=""/>
                                            </div>                                            
                                            <span class="help-block"></span>
                                            
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Precio</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="precio" value=""/>
                                            </div>                                            
                                            <span class="help-block"></span>
                                            
                                        </div>
                                    </div>  


                                </div>
                                <div class="panel-footer">                                  
                                    <button class="btn btn-primary pull-right" type="submit">Guardar</button>
                                </div>
                 </div>
                </div>
{!!Form::close()!!}	

@endsection