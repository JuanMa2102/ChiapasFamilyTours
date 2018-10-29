@extends('masterPage.master')

@section('content')
                 <!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">                
                 
                     <div class="row">
                         <div class="col-md-12">
 
                             <!-- START DEFAULT DATATABLE -->
                             
                             <div class="panel panel-default">
                                 <div class="panel-heading">                                
                                     <h3 class="panel-title">TRASLADOS</h3>                                     
                                     <div class="row">
                                         <a href="{{URL::action('AdminTrasladosController@create')}}"><button class="btn btn-primary newBtn pull-right"><i class="fa fa-plus-circle"></i> Nuevo Traslado</button></a>
                                     </div>                                                                 
                                 </div>                                   
                                 <div class="panel-body">                                     
                                     <table class="table datatable">
                                         <thead>
                                             <tr>
                                                 <th>Imagen</th>
                                                 <th>Título</th>
                                                 <th>Detalles</th>
                                                 <th>Acciones</th>
                                             </tr>
                                         </thead>
                                         @foreach($traslados as $item)                                         
                                         <tbody>
                                         <tr>
                                            <td class="titleTable"><img src="{{asset($item->imagen)}}" height= '150' width= '200'></td>
                                            <td class="titleTable">{{ $item->nombre}}</td>
                                            <td>
                                                <table class="tableTraslados">
                                                    <thead>
                                                        <tr>
                                                            <th>Personas</th>
                                                            <th>Precio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($trasladosdetalle as $item2)
                                                    @if($item->id_traslados == $item2->id_traslados)
                                                    
                                                    <tr>
                                                        <td>{{ $item2->personas}}</td>
                                                        <td>${{ $item2->precio}}</td>
                                                    </tr>
                                                    
                                                    @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td class="actionsContainer">
                                            <ul>
                                                <a href="{{URL::action('AdminTrasladosController@edit',$item->id_traslados)}}"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                <a href=""><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                                            </ul>
                                            
                                            </td>
                                         </tr>
                                         
                                         </tbody>                                         
                                         @endforeach
                                     </table>
                                     
                                 </div>                                                               
                             </div>                             
                             <!-- END DEFAULT DATATABLE -->
 
                         </div>
                     </div>                                
                     
                 </div>
                 <!-- PAGE CONTENT WRAPPER -->                                
                  
@endsection

<!-- THIS PAGE PLUGINS -->

        
        

@push('createTrasladosScript')
        
<script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>  
        <!-- END THIS PAGE PLUGINS -->
<!-- START TEMPLATE -->
             
        <!-- END TEMPLATE -->      

@endpush