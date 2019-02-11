@extends('masterPage.master') @section('content')
<div class="panel-body">


    {!! $errors->first('erroregistro','
    <div class="alert alert-danger">
        <strong>Warning!</strong>Ocurrio un error, intentelo nuevamente por favor!
    </div>
    ')!!}
    <h2>Aviso de Privacidad</h2>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="politicasContent">
                {!!$datos->descripcion!!}
            </div>
        </div>
       
    </div>
   
    <div class="panel-footer">
        <a href="{{URL::action('AdminPoliticasController@edit',$datos->id)}}"><button class="btn btn-primary pull-right">Editar aviso de privacidad</button></a>
    </div>


    @endsection