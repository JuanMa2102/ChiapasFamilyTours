@extends ('masterPage.master')

@section ('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">HOTELES</h3>
                                <a href="{{URL::action('AdminHotelesController@create')}}"><button class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Nuevo Hotel</button></a>                             
                            </div>
                            <div class="panel-body">
                                <table class="table datatable longTable">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>URL Google Maps</th>
                                            <th>Página</th>
                                            <th>Tipo de hotel</th>
                                            <th>Ubicación</th>
                                            <th>Recomendado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hotel as $item)
                                        <tr>
                                            <td class="tdShort"><img src="{{$item->imagenHotel}}" alt="img_{{$item->imagenHotel}}"></td>
                                            <td>{{ $item->nombreHotel }}</td>
                                            <td class="tdMedium hideInformation">{{ $item->direccionHotel }}</td>
                                            <td>{{ $item->paginaHotel }}</td>
                                            <td>{{ $item->tipoHotel }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td style="color: {{$item->recomendado == 1 ? '#0f0' : '#f00'}}">
                                                {{$item->recomendado == 1 ? 'Recomendado' : 'No recomendado'}}
                                            </td>
                                            <td>
                                            <ul>
                                                        <a href="{{URL::action('AdminHotelesController@edit',$item->idHotel)}}">
                                                        <button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                        <a href="" data-target="#message-box-danger-{{$item->idHotel}}" data-toggle="modal">
                                                        <button class="btn btn-danger" >
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                        </ul>
                                            </td>
                                            @include('adminViews.hoteles.delete')
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