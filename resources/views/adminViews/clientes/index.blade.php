@extends('masterPage.master')

@section('content')
                 <!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">                
                 
                     <div class="row">
                         <div class="col-md-12">
 
                             <!-- START DEFAULT DATATABLE -->
                             <div class="panel panel-default">
                                 <div class="panel-heading">                                
                                     <h3 class="panel-title">LO QUE DICEN NUESTROS CLIENTES</h3>
                                     <div class="row">
                                         <a href="{{URL::action('AdminClientesController@create')}}"><button class="btn btn-primary newBtn pull-right"><i class="fa fa-plus-circle"></i> Nuevo</button></a>
                                     </div> 
                                                                
                                 </div>
                                  
                                 <div class="panel-body">
                                     <table class="table datatable">
                                         <thead>
                                             <tr>
                                                 <th>Imagen</th>
                                                 <th>Nombre</th>
                                                 <th>Mensaje</th>
                                                 <th>Acciones</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($clientes as $item) 
                                         <tr>
                                            <td class="tdShort">
                                                <img src="{{$item->imagen == '0' ? 'Imagen no asignada' : $item->imagen}}" height="150" width="200">
                                                

                                            </td>
                                            <td>{{$item->nombre}}</td>
                                            <td>{!!$item->mensaje!!}</td>
                                            
                                            <td class="actionsContainer">
                                            <ul>

                                                <a href="{{URL::action('AdminClientesController@edit',$item->id_clientes)}}">
                                                    <button class="btn btn-info"><i class="fa fa-edit"></i></button>
                                                </a>
                                                
                                                <a href="" data-target="#message-box-danger-{{$item->id_clientes}}" data-toggle="modal">
                                                    <button class="btn btn-danger" >
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </a>

                                            </ul>
                                            
                                            </td>
                                            @include('adminViews.clientes.delete')
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
                     </div>                                
                        
                 </div>
                 <!-- PAGE CONTENT WRAPPER -->                                
                  
@endsection

@push('createTrasladosScript')
        
        <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
                
                <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        
@endpush