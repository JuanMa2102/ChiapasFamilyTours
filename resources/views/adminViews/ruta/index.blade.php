@extends ('masterPage.master') @section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">RUTA DE TRABAJO</h3>
                    <a href="{{URL::action('AdminRutaController@edit',$ruta[0]->id_ruta)}}"><button class="btn btn-info pull-right"><i class="fa fa-edit"></i> Editar información de ruta</button></a>
                </div>
                <div class="panel-body">
                    <div class="container">
                    <h3>IMAGEN DE RUTA DE TRABAJO</h3>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="imageRuta">
                            <figure>
                                <img src="{{$ruta[0]->imagen}}" alt="">
                            </figure>
                            </div>
                            </div>
                        </div>
                        <h3>DESCRIPCIÓN DE RUTA DE TRABAJO</h3>
                        <div class="row">
                        <div class="col-md-12">
                        <div class="infoRuta">
                        <p style="white-space: pre-line">{!!$ruta[0]->descripcion!!}</p>
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