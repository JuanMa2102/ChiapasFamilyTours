@extends('masterPage.master')

@section('content')
                 <!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">                
                 
                     <div class="row">
                         <div class="col-md-12">
 
                             <!-- START DEFAULT DATATABLE -->
                             <div class="panel panel-default">
                                 <div class="panel-heading">                                
                                     <h3 class="panel-title">ACTIVIDADES DE AVENTURA</h3>
                                     <div class="row">
                                         <a href="/administrador/create-actividad-aventura"><button class="btn btn-primary newBtn pull-right"><i class="fa fa-plus-circle"></i> Nueva Actividad</button></a>
                                     </div> 
                                                                
                                 </div>
                                  
                                 <div class="panel-body">
                                     <table class="table datatable">
                                         <thead>
                                             <tr>
                                                 <th>Imagen</th>
                                                 <th>Título</th>
                                                 <th>Inclusiones</th>
                                                 <th>Acciones</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($ActividadAventura as $item)   
                                         <tr>
                                            <td class="tdShort"><img src="{{asset($item->imagen)}}" alt=""></td>
                                            <td>{{$item->titulo}}</td>
                                            <td>{!!$item->inclusiones!!}</td>                                            </td>
                                            <td class="actionsContainer">
                                            <ul>                                                
                                                <a href="/administrador/edit-actividad-aventura/{{$item->id_actividadAventura}}">
                                                    <button class="btn btn-info"><i class="fa fa-edit"></i></button>
                                                </a>

                                                <a href="" data-target="#message-box-danger-{{$item->id_actividadAventura}}" data-toggle="modal">
                                                    <button class="btn btn-danger" >
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </a>

                                            </ul>
                                            
                                            </td>
                                            @include('adminViews.actividadesAventura.delete')
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

@push('createTrasladosScript')
        
        <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
                
                <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>  
                <!-- END THIS PAGE PLUGINS -->
        <!-- START TEMPLATE -->
                     
                <!-- END TEMPLATE -->      
        
@endpush