@extends('masterPage.master') @section('content') {!!Form::model($datos,array('method'=>'PATCH','action'=>['AdminPoliticasController@update',$datos->id],'files' => 'true'))!!} {{Form::token()}}
<div class="form-horizontal">
    <div class="panel panel-default">
        <div class="panel-body">
            <h3 class="panel-heading">Editando aviso de privacidad</h3>


            <div class="row">
                <div class="col-md-12">

                    <div class="block">
                        <textarea class="summernote" name="politicas">{{$datos->descripcion}}</textarea>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary pull-right" type="submit">Guardar</button>
            </div>
        </div>
    </div>
    {!!Form::close()!!} @endsection