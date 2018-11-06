@extends ('masterPage.master')

@section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">DÍAS DE PAQUETE - {{$paquete->nombre}}</h3>
                                <a href="{{ route('crearDia',$paqueteActual) }}"><button class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Nuevo Día</button></a>                             
                            </div>
                            <div class="panel-body">
                                <table class="table datatable longTable">
                                    <thead>
                                        <tr>
                                            <th>Número de días</th>
                                            <th>Descripción</th>
                                            <th>Detalles</th>
                                            <th>Inclusiones</th>
                                            <th>Galería</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @foreach($dias as $item)
                                        <tr>
                                            <td>{{ $item->cantidad }}</td>
                                            <td>{{ $item->descripcion }}</td>
                                            <td><a href="{{ route('verItinerario',[$item->id_dias,$paqueteActual]) }}"><button class="btn btn-primary">Ver detalles</button></a></td>
                                            <td style="width: 500px; white-space: pre-line;">{{ $item->inclusiones }}</td>
                                            <td style="width: 100px;"><a href="{{ url('administrador/galeria', $item->id_dias) }}"><button class="btn btn-primary">Ver galería</button></a></td>
                                            <td>
                                            <ul>
                                                        <a href="{{URL::action('AdminDiasController@edit',$item->id_dias)}}">
                                                        <button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                        <a href="" data-target="#message-box-danger-{{$item->id_dias}}" data-toggle="modal">
                                                        <button class="btn btn-danger" >
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                        </ul>
                                            </td>
                                            @include('adminViews.paquetes.dias.delete')
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{URL::action('AdminPaquetesController@index')}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
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