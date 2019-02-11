@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">INFORMACIÓN GENERAL</h3>
                    <a href="{{URL::action('AdminInfoEmpresaController@edit',$informacion->id_empresa)}}"><button class="btn btn-info pull-right"><i class="fa fa-edit"></i> Editar información</button></a>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="nombreEmpresa">Nombre de la Empresa</label>
                                        <input name="nombreEmpresa" value="{{$informacion->nombre}}" type="text" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="telefono">Teléfono Empresa</label>
                                        <input name="telefono" value="{{$informacion->telefono}}" type="text" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="direccionEmpresa">Dirección de la empresa</label>
                                        <input name="direccionEmpresa" value="{{ $informacion->direccion }}" type="text" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="correo">Correo electrónico</label>
                                        <input name="correo" type="text" value="{{ $informacion->email }}" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="horario">Horario</label>
                                        <input name="horario" type="text" value="{{ $informacion->horario }}" readonly class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="mision">Misión</label>
                                        <textarea class="form-control" name="mision" id="mision" cols="30" readonly rows="5">
                                            {!! $informacion->mision !!}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="vision">Visión</label>
                                        <textarea class="form-control" name="vision" id="vision" cols="30" readonly rows="5">
                                            {!! $informacion->vision !!}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 divLG">
                                    <div class="input-group">
                                        <label for="valores">Valores</label>
                                        <textarea class="form-control" name="valores" id="valores" cols="30" readonly rows="5">
                                            {!! $informacion->valor !!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 divLG">
                                    <label for="logo">Logo de la empresa</label>
                                    <figure>
                                        <img src="{{ $informacion->logo }}" alt="logo">
                                    </figure>
                                </div>
                                <div class="col-md-12 divLG">
                                    <label for="video">Vídeo principal</label>
                                    <iframe width="90%" height="315" src="{{ $informacion->video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->



        </div>
    </div>

</div>
<!-- PAGE CONTENT WRAPPER -->
@endsection