@extends('masterPage.master')

@section('content')
                 <!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">                
                 
                     <div class="row">
                         <div class="col-md-12">
 
                             <!-- START DEFAULT DATATABLE -->
                             <div class="panel panel-default">
                                 <div class="panel-heading">                                
                                     <h3 class="panel-title">GALERIA</h3>
                                     <div class="row">
                                         <a href="{{URL::action('GaleriaController@create')}}"><button class="btn btn-primary newBtn pull-right"><i class="fa fa-plus-circle"></i> Nueva Imagen</button></a>
                                     </div> 
                                                                
                                 </div>
                                  
                                 <div class="panel-body">
                                     <table class="table datatable">
                                         <thead>
                                             <tr>
                                                 <th>Imagen</th>
                                                 <th>Descripcion</th>
                                                 <th>Acciones</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($datos as $item) 
                                         <tr>
                                            <td class="tdShort">
                                                <img src="{{asset($item->imagen)}}" height="150" width="200">
                                                

                                            </td>
                                            <td>{{$item->descripcion}}</td>
                                            
                                            <td class="actionsContainer">
                                            <ul>

                                                <a href="{{URL::action('GaleriaController@edit',$item->id_galeria)}}">
                                                    <button class="btn btn-info"><i class="fa fa-edit"></i></button>
                                                </a>
                                                
                                                <a href="" data-target="#message-box-danger-{{$item->id_galeria}}" data-toggle="modal">
                                                    <button class="btn btn-danger" >
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </a>

                                            </ul>
                                            
                                            </td>
                                            @include('adminViews.galeria.delete')
                                         </tr>
                                         @endforeach
                                         
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             <!-- END DEFAULT DATATABLE -->
                                        </div>
                                                <div class="panel-footer">
                                                    <a href="{{URL::action('AdminDiasController@show',$paquete->id_paquete)}}"><button type="button" class="btn btn-default"><i class="fa fa-mail-reply"></i> Atrás</button></a>
                                                </div>
                                            </div>
                         </div>
                     </div>                                
                        
                 </div>
                 <!-- PAGE CONTENT WRAPPER -->                                
                  
@endsection

@push('createTrasladosScript')
        
        <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
                
                <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        
@endpush