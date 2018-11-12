@extends ('masterPage.master')

@section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">ATRACTIVOS</h3>
                                <a href="{{URL::action('AdminAtractivosController@create')}}"><button class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Nuevo Atractivo</button></a>
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Detalles</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($atractivos as $item)
                                        <tr>
                                            <td>{{ $item->nombre }}</td>
                                            <td><a href="{{URL::action('AdminAtractivosDetalleController@show',$item->id_atractivos)}}"><button class="btn btn-primary">Ver detalles</button></a></td>
                                            <td>
                                            <ul>
                                                        <a href="{{URL::action('AdminAtractivosController@edit',$item->id_atractivos)}}">
                                                        <button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                        <a href="" data-target="#message-box-danger-{{$item->id_atractivos}}" data-toggle="modal">
                                                        <button class="btn btn-danger" >
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                        </ul>
                                            </td>
                                            @include('adminViews.atractivos.delete')
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END DEFAULT DATATABLE -->

                        

                    </div>
                </div>                                
                
            </div>
            <!-- PAGE CONTENT WRAPPER -->   
@endsection

@push('infoEmpresa')
<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='{{asset("js/plugins/icheck/icheck.min.js")}}'></script>
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>    

        <!-- END PAGE PLUGINS -->
@endpush