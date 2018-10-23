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
                                         <a href=""><button class="btn btn-primary newBtn pull-right"><i class="fa fa-plus-circle"></i> Nuevo traslado</button>
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
                                         <tbody>
                                         <tr>
                                            <td><img src="" alt=""></td>
                                            <td>Titulo traslado</td>
                                            <td>
                                                <table class="tableTraslados">
                                                    <thead>
                                                        <tr>
                                                            <th>Personas</th>
                                                            <th>Precio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>3 a 4 Personas</td>
                                                        <td>$1100</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td class="actionsContainer">
                                            <ul>
                                                <button class="btn btn-info"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                            </ul>
                                            
                                            </td>
                                         </tr>
                                         
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

<!-- THIS PAGE PLUGINS -->

        
        

@push('createTrasladosScript')
        
<script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>  
        <!-- END THIS PAGE PLUGINS -->
<!-- START TEMPLATE -->
             
        <!-- END TEMPLATE -->      

@endpush