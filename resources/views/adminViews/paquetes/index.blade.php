@extends ('masterPage.master')

@section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">PAQUETES PRIVADOS</h3>
                                <a href="{{URL::action('AdminPaquetesController@create')}}"><button class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Nuevo paquete</button></a>                             
                            </div>
                            <div class="panel-body">
                                <table class="table datatable longTable">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Título de imagen</th>
                                            <th>Nombre de paquete</th>
                                            <th>Precio real</th>
                                            <th>Precio tachado</th>
                                            <th>Subtítulo de precio</th>
                                            <th>Guía rápida</th>
                                            <th>Días de paquete</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @foreach($paquetes as $item)
                                        <tr>
                                            <td class="tdShort"><img src="{{ $item->imagen }}" alt="img_{{$item->titulo_imagen}}"></td>
                                            <td>{{ $item->titulo_imagen }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td style="width: 100px;">{{ $item->precio }}</td>
                                            <td style="width: 100px;">{{ $item->preciotachado }}</td>
                                            <td class="tdShort">{{ $item->subtituloprecio }}</td>
                                            <td style="{{$item->guia == '' ? 'color: #f00;' : 'color: #0f0;'}}" class="tdShort">{{$item->guia == "" ? 'Guía rápida no asignada' : 'Guía rápida Asignada'}}</td>
                                            <td>
                                                <a href="{{URL::action('AdminDiasController@show',$item->id_paquete)}}"><button class="btn btn-success">Ver días</button></a>
                                            </td>
                                            <td>
                                            <ul>
                                                        <a href="{{URL::action('AdminPaquetesController@edit',$item->id_paquete)}}">
                                                        <button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                        <a href="" data-target="#message-box-danger-{{$item->id_paquete}}" data-toggle="modal">
                                                        <button class="btn btn-danger" >
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                        </ul>
                                            </td>
                                            @include('adminViews.paquetes.delete')
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